<?php
require 'conexion.php';

if ($_POST) {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO clientes(nombres, apellidos, direccion, telefono) 
            VALUES(:nombres, :apellidos, :direccion, :telefono)";

    $stmt = $conexion->prepare($sql);
    $stmt->execute([
        ':nombres' => $nombres,
        ':apellidos' => $apellidos,
        ':direccion' => $direccion,
        ':telefono' => $telefono
    ]);

    echo "Cliente insertado correctamente";
}
?>

<h2>Insertar Cliente</h2>

<form method="POST">
    Nombres: <input type="text" name="nombres"><br>
    Apellidos: <input type="text" name="apellidos"><br>
    Dirección: <input type="text" name="direccion"><br>
    Teléfono: <input type="text" name="telefono"><br>
    <button type="submit">Guardar</button>
</form>