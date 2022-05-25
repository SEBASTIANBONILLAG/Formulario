<?php
$tramite = "";
$clase = "";
$tipodoc1 = "";
$tipodoc2 = "";


$ciudad1 = "";

$ciudades =[
    ["Ibague" , "Bogota" , "Armenia" , "Cali" , "Cartagena"],
];
echo "<pre>";
print_r ($ciudades);
echo "</pre>";

echo "<pre>";
print_r ($_POST['ciudad1']);
echo "</pre>";

echo "<pre>";
print_r ($_POST);
echo "</pre>";


$errores = false;

if(!empty($_POST['tramite'])){
    $tramite = $_POST['tramite'];
    $errores = false;
}
else{
    $tramite = "";
    $errores = true;

}


if(!empty($_POST['clase'])){
    $clase = $_POST['clase'];
    $errores = false;
}
else{
    $clase = "";
    $errores = true;

}


if(empty($_POST['apellido1'])){
    $errores = true;
}


if(empty($_POST['apellido2'])){
    $errores = true;
}


if(empty($_POST['nombre1'])){
    $errores = true;
}

if(!empty($_POST['tipodoc1'])){
    $tipodoc1 = $_POST['tipodoc1'];
    $errores = false;
}
else{
    $tipodoc1 = "";
    $errores = true;

}

if(empty($_POST['documento1'])){
    $errores = true;
}



if(empty($_POST['direccion1'])){
    $errores = true;
}



if(empty($_POST['ciudad1'])){
    $errores = true;
}



if(empty($_POST['telefono1'])){
    $error = true;
}



if(empty($_POST['firma1'])){
    $errores = true;
}



if(empty($_POST['apellido3'])){
    $errores = true;
}



if(empty($_POST['apellido4'])){
    $errores = true;
}



if(empty($_POST['nombre2'])){
    $errores = true;
}



if(!empty($_POST['tipodoc2'])){
    $tipodoc2 = $_POST['tipodoc2'];
    $errores = false;
}
else{
    $tipodoc2 = "";
    $errores = true;

}


if(empty($_POST['documento2'])){
    $errores = true;
}



if(empty($_POST['direccion2'])){
    $errores = true;
}



if(empty($_POST['ciudad2'])){
    $errores = true;
}



if(empty($_POST['telefono2'])){
    $errores = true;
}



if(empty($_POST['firma2'])){
    $errores = true;
}

?>

<DOCTYPE HTML>
<html lang="es">
    <head>
        <title>Transito</title>
        <link rel="stylesheet" href="style.css" />
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,500&display=swap" rel="stylesheet">
    </head>
    <body>

        <table border="2">
            <tr>
                <td class="td1" colspan="9">
                    <h2>Ministerio de Transporte</h2>
                    <img class="im1" src= "./transito.jpg">
                    <img class="im2" src= "./escudo.jpg">
                    <img class="im3" src= "./runt.jpg">
                </td>
            </tr>
            <form name="formulario" method="post" action="index.php" enctype="multipart/form-data">
                <tr>
                    <td class="td2" colspan="9">
                        <h3>Tramite Solicitado</h3>
                    </td>
                </tr>
                
                <tr>
                    <td><input type="radio" name="tramite" value="Registro Matricula" <?php if($tramite == "Registro Matricula" ) echo "checked"; ?> >Registro Matricula</td>
                    <td><input type="radio" name="tramite" value="Traspaso" <?php if($tramite == "Traspaso" ) echo "checked"; ?> >Traspaso</td>
                    <td><input type="radio" name="tramite" value="Traslado Matricula" <?php if($tramite == "Traslado Matricula" ) echo "checked"; ?> >Traslado Matricula</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Radicado Matricula" <?php if($tramite == "Radicado Matricula" ) echo "checked"; ?> >Radicado Matricula</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Cambio Color" <?php if($tramite == "Cambio Color" ) echo "checked"; ?> >Cambio Color</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Cambio Servicio" <?php if($tramite == "Cambio Servicio" ) echo "checked"; ?> >Cambio Servicio</td>
                </tr>
                
                <tr>
                    <td><input type="radio" name="tramite" value="Regrabar Motor" <?php if($tramite == "Regrabar Motor" ) echo "checked"; ?> >Regrabar Motor</td>
                    <td><input type="radio" name="tramite" value="Regrabar Chasis" <?php if($tramite == "Regrabar Chasis" ) echo "checked"; ?> >Regrabar Chasis</td>
                    <td><input type="radio" name="tramite" value="Transformacion" <?php if($tramite == "Transformacion" ) echo "checked"; ?> >Transformacion</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Duplicado Licencia Transito" <?php if($tramite == "Duplicado Licencia Transito" ) echo "checked"; ?> >Duplicado Licencia Transito</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Inscripcion Prenda" <?php if($tramite == "Inscripcion Prenda" ) echo "checked"; ?> >Inscripcion Prenda</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Levantar Prenda" <?php if($tramite == "Levantar Prenda" ) echo "checked"; ?> >Levantar Prenda</td>
                </tr>
                <tr>
                    <td><input type="radio" name="tramite" value="Cancelacion Matricula" <?php if($tramite == "Cancelacion Matricula" ) echo "checked"; ?> >Cancelacion Matricula</td>
                    <td><input type="radio" name="tramite" value="Cambio Placas" <?php if($tramite == "Cambio Placas" ) echo "checked"; ?> >Cambio Placas</td>
                    <td><input type="radio" name="tramite" value="Duplicado Placas" <?php if($tramite == "Duplicado Placas" ) echo "checked"; ?> >Duplicado Placas</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Rematricula" <?php if($tramite == "Rematricula" ) echo "checked"; ?> >Rematricula</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Cambio Carroceria" <?php if($tramite == "Cambio Carroceria" ) echo "checked"; ?> >Cambio Carroceria</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Otros" <?php if($tramite == "Otros" ) echo "checked"; ?> >Otros</td>
                </tr>
                <tr>
                    <td class="td2" colspan="9">
                        <h3>Clase de Vehiculo</h3>
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="clase" value="Automovil" <?php if($clase == "Automovil" ) echo "checked"; ?> >Automovil</td>
                    <td><input type="radio" name="clase" value="Bus" <?php if($clase == "Bus" ) echo "checked"; ?> >Bus</td>
                    <td><input type="radio" name="clase" value="Buseta" <?php if($clase == "Buseta" ) echo "checked"; ?> >Buseta</td>
                    <td colspan="2"><input type="radio" name="clase" value="Camion" <?php if($clase == "Camion" ) echo "checked"; ?> >Camion</td>
                    <td colspan="2"><input type="radio" name="clase" value="Camioneta" <?php if($clase == "Camioneta" ) echo "checked"; ?> >Camioneta</td>
                    <td><input type="radio" name="clase" value="Campero" <?php if($clase == "Campero" ) echo "checked"; ?> >Campero</td>
                    <td><input type="radio" name="clase" value="Microbus" <?php if($clase == "Microbus" ) echo "checked"; ?> >Microbus</td>
                </tr>
                <tr>
                    <td><input type="radio" name="clase" value="Tractocamion" <?php if($clase == "Tractocamion" ) echo "checked"; ?> >Tractocamion</td>
                    <td><input type="radio" name="clase" value="Motocicleta" <?php if($clase == "Motocicleta" ) echo "checked"; ?> >Motocicleta</td>
                    <td><input type="radio" name="clase" value="Motocarro" <?php if($clase == "Motocarro" ) echo "checked"; ?> >Motocarro</td>
                    <td colspan="2"><input type="radio" name="clase" value="Mototriciclo" <?php if($clase == "Mototriciclo" ) echo "checked"; ?> >Mototriciclo</td>
                    <td colspan="2"><input type="radio" name="clase" value="Cuatrimoto" <?php if($clase == "Cuatrimoto" ) echo "checked"; ?> >Cuatrimoto</td>
                    <td><input type="radio" name="clase" value="Volqueta" <?php if($clase == "Volqueta" ) echo "checked"; ?> >Volqueta</td>
                    <td><input type="radio" name="clase" value="Otros" <?php if($clase == "Otros" ) echo "checked"; ?> >Otros</td>
                </tr>
                <tr>
                    <td class="td2" colspan="9">
                        <h3>Datos del Propietario</h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="apellido1">Primer Apellido</label>
                        <input type="text" name="apellido1" placeholder="Primer Apellido" value = "<?php (!empty($_POST['apellido1'])) ? print $_POST['apellido1'] : ''; ?>">
                    </td>
                    <td colspan="3">
                        <label for="apellido2">Segundo Apellido</label>
                        <input type="text" name="apellido2" placeholder="Segundo Apellido" value = "<?php (!empty($_POST['apellido2'])) ? print $_POST['apellido2'] : ' '; ?>"/>
                    </td>
                    <td colspan="4">
                        <label for="nombre1">Nombres</label>
                        <input type="text" name="nombre1" placeholder="Nombres"/ value = "<?php (!empty($_POST['nombre1'])) ? print $_POST['nombre1'] : ' '; ?>">
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="tipodoc1" value="cedula" <?php if($tipodoc1 == "cedula" ) echo "checked"; ?> >C.C</td>
                    <td><input type="radio" name="tipodoc1" value="nit" <?php if($tipodoc1 == "nit" ) echo "checked"; ?> >NIT</td>
                    <td><input type="radio" name="tipodoc1" value="nn" <?php if($tipodoc1 == "nn" ) echo "checked"; ?> >N.N</td>
                    <td><input type="radio" name="tipodoc1" value="pasaporte" <?php if($tipodoc1 == "pasaporte" ) echo "checked"; ?> >Pasaporte</td>
                    <td><input type="radio" name="tipodoc1" value="extranjera" <?php if($tipodoc1 == "extranjera" ) echo "checked"; ?> >C.Extranjera</td>
                    <td><input type="radio" name="tipodoc1" value="targeta" <?php if($tipodoc1 == "targeta" ) echo "checked"; ?> >Targeta Identidad</td>
                    <td><input type="radio" name="tipodoc1" value="nuip" <?php if($tipodoc1 == "nuip" ) echo "checked"; ?> >NUIP</td>                        
                    <td><input type="radio" name="tipodoc1" value="diplomatico" <?php if($tipodoc1 == "diplomatico" ) echo "checked"; ?> >C.Diplomatica</td>
                    <td>
                        <label for="documento1">Número Documento</label>
                        <input type="number" name="documento1" placeholder="Numero" value = "<?php (!empty($_POST['documento1'])) ? print $_POST['documento1'] : ' '; ?>">
                    </td> 
                </tr>
                <tr>
                    <td colspan="3">
                        <label for="direcion1">Direccion</label>
                        <input type="text" name="direccion1" placeholder="Direccion" value = "<?php (!empty($_POST['direccion1'])) ? print $_POST['direccion1'] : ' '; ?>"/>
                    </td>

                    <td colspan="4">
                         <select name="ciudad1">
                             <option value=""> seleccione una ciudad</option>
                             <?php foreach($ciudades[0] as $ciudad){ ?>
                                <option value='<?php echo $ciudad; ?>' <?php if($_POST['ciudad1']) echo "selected"?> > <?php echo $ciudad; 
                             }?> </option>
                         </select>

                    </td>
                    <td colspan="2">
                        <label for="telefono1">Telefono</label>
                        <input type="number" name="telefono1" placeholder="Telefono" value = "<?php (!empty($_POST['telefono1'])) ? print $_POST['telefono1'] : ' '; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="9">
                        <label for="firma1">Firma</label>
                        <textarea name="firma1" placeholder="Firma del Propietario" value = "<?php (!empty($_POST['firma1'])) ? print $_POST['firma1'] : ' '; ?>"></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="td2" colspan="9">
                        <h3>Datos del Comprador (Traspaso)</h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="apellido3">Primer Apellido</label>
                        <input type="text" name="apellido3" placeholder="Primer Apellido" value = "<?php (!empty($_POST['apellido3'])) ? print $_POST['apellido3'] : ' '; ?>"/>
                    </td>
                    <td colspan="3">
                        <label for="apellido4">Segundo Apellido</label>
                        <input type="text" name="apellido4" placeholder="Segundo Apellido" value = "<?php (!empty($_POST['apellido4'])) ? print $_POST['apellido4'] : ' '; ?>"/>
                    </td>
                    <td colspan="4">
                        <label for="nombre2">Nombres</label>
                        <input type="text" name="nombre2" placeholder="Nombres" value = "<?php (!empty($_POST['nombre2'])) ? print $_POST['nombre2'] : ' '; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="tipodoc2" value="cedula" <?php if($tipodoc2 == "cedula" ) echo "checked"; ?> >C.C</td>
                    <td><input type="radio" name="tipodoc2" value="nit" <?php if($tipodoc2 == "nit" ) echo "checked"; ?> >NIT</td>
                    <td><input type="radio" name="tipodoc2" value="nn" <?php if($tipodoc2 == "nn" ) echo "checked"; ?> >N.N</td>
                    <td><input type="radio" name="tipodoc2" value="pasaporte" <?php if($tipodoc2 == "pasaporte" ) echo "checked"; ?> >Pasaporte</td>
                    <td><input type="radio" name="tipodoc2" value="extranjera" <?php if($tipodoc2 == "extranjera" ) echo "checked"; ?> >C.Extranjera</td>
                    <td><input type="radio" name="tipodoc2" value="targeta" <?php if($tipodoc2 == "targeta" ) echo "checked"; ?> >Targeta Identidad</td>
                    <td><input type="radio" name="tipodoc2" value="nuip" <?php if($tipodoc2 == "nuip" ) echo "checked"; ?> >NUIP</td>                        
                    <td><input type="radio" name="tipodoc2" value="diplomatico" <?php if($tipodoc2 == "diplomatico" ) echo "checked"; ?> >C.Diplomatica</td>
                    <td>
                        <label for="documento2">Número Documento</label>
                        <input type="number" name="documento2" placeholder="Numero" value = "<?php (!empty($_POST['documento2'])) ? print $_POST['documento2'] : ' '; ?>">
                    </td> 
                </tr>
                <tr>
                    <td colspan="3">
                        <label for="direcion2">Direccion</label>
                        <input type="text" name="direccion2" placeholder="Direccion" value = "<?php (!empty($_POST['direccion2'])) ? print $_POST['direccion2'] : ' '; ?>"/>
                    </td>
                    <td colspan="4">
                        <label for="ciudad2">Ciudad</label>
                        <input type="text" name="ciudad2" placeholder="Ciudad" value = "<?php (!empty($_POST['ciudad2'])) ? print $_POST['ciudad2'] : ' '; ?>"/>
                    </td>
                    <td colspan="2">
                        <label for="telefono2">Telefono</label>
                        <input type="number" name="telefono2" placeholder="Telefono" value = "<?php (!empty($_POST['telefono2'])) ? print $_POST['telefono2'] : ' '; ?>"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="9">
                        <label for="firma2">Firma</label>
                        <textarea name="firma2" placeholder="Firma del Propietario" value = "<?php (!empty($_POST['firma2'])) ? print $_POST['firma2'] : ' '; ?>"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="9">
                        <input type="submit" value="Enviar">
                    </td>
                </tr>
            </form>
        </table>
        
    </body>
</html>