<?php
    session_start();
    include("db.php");
    
    if (!isset($_SESSION['correo'])) {
        header("Location: login.php"); 
    }
    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: login.php");
        die();
    }
    $correo = $_SESSION['correo'];
    $contra = $_SESSION['contra'];
    $query = "SELECT * FROM admin WHERE correo = '$correo' and contraseña = '$contra'";
        if($result= $conn->query($query)){
            $roow=$result->fetch_array(); 
            $nr =$result->num_rows; 
            //Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.
            if($nr == 1){ 
            }
            //Si no existe lo va a enviar al login otra vez.
            else if($nr <= 0) { 
                header("Location: login.php"); 
            }  
        }

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="icon" href="./logo.png">
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


<body>

    <header class="header">
        <section class="flex">
            <a href="index.php" class="logo">Fablab <span style="color: var(--green)">QR</span></a>
            <a href="" class="logo">Admin mode</a>
            <nav class="navbar">
                <form method="POST">
                    <button type="success" class="btn" name="logout"> <a href=""><i
                                class="uil uil-signout"></i></a></button>
                </form>


            </nav>
        </section>

    </header>

    <style>
    #canvas {
        height: 280px;
        width: 95%;
    }

    .kbw-signature {
        border: 4px dashed gray;
        height: 280px;
        width: 95%;
    }

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