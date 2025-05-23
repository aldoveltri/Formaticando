<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Lavori</title>
</head>
<body>
<header>
    <?php include("header.php"); ?>
</header>
<h1 class="titolo">Lavori</h1>
<p class="desc">Qui troverete tutti i lavori delle classi terze,
                quarte e quinte informatica sezione G dell'istituto A.Monaco.
                Scegli una delle seguenti classi per vedere i lavori.
</p>

<div class="classi">
            <link rel="stylesheet" href="lavori.css">
            <div class="classe">
                <h4>3G Informatica</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae alias rem suscipit quaerat at laborum!</p>
                <a href="terza.php"><button class="btn">Vedi i lavori</button></a>
            </div>
            <div class="classe">
                <h4>4G Informatica</h4>
                <p>Visualizza i lavori della classe 4G Informatica, come Intellilearn: una quiz-app sull'IA.</p>
                <a href="quarta.php"><button class="btn">Vedi i lavori</button></a>
            </div>
            <div class="classe">
                <h4>5G Informatica</h4>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem sint, eligendi quaerat omnis molestias illum!</p>
                <a href="quinta.php"><button class="btn">Vedi i lavori</button></a>
            </div>
        </div>

<footer>
    <?php include("footer.php"); ?>
</footer>
</body>
</html>