<?php
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

$subject = $_POST["subject"];
if (!isset($subject)) {
	echo "Fehler beim abschicken des Formulars.";
	exit;
}
$title = $subject . ': ' . $_POST["name"] . ' ' . date('d.m.Y');
$text = "";
foreach ($_POST as $key => $value)
{
	if ($key != "g-recaptcha-response") {
		$text .= "$key: $value\n";
	}
}
mail('info@cascasting.com', $title, $text, 'From:formular@cascasting.com');
echo "$subject erfolgreich per E-Mail abgeschickt.";
?>
