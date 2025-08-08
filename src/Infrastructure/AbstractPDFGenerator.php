<?php

require __DIR__ . '/../../vendor/autoload.php';
//require('./config.php');
//require('./src/Infrastructure/Lib/Fpdf/fpdf.php');

use App\Domain\Interfaces\Entities\OrderPDFGeneratorInterface;

/**
 * Clase abstracta que contiene la lógica común para la generación de PDFs.
 * Extiende FPDF y define métodos protegidos para ser utilizados por las clases hijas.
 */
abstract class AbstractPDFGenerator extends FPDF
{
    /** @var array Datos de información de la página. */
    protected $page_info;

    /** @var array Detalles del pedido. */
    protected $order_details;

    /** @var int Margen izquierdo del documento en mm. */
    protected $left_margin = 15;

    /** @var int Indentación adicional para el contenido en mm. */
    protected $indentation = 3;

    /**
     * Constructor de la clase abstracta.
     *
     * @param array $page_info Datos generales de la página y el banner.
     * @param array $order_details Detalles del pedido a incluir en el PDF.
     */
    public function __construct($page_info, $order_details)
    {
        // El formato de página se ha cambiado a 'Letter'
        parent::__construct('P', 'mm', 'Letter');
        $this->page_info = $page_info;
        $this->order_details = $order_details;
        $this->SetAutoPageBreak(true, 15);
        $this->SetMargins($this->left_margin, $this->left_margin, $this->left_margin);
    }

    // Función auxiliar para convertir cadenas a ISO-8859-1
    protected function _iconv($text) {
        return iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $text);
    }

    /**
     * Agrega el banner y la información de la empresa al encabezado del documento.
     *
     * @return void
     */
    protected function addHeader()
    {
        // Se establece la fuente que soporta UTF-8 (manteniendo la de tu código anterior, si no quieres DejaVu)
        $this->SetFont('Arial', '', 10); // Puedes cambiar a 'DejaVuSansCondensed' si tienes la fuente instalada

        // Obtener datos del banner desde la configuración
        $banner_src = $this->page_info['banner_pdf']['src'];
        $banner_w = $this->page_info['banner_pdf']['width'];
        $banner_h = $this->page_info['banner_pdf']['height'];
        
        $page_width = $this->GetPageWidth() - $this->left_margin - $this->left_margin;
        $ratio = $banner_w / $page_width;
        $h = $banner_h / $ratio;
        $y = $this->GetY();
        
        if (file_exists($banner_src)) {
            $this->Image($banner_src, $this->left_margin, $y, $page_width, $h);
        } else {
            $this->SetY($y);
            $this->SetFont('Arial', 'B', 10);
            $this->SetTextColor(255, 0, 0);
            $this->Cell(0, $h, $this->_iconv('ADVERTENCIA: No se pudo encontrar el banner de imagen.'), 1, 1, 'C');
            $this->SetTextColor(0, 0, 0);
        }
        $this->Ln(3);

        // Añadir información de la empresa
        $this->SetX($this->left_margin);
        $this->SetFont('Arial', '', 10);
        $this->Cell(0, 5, $this->_iconv('Dirección: ' . $this->page_info['company']['address']), 0, 1, 'L');
        $this->SetX($this->left_margin);
        $this->Cell(0, 5, $this->_iconv('Teléfono: ' . $this->page_info['company']['phone']), 0, 1, 'L');
        $this->SetX($this->left_margin);
        $this->Cell(0, 5, $this->_iconv('Sitio Web: ' . $this->page_info['company']['website']), 0, 1, 'L');
        $this->Ln(5);
        $this->SetLineWidth(0.5);
        $this->Line($this->left_margin, $this->GetY(), $this->GetPageWidth() - $this->left_margin, $this->GetY());
        $this->Ln(5);
    }

    /**
     * Agrega el resumen del pedido.
     *
     * @return void
     */
    protected function addOrderSummary()
    {
        $this->SetFont('Arial', '', 12);
        $this->SetX($this->left_margin + $this->indentation);
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 10, $this->_iconv('Resumen de Pedido'), 0, 1, 'L');
        $this->SetX($this->left_margin + $this->indentation);
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 7, $this->_iconv('Pedido No: ' . $this->order_details['order_id']), 0, 1, 'L');
        $this->Ln(8);
    }

    /**
     * Agrega la tabla de productos.
     *
     * @return void
     */
    protected function addProductsTable()
    {
        $this->SetX($this->left_margin + $this->indentation);
        $this->SetFont('Arial', 'B', 10);
        $this->SetFillColor(230, 230, 230);
        $this->SetDrawColor(0, 0, 0);
        $this->SetLineWidth(.2);

        $table_w = array(90, 20, 30, 30);
        $header = array('Producto', 'Cant.', 'Precio', 'Subtotal');
        $table_total_width = array_sum($table_w);

        for($i = 0; $i < count($header); $i++) {
            $this->Cell($table_w[$i], 7, $this->_iconv($header[$i]), 1, 0, 'L', true);
        }
        $this->Ln();

        $this->SetX($this->left_margin + $this->indentation);
        $this->SetFont('Arial', '', 10);
        $this->SetFillColor(255, 255, 255);
        $fill = false;
        foreach ($this->order_details['items'] as $item) {
            $subtotal = $item['quantity'] * $item['price'];
            $this->Cell($table_w[0], 6, $this->_iconv($item['product']), 1, 0, 'L', $fill);
            $this->Cell($table_w[1], 6, $this->_iconv((string)$item['quantity']), 1, 0, 'L', $fill);
            $this->Cell($table_w[2], 6, $this->_iconv('$' . number_format($item['price'], 0, ',', '.')), 1, 0, 'L', $fill);
            $this->Cell($table_w[3], 6, $this->_iconv('$' . number_format($subtotal, 0, ',', '.')), 1, 1, 'L', $fill);
            $fill = !$fill;
            $this->SetX($this->left_margin + $this->indentation);
        }
        $this->Cell($table_total_width, 0, '', 'T');
        $this->Ln(5);
    }

    /**
     * Agrega el total a pagar.
     *
     * @return void
     */
    protected function addPaymentTotal()
    {
        $total_cell_width = 40;
        $table_total_width = 170;
        $total_label_width = $table_total_width - $total_cell_width;
        $this->SetX($this->left_margin + $this->indentation);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell($total_label_width, 7, $this->_iconv('Total a pagar:'), 0, 0, 'R');
        $this->SetFont('Arial', 'B', 12);
        $this->SetFillColor(240, 240, 240); // Fondo gris para el total
        $this->Cell($total_cell_width, 7, $this->_iconv('$' . number_format($this->order_details['total_amount'], 0, ',', '.')), 1, 1, 'L', true);
        $this->Ln(15);
    }

    /**
     * Agrega los métodos de pago con códigos QR.
     *
     * @return void
     */
    protected function addPaymentMethods()
    {
        $this->SetX($this->left_margin);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, $this->_iconv('Información de Pago'), 0, 1, 'L');
        $this->Ln(3);

        $page_width = $this->GetPageWidth() - 2 * $this->left_margin;
        $qr_size = 35;
        $box_width = 85;
        $box_gap = 5;
        $start_x = $this->left_margin;
        $start_y = $this->GetY();
        $title_height = 5;
        $text_gap = 3;
        $qr_margin = 1;
        $block_height = $title_height + $qr_size + ($qr_margin * 2) + 7;

        foreach ($this->order_details['payment_methods'] as $method) {
            if ($start_x + $box_width > $this->left_margin + $page_width) {
                $start_x = $this->left_margin;
                $start_y += $block_height + $box_gap;
            }

            $this->Rect($start_x, $start_y, $box_width, $block_height);

            $this->SetXY($start_x + $qr_margin, $start_y + $qr_margin);
            $this->SetFont('Arial', 'B', 10);
            $this->Cell($box_width - ($qr_margin * 2), $title_height, $this->_iconv('Pago por ' . $method['entity']), 0, 1, 'L');

            $qr_x = $start_x + $qr_margin;
            $qr_y = $start_y + $title_height + $qr_margin;
            if (file_exists('../../../'.$method['qr_image']['src'])) {
                $this->Image('../../../'.$method['qr_image']['src'], $qr_x, $qr_y, $qr_size);
            } else {
                $this->SetXY($qr_x, $qr_y);
                $this->SetFont('Arial', 'B', 8);
                $this->SetTextColor(255, 0, 0);
                $this->MultiCell($qr_size, 5, $this->_iconv('QR no encontrado en la ruta: ' . $method['qr_image']['src']), 1, 'C');
                $this->SetTextColor(0, 0, 0);
            }

            $text_x = $qr_x + $qr_size + $text_gap;
            $text_y_cuenta = $qr_y + ($qr_size / 2) - 3;
            $text_width = $box_width - ($qr_size + ($qr_margin * 2) + 3);

            $this->SetXY($text_x, $text_y_cuenta);
            $this->SetFont('Arial', '', 10);
            $this->Cell($text_width, 5, $this->_iconv('Cuenta: ' . $method['account_number']), 0, 1);
            $this->SetXY($text_x, $text_y_cuenta + 5);
            $this->Cell($text_width, 5, $this->_iconv('Titular: ' . $method['holder_name']), 0, 1);

            $start_x += $box_width + $box_gap;
        }
        $this->SetY($start_y + $block_height + 5);
    }

    /**
     * Agrega el pie de página.
     *
     * @return void
     */
    protected function addFooter()
    {
        $this->SetY(-50);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, $this->_iconv('Servicio al cliente'), 0, 1, 'C');
        $this->SetFont('Arial', '', 10);
        $this->Cell(0, 5, $this->_iconv('Correo: ' . $this->page_info['company']['email']), 0, 1, 'C');
        $this->Cell(0, 5, $this->_iconv('Teléfono: ' . $this->page_info['company']['phone']), 0, 1, 'C');
        $this->Cell(0, 5, $this->_iconv('Sitio Web: ' . $this->page_info['company']['website']), 0, 1, 'C');
    }
}
