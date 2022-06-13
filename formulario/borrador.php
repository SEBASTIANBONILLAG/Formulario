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
        <title>borrador</title>
        <link rel="stylesheet" href="style.css" />
        <meta charset="UTF-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,500&display=swap" rel="stylesheet">
        <script
            src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous">
        </script>

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
            $municipios = $_POST['municipio'];

            $sql = "SELECT * FROM mun
            where id_departamento = '$municipios'";
            $resultado = $conexion->query($sql);
            
        ?>
            <select name="municipio">
                <option value="">seleccione su ciudad</option>
                <?php if($resultado->num_rows >0){
                    while($row = $resultado->fetch_assoc()){
                ?>
                <option value='<?php echo $row['municipios']; ?>' <?php if($municipios == $row['municipios']) echo "selected"?> 
                > <?php echo $row['municipios'];
                
                    }
                }
                ?> </option>
            </select>
            <?php echo $municipios; ?>
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

