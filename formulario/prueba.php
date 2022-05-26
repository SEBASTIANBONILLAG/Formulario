<?php 



$servidor = "db";
$nombreUsuario = "db";
$password = "db";
$db = "db";


$conexion = mysqli_connect($servidor, $nombreUsuario, $password, $db );


?>

<DOCTYPE HTML>
<html lang="es">
    <head>
        <title>prueba</title>
        <link rel="stylesheet" href="style.css" />
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,500&display=swap" rel="stylesheet">
    </head>
    <body>

        <?php
        $sql = "SELECT * FROM dep";
        $resultado = $conexion->query($sql);
        ?>

        <form name="departamento" method="post">


            <select onchange='this.form.submit()'  name="departamento">
                <option value=""  > seleccione un Departamento</option>
                <?php if($resultado->num_rows >0){ 
                      while($row = $resultado->fetch_assoc()){ 
                ?>
                   <option value='<?php echo $row['id_departamento'];?>' 
                   <?php if($_POST['departamento'] == $row['id_departamento']) echo "selected"?> > <?php echo $row['departamentos']; 
                    }
                }
                
                ?>
                </option>
            </select>
        <?php echo $_POST['departamento']; ?>
        <br>
        <br>
        
        <?php if(!empty($_POST['departamento'])){
            
            $sql = "SELECT * FROM mun";
            $resultado = $conexion->query($sql);
            
        ?>
            <select name="municipio">
                <option value="">seleccione su ciudad</option>
                <?php if($resultado->num_rows >0){
                    while($row = $resultado->fetch_assoc()){
                ?>
                <option value='<?php echo $row['municipios']; ?>' <?php if($_POST['municipio'] == $row['municipios']) echo "selected"?> 
                > <?php echo $row['municipios'];
                
                    }
                }
                ?> </option>
            </select>
            <?php echo $_POST['municipio']; ?>
            <br>
            <input type="submit" value="Enviar">
        </form>
        <?php    
        }
        else{
            echo 'todo esta MAL!!';
        } 
        ?>

    </body>
</html>