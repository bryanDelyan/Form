<?php     
    include("admin/db.php");
    session_start();
    $getnico = "Ninguna";
    $getnico = "No";
    $ocupacion = "Otra";
    $carrera = "Ninguna";
    $codigo = "Ninguno";
    $aread = "Ninguno";
    $semillero = "Ninguno";
    $empresa = "Ninguna";
    if(isset($_POST['actualizar']))
    { 
        $persona = $_SESSION['usuario'];
        $numerodocumento = $_SESSION['ndocumento'];
        $folderPath = "upload/";    
        $image_parts = explode(";base64,", $_POST['signed']);             
        $image_type_aux = explode("image/", $image_parts[0]);          
        $image_type = $image_type_aux[1];   
        $image_base64 = base64_decode($image_parts[1]);           
        $file = $folderPath . uniqid() . '.'.$image_type;
        file_put_contents($file, $image_base64);

        $query = "UPDATE registros SET firma = '$file', fecha = NOW() WHERE ndocument = $numerodocumento";
        $result = mysqli_query($conn, $query);
        header("Location: ./index.php");
    } 
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
            
            $query = "SELECT * FROM registros WHERE ndocument = '$ndocument' and nombre = '$nombre'";
            if($result= $conn->query($query)){
                $roow=$result->fetch_array(); 
                $nr =$result->num_rows; 
                //Si existe el usuario solo actualizaremos los datos al id selecionado
                if($nr == 1){ 
                }
                //Si no existe creara uno nuevo
                else if($nr <= 0) { 
                    $query = "INSERT INTO registros(nombre, correo, tipodoc, ndocument, ntelefonico, getnicoqs, getnico, ocupacion ,empresa ,carrera, codigo, aread, semillero, firma) VALUES ('$nombre','$correo','$tipodoc','$ndocument','$ntelefonico','$getnicoqs','$getnico','$ocupacion','$empresa','$carrera','$codigo','$aread','$semillero','$file')";
                    $result = mysqli_query($conn, $query);
                }  
            }
            $_SESSION['usuario'] = $nombre;
            $_SESSION['ndocumento'] = $ndocument;
            header("Location: ./index.php");
        } 
?>

<?php
   include './includes/header.php';
?>
<br><br><br><br><br>
<section class="contact" id="contact">
    <div class="row">
        <?php 
                if (isset($_SESSION['usuario'])) {
                    // aqui si existe algo en la seccion entonces no tendra que hacer nuevamente el formulario
            ?>
        <form id="formulario" method="POST">
            <!--  Este div con id de sig es la firma -->
            <div class="box" style="text-align: center;">
                <h1>Porfavor realice nuevamente la firma</h1>
            </div>
            <div id="sig"></div>
            <textarea id="signature64" class="kbw-signature" name="signed" style="display: none;" required></textarea>
            <button type="button" style="color: #E74C3C" class="btn btn-danger" id="clear"><i
                    class="uil uil-trash-alt"></i>Borrar firma</button>

            <input type="submit" class="btn" name="actualizar" style="color: #58D68D" value="Enviar Formulario">
            <input type="button" class="btn" name="" style="color: #F9E79F;  width: 95%;"
                
        </form>
      
        <?php
                 }else {      
            ?>
        <form id="formulario" method="POST" width= "95%">
            <input type="text" name="nombre" placeholder="Ingrese su nombre completo" class="box" required>
            <input type="email" placeholder="Ingrese su correo" class="box" name="correo" required>
            <select class="box" name="tipodoc" required>
                <option disabled selected>Tipo de documento</option>
                <option value="TI">Tarjeta de identidad</option>
                <option value="CD">Cedula de ciudadania</option>
                <option value="CE">Cedula de extranjeria</option>
                <option value="PS">Pasaporte</option>
            </select>
            <span>Ingrese solo dígitos</span>
            <input type="number" class="box" maxlength="15"
                oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                placeholder="Numero de documento" name="ndocument" required>

            <span>Máximo 10 digitos</span>
            <input type="number" class="box" maxlength="10"
                oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                placeholder="Numero telefonico" name="ntelefonico" required>





            <select class="box" id="selector" name="getnicoqs" required onChange="muestraMas();">
                <option disabled selected>Grupo Étnico</option>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>

            <div class="oculto" id="oculto" style="display: none;">
                <input type="text" class="box" name="getnico" placeholder="¿Cuál?">
            </div>

            <select class="box" id="selector2" required onChange="muestraMas2();">
                <option disabled selected>Empresa</option>
                <option value="ufps">UFPS Norte de Santander</option>
                <option value="otro">Otro</option>
            </select>

            <div class="input-box" id="oculto12" style="display: none">
                <select class="box" id="selector3" name="ocupacion" required onChange="muestraMas3(); ">
                    <option disabled selected>Ocupación</option>
                    <option value="Estudiante">Estudiante</option>
                    <option value="Docente">Docente</option>
                </select>
            </div>
            <div class="input-box oculto" id="oculto2" style="display: none;">
                <input type="text" class="box" name="empresa" placeholder="Ingrese su ocupación (De que Universidad, Colegio o Empresa viene)">
            </div>
            <div class="oculto" id="oculto3" style="display: none;">
                <select class="box" id="selector4" name="carrera" required onChange="muestraMas4();">
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
                    <option value="LICENCIATURA EN EDUCACION INFANTIL">LICENCIATURA EN EDUCACION INFANTIL
                    </option>
                    <option value="LICENCIATURA EN MATEMATICAS">LICENCIATURA EN MATEMATICAS</option>
                    <option value="QUIMICA INDUSTRIAL">QUIMICA INDUSTRIAL</option>
                    <option value="EGURIDAD Y SALUD EN EL TRABAJO NOCTURNA">SEGURIDAD Y SALUD EN EL TRABAJO
                        NOCTURNA
                    </option>
                    <option value="TECNOLOGIA EN OBRAS CIVILES">TECNOLOGIA EN OBRAS CIVILES</option>
                    <option value="TECNOLOGIA EN PROCESOS INDUSTRIALES">TECNOLOGIA EN PROCESOS INDUSTRIALES
                    </option>
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
                <input type="text" class="box" name="codigo" placeholder="ingrese su codigo">
            </div>
            <div class="input-box oculto" id="oculto4" style="display: none;">
                <select class="box" id="selector5" name="aread" required onChange="muestraMas5();">
                    <option disabled selected>Area</option>
                    <option value="Investigador">Investigador</option>
                    <option value="Administrativo">Administrativo</option>
                </select>
            </div>
            <div class="input-box oculto" id="oculto5" style="display: none;">
                <input type="text" class="box" name="semillero" placeholder="Nombre del semillero">
            </div>

            <!--  Este div con id de sig es la firma -->
            <div id="sig"></div>
            <textarea id="signature64" name="signed" style="display: none" required></textarea>
                <br><br>
            <button type="button" style="color: #E74C3C" class="btn btn-danger" id="clear"><i
                    class="uil uil-trash-alt"></i>Borrar firma</button>



            <input type="submit" class="btn" name="dataload" style="color: #58D68D" value="Enviar Formulario">
        </form>
        <?php
                 }
                     
            ?>

    </div>

</section>
<style>
    #canvas {
    height: 280px;
    width: 96%;
}

.kbw-signature {
    border: 4px dashed gray;
    height: 200px;
    width: 96%;
}

</style>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

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
<?php
   include './includes/footer.php';
?>