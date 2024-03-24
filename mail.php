<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

# Verify recapatcha
$post_data = http_build_query(
    array(
        'secret' => "6Le10aEpAAAAALCiSqwU69JpPI8u1-V5A_13fTVP",
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
    )
);
$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $post_data
    )
);
$context  = stream_context_create($opts);
$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
$result = json_decode($response);
if (!$result->success) {
    echo "Nutzerverifizierung fehlgeschlagen.";
	exit;
}

# Send email
$subject = $_POST["subject"];
$title = $subject . ': ' . $_POST["name"] . ' ' . date('d.m.Y');
$text = "";
foreach ($_POST as $key => $value)
{
	if ($key != "g-recaptcha-response") {
		$text .= "$key: $value\n";
	}
}

$mail = new PHPMailer();
$mail->setFrom("formular@cascasting.com", "Webforumlar");
$mail->addAddress("info@cascasting.com", "CAS Info");
$mail->Subject = $title;
$mail->Body = $text;

$userfile = $_FILES['userfile'];
if (is_uploaded_file($userfile['tmp_name'])) {
    // Extract an extension from the provided filename
    $ext = PHPMailer::mb_pathinfo($userfile['name'], PATHINFO_EXTENSION);
    // Define a safe location to move the uploaded file to, preserving the extension
    $uploadfile = tempnam(sys_get_temp_dir(), hash('sha256', $userfile['name'])) . '.' . $ext;
    $filename = $userfile['name'];
    if (move_uploaded_file($userfile['tmp_name'], $uploadfile)) {
        if (!$mail->addAttachment($uploadfile, $filename)) {
            echo 'Failed to attach file ' . $filename;
            exit;
        }
    } else {
        echo 'Failed to move file to ' . $uploadfile;
        exit;
    }
}

if ($mail->send()) {
    echo "$subject erfolgreich per E-Mail abgeschickt.";
} else {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
