<?php 
$servidor = "db";
$nombreUsuario = "db";
$password = "db";
$db = "db";


$conexion = mysqli_connect($servidor, $nombreUsuario, $password, $db );

$municipios = $_POST['municipio'];
    $sql = "SELECT municipios,
            id_municipio,
            id_departamento
            from mun
            where id_departamento = '$departamentos'";

    $result = mysqli_query($conexion,$sql);
    $cadena = "<label> SELECT 2(municipios)</label>
                <select id='municipio' name='municipio'";
    while($ver = mysqli_fetch_row($result)){
        $cadena = $cadena.'<obtion value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
    }

    echo $cadena."</select>";
	

?>