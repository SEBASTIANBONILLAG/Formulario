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
            <form name="formulario" method="post" action="resultados.php" enctype="multipart/form-data">
                <tr>
                    <td class="td2" colspan="9">
                        <h3>Tramite Solicitado</h3>
                    </td>
                </tr>
                
                <tr>
                    <td><input type="radio" name="tramite" value="Registro Matricula">Registro Matricula</td>
                    <td><input type="radio" name="tramite" value="Traspaso">Traspaso</td>
                    <td><input type="radio" name="tramite" value="Traslado Matricula">Traslado Matricula</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Radicado Matricula">Radicado Matricula</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Cambio Color">Cambio Color</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Cambio Servicio">Cambio Servicio</td>
                </tr>
                
                <tr>
                    <td><input type="radio" name="tramite" value="Regrabar Motor">Regrabar Motor</td>
                    <td><input type="radio" name="tramite" value="Regrabar Chasis">Regrabar Chasis</td>
                    <td><input type="radio" name="tramite" value="Transformacion">Transformacion</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Duplicado Licencia Transito">Duplicado Licencia Transito</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Inscripcion Prenda">Inscripcion Prenda</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Levantar Prenda">Levantar Prenda</td>
                </tr>
                <tr>
                    <td><input type="radio" name="tramite" value="Cancelacion Matricula">Cancelacion Matricula</td>
                    <td><input type="radio" name="tramite" value="Cambio Placas">Cambio Placas</td>
                    <td><input type="radio" name="tramite" value="Duplicado Placas">Duplicado Placas</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Rematricula">Rematricula</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Cambio Carroceria">Cambio Carroceria</td>
                    <td colspan="2"><input type="radio" name="tramite" value="Otros">Otros</td>
                </tr>
                <tr>
                    <td class="td2" colspan="9">
                        <h3>Clase de Vehiculo</h3>
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="clase" value="Automovil">Automovil</td>
                    <td><input type="radio" name="clase" value="Bus">Bus</td>
                    <td><input type="radio" name="clase" value="Buseta">Buseta</td>
                    <td colspan="2"><input type="radio" name="clase" value="Camion">Camion</td>
                    <td colspan="2"><input type="radio" name="clase" value="Camioneta">Camioneta</td>
                    <td><input type="radio" name="clase" value="Campero">Campero</td>
                    <td><input type="radio" name="clase" value="Microbus">Microbus</td>
                </tr>
                <tr>
                    <td><input type="radio" name="clase" value="Tractocamion">Tractocamion</td>
                    <td><input type="radio" name="clase" value="Motocicleta">Motocicleta</td>
                    <td><input type="radio" name="clase" value="Motocarro">Motocarro</td>
                    <td colspan="2"><input type="radio" name="clase" value="Mototriciclo">Mototriciclo</td>
                    <td colspan="2"><input type="radio" name="clase" value="Cuatrimoto">Cuatrimoto</td>
                    <td><input type="radio" name="clase" value="Volqueta">Volqueta</td>
                    <td><input type="radio" name="clase" value="Otros">Otros</td>
                </tr>
                <tr>
                    <td class="td2" colspan="9">
                        <h3>Datos del Propietario</h3>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <label for="apellido1">Primer Apellido</label>
                        <input type="text" name="apellido1" placeholder="Primer Apellido" value = "<?php if(!empty($_POST['apellido1'])) ? print $_POST['apellido1'] : ' '; ?>"
                    </td>
                    <td colspan="3">
                        <label for="apellido2">Segundo Apellido</label>
                        <input type="text" name="apellido2" placeholder="Segundo Apellido"/>
                    </td>
                    <td colspan="4">
                        <label for="nombre1">Nombres</label>
                        <input type="text" name="nombre1" placeholder="Nombres"/>
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="tipodoc1" value="cedula">C.C</td>
                    <td><input type="radio" name="tipodoc1" value="nit">NIT</td>
                    <td><input type="radio" name="tipodoc1" value="nn">N.N</td>
                    <td><input type="radio" name="tipodoc1" value="pasaporte">Pasaporte</td>
                    <td><input type="radio" name="tipodoc1" value="extranjera">C.Extranjera</td>
                    <td><input type="radio" name="tipodoc1" value="targeta">Targeta Identidad</td>
                    <td><input type="radio" name="tipodoc1" value="nuip">NUIP</td>                        
                    <td><input type="radio" name="tipodoc1" value="diplomatico">C.Diplomatica</td>
                    <td>
                        <label for="documento1">Número Documento</label>
                        <input type="number" name="documento1" placeholder="Numero">
                    </td> 
                </tr>
                <tr>
                    <td colspan="3">
                        <label for="direcion1">Direccion</label>
                        <input type="text" name="direccion1" placeholder="Direccion"/>
                    </td>
                    <td colspan="4">
                        <label for="ciudad1">Ciudad</label>
                        <input type="text" name="ciudad1" placeholder="Ciudad"/>
                    </td>
                    <td colspan="2">
                        <label for="telefono1">Telefono</label>
                        <input type="number" name="telefono1" placeholder="Telefono"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="9">
                        <label for="firma1">Firma</label>
                        <textarea name="firma1" placeholder="Firma del Propietario"></textarea>
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
                        <input type="text" name="apellido3" placeholder="Primer Apellido"/>
                    </td>
                    <td colspan="3">
                        <label for="apellido4">Segundo Apellido</label>
                        <input type="text" name="apellido4" placeholder="Segundo Apellido"/>
                    </td>
                    <td colspan="4">
                        <label for="nombre2">Nombres</label>
                        <input type="text" name="nombre2" placeholder="Nombres"/>
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="tipodoc2" value="cedula">C.C</td>
                    <td><input type="radio" name="tipodoc2" value="nit">NIT</td>
                    <td><input type="radio" name="tipodoc2" value="nn">N.N</td>
                    <td><input type="radio" name="tipodoc2" value="pasaporte">Pasaporte</td>
                    <td><input type="radio" name="tipodoc2" value="extranjera">C.Extranjera</td>
                    <td><input type="radio" name="tipodoc2" value="targeta">Targeta Identidad</td>
                    <td><input type="radio" name="tipodoc2" value="nuip">NUIP</td>                        
                    <td><input type="radio" name="tipodoc2" value="diplomatico">C.Diplomatica</td>
                    <td>
                        <label for="documento2">Número Documento</label>
                        <input type="number" name="documento2" placeholder="Numero">
                    </td> 
                </tr>
                <tr>
                    <td colspan="3">
                        <label for="direcion2">Direccion</label>
                        <input type="text" name="direccion2" placeholder="Direccion"/>
                    </td>
                    <td colspan="4">
                        <label for="ciudad2">Ciudad</label>
                        <input type="text" name="ciudad2" placeholder="Ciudad"/>
                    </td>
                    <td colspan="2">
                        <label for="telefono2">Telefono</label>
                        <input type="number" name="telefono2" placeholder="Telefono"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="9">
                        <label for="firma2">Firma</label>
                        <textarea name="firma2" placeholder="Firma del Propietario"></textarea>
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