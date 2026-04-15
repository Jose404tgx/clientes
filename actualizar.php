<?php
require 'conexion.php';

if ($_POST) {
    $id = $_POST['id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    $sql = "UPDATE clientes 
            SET nombres=:nombres, apellidos=:apellidos, direccion=:direccion, telefono=:telefono 
            WHERE id=:id";

    $stmt = $conexion->prepare($sql);
    $stmt->execute([
        ':id' => $id,
        ':nombres' => $nombres,
        ':apellidos' => $apellidos,
        ':direccion' => $direccion,
        ':telefono' => $telefono
    ]);

    echo "Cliente actualizado correctamente";
}
?>

<h2>Actualizar Cliente</h2>

<form method="POST">
    ID: <input type="number" name="id"><br>
    Nombres: <input type="text" name="nombres"><br>
    Apellidos: <input type="text" name="apellidos"><br>
    Dirección: <input type="text" name="direccion"><br>
    Teléfono: <input type="text" name="telefono"><br>
    <button type="submit">Actualizar</button>
</form>