<?php

// Carga el autoloader de Composer para las dependencias de PHPMailer
require '../vendor/autoload.php';

// Incluye las clases de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../data.php';

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
    $template_html = file_get_contents($data['template_path']);

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
    if (isset($data['attachment_path']) && file_exists($data['attachment_path'])) {
        $mail->addAttachment($data['attachment_path'], $data['attachment_name']);
    }

    $mail->send();
    echo 'El correo de confirmación ha sido enviado con éxito.';
} catch (Exception $e) {
    echo "Hubo un error al enviar el correo. Mailer Error: {$mail->ErrorInfo}";
}
