<?php
require('./src/Infrastructure/AbstractPDFGenerator.php');

use App\Domain\OrderPDFGeneratorInterface;

/**
 * Clase concreta para la generación de PDFs de pedidos.
 * Hereda de AbstractPDFGenerator e implementa la interfaz de generación.
 */
class OrderPDFGenerator extends AbstractPDFGenerator
{
    /**
     * Método principal para generar y enviar el PDF completo.
     *
     * @return void
     */
    public function generate()
    {
        $this->AddPage();
        $this->addHeader();
        $this->addOrderSummary();
        $this->addProductsTable();
        $this->addPaymentTotal();
        $this->addPaymentMethods();
        $this->addFooter();
        $this->Output();
    }
}
