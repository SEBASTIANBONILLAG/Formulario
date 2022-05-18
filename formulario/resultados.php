<?php
 /*$tramite = $_POST['tramite'];
 $clase = $_POST['clase'];
 $apellidopro1 = $_POST['apellido1'];
 $apellidopro2 = $_POST['apellido2'];
 $nombrepro = $_POST['nombre1'];
 $tipodocpro = $_POST['tipodoc1'];
 $documenpro = $_POST['documento1'];
 $direccionpro = $_POST['direccion1'];
 $ciudadpro = $_POST['ciudad1'];
 $numeropro = $_POST['numero1'];
 $firmapro = $_POST['firma1'];
 $apellidocom1 = $_POST['apellido3'];
 $apellidocom2 = $_POST['apellido4'];
 $nombrecom = $_POST['nombre2'];
 $tipodoccom = $_POST['tipodoc2'];
 $documencom = $_POST['documento2'];
 $direccioncom = $_POST['direccion2'];
 $ciudadcom = $_POST['ciudad2'];
 $numerocom = $_POST['numero2'];
 $firmacom = $_POST['firma2'];
*/

$errores = false;

if(empty($_POST['tramite'])){
    $error = true;
}


if(empty($_POST['clase'])){
    $error = true;
}


if(empty($_POST['apellido1'])){
    $error = true;
}


if(empty($_POST['apellido2'])){
    $error = true;
}


if(empty($_POST['nombre1'])){
    $error = true;
}


if(empty($_POST['tipodoc1'])){
    $error = true;
}



if(empty($_POST['documento1'])){
    $error = true;
}



if(empty($_POST['direccion1'])){
    $error = true;
}



if(empty($_POST['ciudad1'])){
    $error = true;
}



if(empty($_POST['telefono1'])){
    $error = true;
}



if(empty($_POST['firma1'])){
    $error = true;
}



if(empty($_POST['apellido3'])){
    $error = true;
}



if(empty($_POST['apellido4'])){
    $error = true;
}



if(empty($_POST['nombre2'])){
    $error = true;
}



if(empty($_POST['tipodoc2'])){
    $error = true;
}



if(empty($_POST['documento2'])){
    $error = true;
}



if(empty($_POST['direccion2'])){
    $error = true;
}



if(empty($_POST['ciudad2'])){
    $error = true;
}



if(empty($_POST['telefono2'])){
    $error = true;
}



if(empty($_POST['firma2'])){
    $error = true;
}
if($errores){
    header("Location:index.php");
}
?>


<DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Datos Enviados</title>
        <link rel="stylesheet" href="resultados.css" />
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">
    </head>
    <body>
        
        <h2>LOS DATOS QUE INGRESASTE SON</h2>
        <br>


        <h3>Tipo de Tramite y Vehiculo</h3>
        <br>
        <div class="div1">
            <div class="divs1">
                <p class="p1">
                    Tramite Solicitado: <?php echo $_POST['tramite'];?> <br>
                    Clase de Vehiculo: <?php echo $_POST['clase'];?>
                </p>
            </div>
        </div>


        <br>
        <h3>Datos del Propietario</h3>
        <br>

        <div class="div2">
            <div class="divs2">
                <p class="p2">Primer Apellido del Propietario es: <?php echo $_POST['apellido1']?><br>
                    Segundo Apellido del Propietario es: <?php echo $_POST['apellido2']?><br>
                    Nombre(s) del Propietario es: <?php echo $_POST['nombre1']?><br>
                    Tipo de Documento del Propietario es: <?php echo $_POST['tipodoc1']?><br>
                    Numero de Documento del Propietario es: <?php echo $_POST['documento1']?><br>
                    Direccion del Propietario es: <?php echo $_POST['direccion1']?><br>
                    Ciudad de Residencia del Propietario es: <?php echo $_POST['ciudad1']?><br>
                    Número de Telefono del Propietario es: <?php echo $_POST['numero1']?><br>
                    Firma del Propietario: <?php echo $_POST['firma1']?>
                </p>
            </div>
        </div>

        <br>
        <h3>Datos del Comprador</h3>
        <br>

        <div class="div3">
            <div class="divs3">
                <p class="p3">Primer Apellido del Comprador es: <?php echo $_POST['apellido3']?><br>
                    Segundo Apellido del Comprador es: <?php echo $_POST['apellido4']?><br>
                    Nombre(s) del Comprador es: <?php echo $_POST['nombre2']?><br>
                    Tipo de Documento del Comprador es: <?php echo $_POST['tipodoc2']?><br>
                    Numero de Documento del Comprador es: <?php echo $_POST['documento2']?><br>
                    Direccion del Comprador es: <?php echo $_POST['direccion2']?><br>
                    Ciudad de Residencia del Comprador es: <?php echo $_POST['ciudad2']?><br>
                    Número de Telefono del Comprador es: <?php echo $_POST['numero2']?><br>
                    Firma del Comprador: <?php echo $_POST['firma2']?>
                </p>
            </div>
        </div>


    </body>
</html>
