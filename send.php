<?php
	$nome_mittente = htmlspecialchars($_POST['nome']);
	$cognome_mittente = htmlspecialchars($_POST['cognome']);
	$messaggio = htmlspecialchars($_POST['messaggio']);
	$mail_form = htmlspecialchars($_POST['email']);
	$num = htmlspecialchars($_POST['num']);
	$mail_mittente = "formaticando@altervista.org";
	$mail_destinatario = "emilio.malizia@itimonaco.it";

$mail_oggetto = "Messaggio dal form contatti di Formaticando";

$mail_corpo = <<<HTML
<html>
<head>
<title>Email da Formaticando</title>
</head>
<body>
	<strong>
		{$nome_mittente} {$cognome_mittente}
	</strong>
	<p>{$messaggio}</p><br><br>

	<b>{$mail_form}<br>{$num}</b><br><br><br><br>
</body>
</html>
HTML;

$mail_headers = "From: " . $nome_mittente . " <" . $mail_mittente . ">\r\n";
$mail_headers .= "Reply-To: " . $mail_mittente . "\r\n";
$mail_headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

$mail_headers .= "MIME-Version: 1.0\r\n";
$mail_headers .= "Content-type: text/html; charset=iso-8859-1";

if (mail($mail_destinatario, $mail_oggetto, $mail_corpo, $mail_headers)){
        echo "<script>
            alert('Email inviata con successo!');
            window.location.href = 'contatti.php';
        </script>";
    } else {
        echo "<script>
            alert('Errore nell\'invio dell\'email.');
            window.location.href = 'contatti.php';
        </script>";
    }

?>