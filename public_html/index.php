<?php
    session_start();


?>
<?php
   include './includes/header.php';
?>

<section class="home" id="home">

    <div class="row">

        <div class="content">

            <h3 style="color: #3d3d3d">Ingeso<span>QR</span></h3>
            <a href="form.php" class="btn" style="display: <?php echo $w2 ?>">Generar Formulario</a>


        </div>

        <div class="image">
            <img src="logo.png">
        </div>

    </div>

</section>

<section class="count">

    <div class="box-container">

        <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <div class="content">
                <h3>150+</h3>
                <p>courses</p>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-user-graduate"></i>
            <div class="content">
                <h3>1300+</h3>
                <p>students</p>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-chalkboard-user"></i>
            <div class="content">
                <h3>80+</h3>
                <p>teachers</p>
            </div>
        </div>

        <div class="box">
            <i class="fas fa-face-smile"></i>
            <div class="content">
                <h3>100%</h3>
                <p>satisfaction</p>
            </div>
        </div>

    </div>

</section>
<section class="contact" id="contact">

    <h1 class="heading"><span>contact</span> us</h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="" method="post">
            <span>your name</span>
            <input type="text" required placeholder="enter your full name" maxlength="50" name="name" class="box">
            <span>your email</span>
            <input type="email" required placeholder="enter your valie email" maxlength="50" name="email" class="box">
            <span>your number</span>
            <input type="number" required placeholder="enter your valie number" max="9999999999" min="0" name="number"
                class="box" onkeypress="if(this.value.length == 10) return false;">
            <span>select course</span>
            <select name="couses" class="box" required>
                <option value="" disabled selected>select the course --</option>
                <option value="web developement">web developement</option>
                <option value="science and biology">science and biology</option>
                <option value="engineering">engineering</option>
                <option value="digital marketing">digital marketing</option>
                <option value="graphic design">graphic design</option>
                <option value="teaching">teaching</option>
                <option value="social studies">social studies</option>
                <option value="data analysis">data analysis</option>
                <option value="artificial intelligence">artificial intelligence</option>
            </select>
            <span>select gender</span>
            <div class="radio">
                <input type="radio" name="gender" value="male" id="male">
                <label for="male">male</label>
                <input type="radio" name="gender" value="female" id="female">
                <label for="female">female</label>
            </div>
            <input type="submit" value="send message" class="btn" name="send">
        </form>

    </div>

</section>
<?php
   include './includes/footer.php';
?>
