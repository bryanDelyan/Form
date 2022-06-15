<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css"
        rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
    </script>
    <script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
    <link type="text/css" href="css/jquery.signature.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.signature.js"></script>
</head>

<style>
@media screen (max-width:700px) {
    .wrapper {
        position: relative;
        max-width: 700px;
        width: 100%;
        background: #fff;
        padding: 34px;
        border-radius: 6px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }
}

@media screen (max-width:1700px) {
    .wrapper {
        position: relative;
        max-width: 600px;
        width: 150%;
        background: #fff;
        padding: 34px;
        border-radius: 6px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }
}
</style>

<body>

    <header class="header">
        <section class="flex">
            <a href="index.php" class="logo">Fablab <span style="color: var(--green)">QR</span></a>
            <nav class="navbar">
                <a href="./index.php">home</a>
                <a href="./form.php">ingresar</a>
                <a style="color: #E74C3C;">

                <?php 
                if (isset($_SESSION['usuario'])) {
                    echo $_SESSION['usuario'];
                }
                ?></a>
                
    
            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>
        </section>

    </header>