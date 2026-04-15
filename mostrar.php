<?php
include("conexion.php");
$sql = "SELECT * FROM clientes";
$stmt = $conexion->query($sql);

while($row = $stmt->fetch()){
    echo $row['nombre']. "<br>";
    echo $row['apellido']. "<br>";
}
?>