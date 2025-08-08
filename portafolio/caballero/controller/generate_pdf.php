<?php

require __DIR__ . '/../../../vendor/autoload.php';
require('../../../src/Infrastructure/Lib/Fpdf/fpdf.php');
//require('./data.php');
require('../../../src/Infrastructure/AbstractPDFGenerator.php');
require('../../../src/Application/OrderPDFGenerator.php');

$order_id = $data['order_id'];

// Creamos una nueva instancia del generador de PDF y la ejecutamos
$pdf = new OrderPDFGenerator($page_info, $order_details);
$pdf->generate();
$pdf->Output('F','../../../pedidos/pedido-'.$order_id.'.pdf');

// Incluye las clases de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ----------------------------------------------------
// Configuración y envío del correo con PHPMailer
// ----------------------------------------------------
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.hostinger.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $data['smtp_username'];
    $mail->Password   = $data['smtp_password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    // Remitente del correo
    $mail->setFrom($data['from_email'], $data['from_name']);

    // Destinatarios
    foreach ($data['recipients'] as $recipient) {
        $mail->addAddress($recipient['email'], $recipient['name']);
    }

    // Leer el contenido de la plantilla HTML
    $template_html = file_get_contents('../../../'.$data['template_path']);

    // Reemplazar marcadores de posición con los datos del array
    foreach ($data as $key => $value) {
        if (is_string($value)) {
            $template_html = str_replace("{{ $key }}", $value, $template_html);
        }
    }

    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = 'Confirmación de tu pedido #' . $data['order_id'];
    $mail->Body    = $template_html;

    // ANEXAR ARCHIVO ADJUNTO (opcional)
    if (isset($data['attachment_path']) && file_exists('../../.'.$data['attachment_path'])) {
        $mail->addAttachment('../../.'.$data['attachment_path'], $data['attachment_name']);
    }else{
        echo "error: ". $data['attachment_path'];
    }

    $mail->send();
    echo 'El correo de confirmación ha sido enviado con éxito.';
} catch (Exception $e) {
    echo "Hubo un error al enviar el correo. Mailer Error: {$mail->ErrorInfo}";
}
