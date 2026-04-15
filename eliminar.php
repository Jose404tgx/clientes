<?php
require 'conexion.php';

if ($_POST) {
    $id = $_POST['id'];

    $sql = "DELETE FROM clientes WHERE id=:id";
    $stmt = $conexion->prepare($sql);
    $stmt->execute([':id' => $id]);

    echo "Cliente eliminado correctamente";
}
?>

<h2>Eliminar Cliente</h2>

<form method="POST">
    ID: <input type="number" name="id"><br>
    <button type="submit">Eliminar</button>
</form>