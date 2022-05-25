<?php 

$servidor = "db";
$nombreUsuario = "db";
$password = "db";
$db = "db";


$conexion = mysqli_connect($servidor, $nombreUsuario, $password, $db );

$sql = "SELECT * FROM mun";
$resultado = $conexion->query($sql);

/*if($resultado->num_rows >0){
    while($row = $resultado->fetch_assoc()){
        echo '<pre>';
        print_r;
        echo '</pre>';
    }
}
*/
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
        <form name="prueba" method="post">
            <select name="prueba">
                <option value="">IRA</option>
                <option value="">GULA</option>
                <option value="">PEREZA</option>
                <option value="">AVARICIA</option>
                <option value="">ORGULLO</option>
                <option value="">ENVIDIA</option>
                <option value="">LUJURIA</option>
            </select>

            <select name="departamento1">
                <option value=""> seleccione una Ciudad</option>
                <?php if($resultado->num_rows >0){ ?>
                <?php while($row = $resultado->fetch_assoc()){ ?>
                   <option value=''> <?php echo $row['Municipio']; 
                    }
                }
                ?> </option>
            </select>

        </form>
    </body>
</html>