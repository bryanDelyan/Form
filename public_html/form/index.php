<?php 
    $conn = mysqli_connect(
        'localhost',
        'id18737347_bryan',
        'gH]5aQv>9xF&fP0)',
        'id18737347_lista'
    );
    $getnico = "Ninguna";
    $getnico = "No";
    $ocupacion = "Otra";
    $carrera = "Ninguna";
    $codigo = "Ninguno";
    $aread = "Ninguno";
    $semillero = "Ninguno";
    $empresa = "Ninguna";
        if(isset($_POST['dataload']))
        { 
            $folderPath = "upload/";    
            $image_parts = explode(";base64,", $_POST['signed']);             
            $image_type_aux = explode("image/", $image_parts[0]);          
            $image_type = $image_type_aux[1];   
            $image_base64 = base64_decode($image_parts[1]);           
            $file = $folderPath . uniqid() . '.'.$image_type;
            file_put_contents($file, $image_base64);

            $nombre = $_POST['nombre'];
            $correo  = $_POST['correo'];
            $tipodoc = $_POST['tipodoc'];
            $ndocument = $_POST['ndocument'];
            $ntelefonico = $_POST['ntelefonico'];
            $getnicoqs = $_POST['getnicoqs'];
            if (isset($_POST['getnico'])) {
                $getnico = $_POST['getnico']; 
            }
            if (isset($_POST['ocupacion'])) {
                $ocupacion = $_POST['ocupacion'];
            }
            if (isset($_POST['empresa'])) {
                $empresa = $_POST['empresa'];
            }
            if (isset($_POST['carrera'])) {
                $carrera = $_POST['carrera'];
            }
            if (isset($_POST['codigo'])) {
                $codigo = $_POST['codigo'];
            }
            if (isset($_POST['carrera'])) {
                $carrera = $_POST['carrera'];
            }
            if (isset($_POST['aread'])) {
                $aread = $_POST['aread'];
            }
            if (isset($_POST['semillero'])) {
                $semillero = $_POST['semillero'];
            }

            $nrut = base64_encode($nombre);
            $trut = base64_encode($ndocument);
            $query = "INSERT INTO registros(nombre, correo, tipodoc, ndocument, ntelefonico, getnicoqs, getnico, ocupacion ,empresa ,carrera, codigo, aread, semillero, firma) VALUES ('$nombre','$correo','$tipodoc','$ndocument','$ntelefonico','$getnicoqs','$getnico','$ocupacion','$empresa','$carrera','$codigo','$aread','$semillero','$file')";
            $result = mysqli_query($conn, $query);
            header("Location: ../?nrut=$nrut&trut=$trut");
        } 
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
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
    <section>
        <!--  Aca pedimos los datos del usuario para el registro -->
        <script src="error.js"></script>
        <div class="wrapper">
            <h2>Formulario de ingreso</h2>
            <form id="formulario" method="POST">
                <hr>
                <div class="input-box">
                    <input type="text" placeholder="Ingrese su nombre" name="nombre" required>
                </div>
                <div class="input-box">
                    <input type="email" placeholder="Ingrese su correo" name="correo" required>
                </div>
                <div class="input-box">
                    <select class="form-select" name="tipodoc" required>
                        <option disabled selected>Tipo de documento</option>
                        <option value="TI">Tarjeta de identidad</option>
                        <option value="CD">Cedula de ciudadania</option>
                        <option value="CE">Cedula de extranjeria</option>
                        <option value="PS">Pasaporte</option>
                    </select>
                </div>

                <div class="input-box">
                    <input type="number" maxlength="15"
                        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        placeholder="Numero de documento" name="ndocument" required>
                    <small class="form-text text-muted">
                        <h3>Solo digitos</h3>
                    </small>
                </div>
                <div class="input-box">
                    <input type="number" maxlength="10"
                        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        placeholder="Numero telefonico" name="ntelefonico" required>
                    <small class="form-text text-muted">
                        <h3>Maximo 10 digitos</h3>
                    </small>
                </div>

                <div class="input-box">
                    <select class="form-select" id="selector" name="getnicoqs" required onChange="muestraMas();">
                        <option disabled selected>Grupo etnico</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="input-box oculto" id="oculto" style="display: none;">
                    <input type="text" name="getnico" placeholder="Cual?">
                </div>
                <div class="input-box">
                    <select class="form-select" id="selector2" required onChange="muestraMas2();">
                        <option disabled selected>Empresa</option>
                        <option value="ufps">UFPS Norte de Santander</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                <div class="input-box" id="oculto12" style="display: none">
                    <select class="form-select" id="selector3" name="ocupacion" required onChange="muestraMas3(); ">
                        <option disabled selected>Ocupación</option>
                        <option value="Estudiante">Estudiante</option>
                        <option value="Docente">Docente</option>
                    </select>
                </div>
                <div class="input-box oculto" id="oculto2" style="display: none;">
                    <input type="text" name="empresa" placeholder="Ingrese su ocupacion">
                </div>
                <div class="input-box oculto" id="oculto3" style="display: none;">
                    <select class="form-select" id="selector4" name="carrera" required onChange="muestraMas4();">
                        <option disabled selected>Ingrese la carrera</option>
                        <option value="ADMINISTRACION DE EMPRESA">ADMINISTRACION DE EMPRESAS</option>
                        <option value="ADMINISTRACION DE EMPRESAS NOCTURNA">ADMINISTRACION DE EMPRESAS NOCTURNA</option>
                        <option value="ARQUITECTURA">ARQUITECTURA</option>
                        <option value="COMERCIO INTERNACIONAL">COMERCIO INTERNACIONAL</option>
                        <option value="COMUNICACION SOCIAL">COMUNICACION SOCIAL</option>
                        <option value="CONTADURIA PUBLIC">CONTADURIA PUBLICA</option>
                        <option value="CONTADURIA PUBLICA NOCTURNA">CONTADURIA PUBLICA NOCTURNA</option>
                        <option value="DERECHO">DERECHO</option>
                        <option value="ENFERMERIA">ENFERMERIA</option>
                        <option value="INGENIERIA AGROINDUSTRIAL">INGENIERIA AGROINDUSTRIAL</option>
                        <option value="INGENIERIA AGRONOMICA">INGENIERIA AGRONOMICA</option>
                        <option value="INGENIERIA AMBIENTA">INGENIERIA AMBIENTAL</option>
                        <option value="INGENIERIA BIOTECNOLOGICA">INGENIERIA BIOTECNOLOGICA</option>
                        <option value="INGENIERIA CIVIL">INGENIERIA CIVIL</option>
                        <option value="INGENIERIA DE MINAS">INGENIERIA DE MINAS</option>
                        <option value="INGENIERIA DE SISTEMAS">INGENIERIA DE SISTEMAS</option>
                        <option value="INGENIERIA ELECTROMECANICA">INGENIERIA ELECTROMECANICA</option>
                        <option value="INGENIERIA ELECTRONICA">INGENIERIA ELECTRONICA</option>
                        <option value="INGENIERIA INDUSTRIAL">INGENIERIA INDUSTRIAL</option>
                        <option value="LIC. EN CIENCIAS NATURALES Y EDUCACION AMBIENTA">LIC. EN CIENCIAS NATURALES Y
                            EDUCACION AMBIENTAL</option>
                        <option value="LICENCIATURA EN EDUCACION INFANTIL">LICENCIATURA EN EDUCACION INFANTIL</option>
                        <option value="LICENCIATURA EN MATEMATICAS">LICENCIATURA EN MATEMATICAS</option>
                        <option value="QUIMICA INDUSTRIAL">QUIMICA INDUSTRIAL</option>
                        <option value="EGURIDAD Y SALUD EN EL TRABAJO NOCTURNA">SEGURIDAD Y SALUD EN EL TRABAJO NOCTURNA
                        </option>
                        <option value="TECNOLOGIA EN OBRAS CIVILES">TECNOLOGIA EN OBRAS CIVILES</option>
                        <option value="TECNOLOGIA EN PROCESOS INDUSTRIALES">TECNOLOGIA EN PROCESOS INDUSTRIALES</option>
                        <option value="TRABAJO SOCIAL">TRABAJO SOCIAL</option>
                        <option value="ZOOTECNIA">ZOOTECNIA</option>
                        <option value="LICENCIATURA EN EDUCACION COMUNITARIA">LICENCIATURA EN EDUCACION COMUNITARIA
                        </option>
                        <option value="TECNOLOGIA COMERCIAL Y FINANCIERA">TECNOLOGIA COMERCIAL Y FINANCIERA</option>
                        <option value="TECNOLOGIA EN CONSTRUCCIONES CIVILES">TECNOLOGIA EN CONSTRUCCIONES CIVILES
                        </option>
                        <option value="Otra">Otra</option>
                    </select>
                </div>
                <div class="input-box oculto" id="oculto3-2" style="display: none;">
                    <input type="text" name="codigo" placeholder="ingrese su codigo">
                </div>
                <div class="input-box oculto" id="oculto4" style="display: none;">
                    <select class="form-select" id="selector5" name="aread" required onChange="muestraMas5();">
                        <option disabled selected>Area</option>
                        <option value="Investigador">Investigador</option>
                        <option value="Administrativo">Administrativo</option>
                    </select>
                </div>
                <div class="input-box oculto" id="oculto5" style="display: none;">
                    <input type="text" name="semillero" placeholder="Nombre del semillero">
               
                </div>
                <!--  Este div con id de sig es la firma -->
                <div id="sig"></div>
                <textarea id="signature64" name="signed" style="display: none" required></textarea>
                <br>
                <button type="button" class="btn btn-danger" id="clear"><i class="uil uil-trash-alt"></i></button>
                <div class="container">
                    <img src="logo.png" alt="LBSB" class="mx-auto d-block watermark">
                </div>

                <hr>
                <div class="input-box button">
                    <input type="submit" name="dataload" value="Enviar">
                </div>
               
               
               

            </form>
        </div>
        <br><br><br> <br><br><br><br>
    </section>
</body>
<style>
.watermark {
    width: 120px;
    height: 120px;
}

.kbw-signature {
    border: 2px dashed grey;
    height: 10rem;
    width: 250px;
}
</style>
<script>
$('sig').draggable();
</script>
<script type="text/javascript">
var sig = $('#sig').signature({
    syncField: '#signature64',
    syncFormat: 'PNG'
});
$('#clear').click(function(e) {
    e.preventDefault();
    sig.signature('clear');
    $("#signature64").val('');
});
</script>

<script type="text/javascript">
function muestraMas() {
    var selector = document.getElementById('selector').value;
    var div = document.getElementById('oculto');
    if (selector == 'Si') {
        div.style.display = 'block';
    } else {
        div.style.display = 'none';
    }
}

function muestraMas2() {
    var selector = document.getElementById('selector2').value;
    var div2 = document.getElementById('oculto12');
    var div3 = document.getElementById('oculto2');
    if (selector == 'ufps') {
        div2.style.display = 'block';
        div3.style.display = 'none';
    }
    if (selector == 'otro') {
        div3.style.display = 'block';
        div2.style.display = 'none';
    }
}

function muestraMas3() {
    var selector = document.getElementById('selector3').value;
    var div2 = document.getElementById('oculto3');
    var div3 = document.getElementById('oculto3-2');
    var div4 = document.getElementById('oculto4');
    if (selector == 'Estudiante') {
        div2.style.display = 'block';
        div3.style.display = 'block';
        div4.style.display = 'none';
    }
    if (selector == 'Docente') {
        div3.style.display = 'none';
        div2.style.display = 'none';
        div4.style.display = 'block';
    }
}

function muestraMas4() {
    var selector = document.getElementById('selector4').value;
    var div2 = document.getElementById('oculto4');

    if (selector == 'Investigador') {
        div.style.display = 'block';
    } else {
        div.style.display = 'none';
    }
}

function muestraMas5() {
    var selector = document.getElementById('selector5').value;
    var div = document.getElementById('oculto5');
    if (selector == 'Investigador') {
        div.style.display = 'block';
    } else {
        div.style.display = 'none';
    }
}
</script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

</html>