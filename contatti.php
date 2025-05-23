<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="contatti.css?v=1.10.2">
    <title>Contatti</title>
</head>
<body>
    <header>
        <?php include("header.php"); ?>
    </header>

    <h1 class="titolo">Contattami compilando il form</h1>
    <section class="section-contact">
			<div class="container">
				<form class="form" action="send.php" method="POST">
						<input type="text" class="text" name="nome" required placeholder="Nome">

						<input type="text" class="text" name="cognome" required placeholder="Cognome">

						<input type="email" class="text" name="email" required placeholder="E-mail">

						<input type="number" class="text" name="num" required placeholder="Telefono">

						<textarea name="messaggio" name="messaggio" placeholder="Scrivi qualcosa..."></textarea>

						<input class="invia" type="submit" value="Invia">
				</form>
			</div>
		</section>

    <p class="desc-contatti">Puoi anche contattarmi alla seguente E-mail <br>
        <a href="mailto:emilio.malizia@itimonaco.it">emilio.malizia@itimonaco.it</a>
    </p>
    <footer>
        <?php include("footer.php"); ?>
    </footer>
</body>
</html>