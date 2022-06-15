<?php
   include './includes/header.php';
?>
<?php

if (!$_SESSION['user'] == "admin") {
    header("location: login.php");
}

?>
<br><br><br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<br><br><br>
<section class="contact" id="contact">
    <div class="row">
        <form method="POST">
            <div class="box" style="text-align: center;">
                <h1>Datos de los usuarios</h1>
            </div>
            
            <div class="scrollmenu">
                <table class="table shadow text-center">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nombre</th>
                            <th>correo</th>
                            <th>tipodc</th>
                            <th>ndocument</th>
                            <th>ntelefonico</th>
                            <th>getnico</th>
                            <th>getnicor</th>
                            <th>ocupacion</th>
                            <th>empresa</th>
                            <th>carrera</th>
                            <th>codigo</th>
                            <th>aread</th>
                            <th>semillero</th>
                            <th>firma</th>
                            <th>fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['id']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['nombre']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['correo']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['tipodoc']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['ndocument']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>

                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['ntelefonico']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['getnicoqs']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['getnico']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['ocupacion']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['empresa']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['carrera']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['codigo']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['aread']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['semillero']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['firma']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query = "SELECT * FROM registros";
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['fecha']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>
            <button type="success" class="btn btn-success btn-lg" name="ecxel">Dowload ECXEL</button>

        </form>

    </div>

</section>
<br><br><br><br><br><br>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<style>
a {
    text-decoration: none;
}

table {
    height: 300px;
}

div.scrollmenu {
    overflow: auto;
    white-space: nowrap;
}

input {
    max-width: 110px;
    min-width: 20px;
    text-align: center;
}
</style>
<?php
   include '../includes/footer.php';
?>