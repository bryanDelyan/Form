<?php
   include './includes/header.php';
?>
<?php 
    if (isset($_POST['login'])) {
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        if ($correo == "admin" and $contraseña == "admin") {
            $_SESSION['user'] = $correo;
            header("Location: index.php");
        }
    }
?>
<br><br><br>
<br><br><br>
<section class="contact" id="contact">
    <div class="row">
        <form method="POST">
            <div class="box" style="text-align: center;">
                <h1>Este apartado es unicamente para encargados del sitio</h1>
            </div>
            <input type="text" name="correo" placeholder="Ingrese el correo" class="box" required>
            <input type="text" placeholder="Ingrese la contraseña" class="box" name="contraseña" required>
            <input type="submit" class="btn" name="login" style="color: #58D68D" value="Login">
        </form>

    </div>

</section>
<br><br><br>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

<?php
   include '../includes/footer.php';
?>