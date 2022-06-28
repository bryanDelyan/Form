<?php
    include("db.php");
    $peti = "SELECT * FROM registros";


    header("Pragma: public");
    header("Expires: 0");
    $filename = "informe.xls";
    header("Content-type: application/x-msdownload");
    header("Content-Disposition: attachment; filename=$filename");
    header("Pragma: no-cache");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");


?>

<table class="table shadow text-center">
    <caption>Datos de los Usuarios</caption>
    <thead>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        table {
            border: 1px solid black;
            text-align: center;
        }
        </style>
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
                    <input type="text" value="<?php echo $row['fecha']?>" disabled>
                </div>
                <?php } ?>
            </td>

        </tr>

    </tbody>
</table>