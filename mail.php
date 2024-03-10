<?php
$subject = $_GET["subject"];
if (!isset($subject)) {
	echo "Fehler beim abschicken des Formulars.";
	exit;
}
$title = $subject . ': ' . $_POST["name"] . ' ' . date('d.m.Y');
$text = "";
foreach($_POST as $key => $value)
{
	$text .= "$key: $value\n";
}
mail('info@cascasting.com', $title, $text, 'From:formular@cascasting.com');
echo "$subject erfolgreich per E-Mail abgeschickt.";
?>
