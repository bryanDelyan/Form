<?php 
    session_start();


    include("db.php");

    
    if (isset($_POST['submit'])) {
       $_SESSION['correo'] = $_POST['gmail'];
       $_SESSION['contra'] = $_POST['contra'];
        $correo = $_SESSION['correo'];
        $contra = $_SESSION['contra'];
        $query = "SELECT * FROM admin WHERE correo = '$correo' and contraseña = '$contra'";
        if($result= $conn->query($query)){
            $roow=$result->fetch_array(); 
            $nr =$result->num_rows; 
            //Si existe el usuario lo va a redireccionar a la pagina de Bienvenida.
            if($nr == 1){ 
              header ("Location: index.php"); 
            }
            //Si no existe lo va a enviar al login otra vez.
            else if($nr <= 0) { 
                header("Location: login.php"); 
            }  
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../logo.png">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body>
    <div class="wrapper">
        <h2>Login Admin</h2>
        <form method="POST">
            <div class="input-box">
                <input type="text" name="gmail" placeholder="Enter your email" required>
            </div>
            <div class="input-box">
                <input type="password" name="contra" placeholder="Enter your password" required>
            </div>
            <div class="input-box button">
                <input type="submit" name="submit" value="Login">
            </div>

        </form>
    </div>

</body>

</html>

<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #E74C3C;
}

.wrapper {
    position: relative;
    max-width: 430px;
    width: 100%;
    background: #fff;
    padding: 34px;
    border-radius: 6px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.wrapper h2 {
    position: relative;
    font-size: 22px;
    font-weight: 600;
    color: #333;
}

.wrapper h2::before {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    height: 3px;
    width: 28px;
    border-radius: 12px;
    background: #E74C3C;
}

.wrapper form {
    margin-top: 30px;
}

.wrapper form .input-box {
    height: 52px;
    margin: 18px 0;
}

form .input-box input {
    height: 100%;
    width: 100%;
    outline: none;
    padding: 0 15px;
    font-size: 17px;
    font-weight: 400;
    color: #333;
    border: 1.5px solid #C7BEBE;
    border-bottom-width: 2.5px;
    border-radius: 6px;
    transition: all 0.3s ease;
}

.input-box input:focus,
.input-box input:valid {
    border-color: #E74C3C;
}

form .policy {
    display: flex;
    align-items: center;
}

form h3 {
    color: #707070;
    font-size: 14px;
    font-weight: 500;
    margin-left: 10px;
}

.input-box.button input {
    color: #fff;
    letter-spacing: 1px;
    border: none;
    background: #E74C3C;
    cursor: pointer;
}

.input-box.button input:hover {
    background: #222222;
}

form .text h3 {
    color: #333;
    width: 100%;
    text-align: center;
}

form .text h3 a {
    color: #4070f4;
    text-decoration: none;
}

form .text h3 a:hover {
    text-decoration: underline;
}
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

 :root {
    /* ===== Colors ===== */
    --primary-color: #E74C3C;
    --panel-color: #ECF0F1;
    --text-color: #000;
    --black-light-color: #707070;
    --border-color: #e6e5e5;
    --toggle-color: #DDD;
    --box1-color: #A9CCE3;
    --box2-color: #7DCEA0;
    --box3-color: #EC7063;
    --title-icon-color: #fff;
    /* ====== Transition ====== */
    --tran-05: all 0.5s ease;
    --tran-03: all 0.3s ease;
    --tran-03: all 0.2s ease;
}

body {
    min-height: 100vh;
    background-color: var(--primary-color);
}

body.dark {
    --primary-color: #E74C3C;
    --panel-color: #242526;
    --text-color: #CCC;
    --black-light-color: #CCC;
    --border-color: #4D4C4C;
    --toggle-color: #FFF;
    --box1-color: #3A3B3C;
    --box2-color: #3A3B3C;
    --box3-color: #3A3B3C;
    --title-icon-color: #CCC;
}


/* === Custom Scroll Bar CSS === */

 ::-webkit-scrollbar {
    width: 8px;
}

 ::-webkit-scrollbar-track {
    background: #f1f1f1;
}

 ::-webkit-scrollbar-thumb {
    background: #3A3B3C;
    border-radius: 12px;
    transition: all 0.3s ease;
}

 ::-webkit-scrollbar-thumb:hover {
    background: #3A3B3C;
}

body.dark::-webkit-scrollbar-thumb:hover,
body.dark .activity-data::-webkit-scrollbar-thumb:hover {
    background: #3A3B3C;
    color: #3A3B3C;
}

nav {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 250px;
    padding: 10px 14px;
    background-color: var(--panel-color);
    border-right: 1px solid var(--border-color);
    transition: var(--tran-05);
}

nav.close {
    width: 73px;
}

nav .logo-name {
    display: flex;
    align-items: center;
}

nav .logo-image {
    display: flex;
    justify-content: center;
    min-width: 45px;
}

nav .logo-image img {
    width: 40px;
    object-fit: cover;
    border-radius: 50%;
}

nav .logo-name .logo_name {
    font-size: 22px;
    font-weight: 600;
    color: var(--text-color);
    margin-left: 14px;
    transition: var(--tran-05);
}

nav.close .logo_name {
    opacity: 0;
    pointer-events: none;
}

nav .menu-items {
    margin-top: 40px;
    height: calc(100% - 90px);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.menu-items li {
    list-style: none;
}

.menu-items li a {
    display: flex;
    align-items: center;
    height: 50px;
    text-decoration: none;
    position: relative;
}

.nav-links li a:hover:before {
    content: "";
    position: absolute;
    left: -7px;
    height: 5px;
    width: 5px;
    border-radius: 50%;
    background-color: var(--primary-color);
}

body.dark li a:hover:before {
    background-color: var(--text-color);
}

.menu-items li a i {
    font-size: 24px;
    min-width: 45px;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--black-light-color);
}

.menu-items li a .link-name {
    font-size: 18px;
    font-weight: 400;
    color: var(--black-light-color);
    transition: var(--tran-05);
}

nav.close li a .link-name {
    opacity: 0;
    pointer-events: none;
}

.nav-links li a:hover i,
.nav-links li a:hover .link-name {
    color: var(--primary-color);
}

body.dark .nav-links li a:hover i,
body.dark .nav-links li a:hover .link-name {
    color: var(--text-color);
}

.menu-items .logout-mode {
    padding-top: 10px;
    border-top: 1px solid var(--border-color);
}

.menu-items .mode {
    display: flex;
    align-items: center;
    white-space: nowrap;
}

.menu-items .mode-toggle {
    position: absolute;
    right: 14px;
    height: 50px;
    min-width: 45px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

.mode-toggle .switch {
    position: relative;
    display: inline-block;
    height: 22px;
    width: 40px;
    border-radius: 25px;
    background-color: var(--toggle-color);
}

.switch:before {
    content: "";
    position: absolute;
    left: 5px;
    top: 50%;
    transform: translateY(-50%);
    height: 15px;
    width: 15px;
    background-color: var(--panel-color);
    border-radius: 50%;
    transition: var(--tran-03);
}

body.dark .switch:before {
    left: 20px;
}

.dashboard {
    position: relative;
    left: 250px;
    background-color: var(--panel-color);
    min-height: 100vh;
    width: calc(100% - 250px);
    padding: 10px 14px;
    transition: var(--tran-05);
}

nav.close~.dashboard {
    left: 73px;
    width: calc(100% - 73px);
}

.dashboard .top {
    position: fixed;
    top: 0;
    left: 250px;
    display: flex;
    width: calc(100% - 250px);
    justify-content: space-between;
    align-items: center;
    padding: 10px 14px;
    background-color: var(--panel-color);
    transition: var(--tran-05);
    z-index: 10;
}

nav.close~.dashboard .top {
    left: 73px;
    width: calc(100% - 73px);
}

.dashboard .top .sidebar-toggle {
    font-size: 26px;
    color: var(--text-color);
    cursor: pointer;
}

.dashboard .top .search-box {
    position: relative;
    height: 45px;
    max-width: 600px;
    width: 100%;
    margin: 0 30px;
}

.top .search-box input {
    position: absolute;
    border: 1px solid var(--border-color);
    background-color: var(--panel-color);
    padding: 0 25px 0 50px;
    border-radius: 5px;
    height: 100%;
    width: 100%;
    color: var(--text-color);
    font-size: 15px;
    font-weight: 400;
    outline: none;
}

.top .search-box i {
    position: absolute;
    left: 15px;
    font-size: 22px;
    z-index: 10;
    top: 50%;
    transform: translateY(-50%);
    color: var(--black-light-color);
}

.top img {
    width: 40px;
    border-radius: 50%;
}

.dashboard .dash-content {
    padding-top: 50px;
}

.dash-content .title {
    display: flex;
    align-items: center;
    margin: 60px 0 30px 0;
}

.dash-content .title i {
    position: relative;
    height: 35px;
    width: 35px;
    background-color: var(--primary-color);
    border-radius: 6px;
    color: var(--title-icon-color);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
}

.dash-content .title .text {
    font-size: 24px;
    font-weight: 500;
    color: var(--text-color);
    margin-left: 10px;
}

.dash-content .boxes {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

.dash-content .boxes .box {
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 12px;
    width: calc(100% / 3 - 15px);
    padding: 15px 20px;
    background-color: var(--box1-color);
    transition: var(--tran-05);
}

.boxes .box i {
    font-size: 35px;
    color: var(--text-color);
}

.boxes .box .text {
    white-space: nowrap;
    font-size: 18px;
    font-weight: 500;
    color: var(--text-color);
}

.boxes .box .number {
    font-size: 40px;
    font-weight: 500;
    color: var(--text-color);
}

.boxes .box.box2 {
    background-color: var(--box2-color);
}

.boxes .box.box3 {
    background-color: var(--box3-color);
}

.dash-content .activity .activity-data {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}

.activity .activity-data {
    display: flex;
}

.activity-data .data {
    display: flex;
    flex-direction: column;
    margin: 0 15px;
}

.activity-data .data-title {
    font-size: 20px;
    font-weight: 500;
    color: var(--text-color);
}

.activity-data .data .data-list {
    font-size: 18px;
    font-weight: 400;
    margin-top: 20px;
    white-space: nowrap;
    color: var(--text-color);
}

@media (max-width: 1000px) {
    nav {
        width: 73px;
    }
    nav.close {
        width: 250px;
    }
    nav .logo_name {
        opacity: 0;
        pointer-events: none;
    }
    nav.close .logo_name {
        opacity: 1;
        pointer-events: auto;
    }
    nav li a .link-name {
        opacity: 0;
        pointer-events: none;
    }
    nav.close li a .link-name {
        opacity: 1;
        pointer-events: auto;
    }
    nav~.dashboard {
        left: 73px;
        width: calc(100% - 73px);
    }
    nav.close~.dashboard {
        left: 250px;
        width: calc(100% - 250px);
    }
    nav~.dashboard .top {
        left: 73px;
        width: calc(100% - 73px);
    }
    nav.close~.dashboard .top {
        left: 250px;
        width: calc(100% - 250px);
    }
    .activity .activity-data {
        overflow-X: scroll;
    }
}

@media (max-width: 780px) {
    .dash-content .boxes .box {
        width: calc(100% / 2 - 15px);
        margin-top: 15px;
    }
}

@media (max-width: 560px) {
    .dash-content .boxes .box {
        width: 100%;
    }
}

@media (max-width: 400px) {
    nav {
        width: 0px;
    }
    nav.close {
        width: 73px;
    }
    nav .logo_name {
        opacity: 0;
        pointer-events: none;
    }
    nav.close .logo_name {
        opacity: 0;
        pointer-events: none;
    }
    nav li a .link-name {
        opacity: 0;
        pointer-events: none;
    }
    nav.close li a .link-name {
        opacity: 0;
        pointer-events: none;
    }
    nav~.dashboard {
        left: 0;
        width: 100%;
    }
    nav.close~.dashboard {
        left: 73px;
        width: calc(100% - 73px);
    }
    nav~.dashboard .top {
        left: 0;
        width: 100%;
    }
    nav.close~.dashboard .top {
        left: 0;
        width: 100%;
    }
}

.loader {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 20;
}

.disppear {
    animation: vanish 1s ease forwards;
}

@keyframes vanish {
    100% {
        opacity: 0;
        visibility: hidden;
        animation-delay: 1s;
    }
}
</style>