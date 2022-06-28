<?php
   include './includes/header.php';
?>
<?php

if (isset($_POST['buscar'])) {
    if (isset($_POST['fecha'])) {
        $fecha = $_POST['fecha'];
        $peti = "SELECT * FROM registros WHERE fecha LIKE '%$fecha%'";
    }
}else {
    $peti = "SELECT * FROM registros";
}

?>
<br><br><br>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<br><br><br>

<style>
.contact{
    height: 100%;
}
a {
    text-decoration: none;
}

table {
    min-height: 100px;
    max-height: 200px
}

div.scrollmenu {
    overflow: auto;
    white-space: nowrap;
    min-height: 100px;
    max-height: 300px
}

input {
    padding-top: 25px;
    padding-bottom: 25px;
    max-width: 150px;
    min-width: 20px;
    text-align: center;
}

.firma {
    width: 200px;
    height: 70px;
    padding: 10px;
}

</style>
<section class="contact" id="contact">
    <div class="row">
        <form method="POST">
            <div class="box" style="text-align: center;">
                <h1>Datos de los usuarios</h1>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <form method="POST">
                        <button class="btn btn-primary btn-lg me-md-2" name="buscar" type="sucess">Buscar en: </button>

                        <input class="btn btn-light btn-lg" id="bday-month" type="month" name="fecha" value="2022-06">
                    </form>

                </div>
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
                            <td class="di"> <?php
                        $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['id']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['nombre']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['correo']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['tipodoc']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['ndocument']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>

                            <td> <?php
                        $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['ntelefonico']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['getnicoqs']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['getnico']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                        $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['ocupacion']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                         $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['empresa']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                          $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['carrera']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                          $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['codigo']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                           $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['aread']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                           $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>
                                <div class="i">
                                    <input type="text" value="<?php echo $row['semillero']?>" disabled>
                                </div>
                                <?php } ?>
                            </td>
                            <td> <?php
                           $query =  $peti;
                        $result_task = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result_task)) { ?>

                                <div class="i">
                                    <img src="../<?php echo $row['firma']?>" class="firma">
                                </div>

                                <?php } ?>
                            </td>
                            <td> <?php
                         $query =  $peti;
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
        </form>
    </div>

    <form action="ecxel.php">
        <button type="submit" class="btn btn-success btn-lg" name="ecxel">Dowload ECXEL</button>
    </form>
</section>


<?php
   include '../includes/footer.php';
?>