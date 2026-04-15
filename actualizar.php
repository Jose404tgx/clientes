<?php
require 'conexion.php';

if ($_POST) {
    $tipo = $_POST['tipo'];


    if ($tipo == "proveedor") {
        $sql = "UPDATE proveedor 
                SET razonsocial=:razon, direccion=:direccion, telefono=:telefono 
                WHERE id_proveedor=:id";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([
            ':id' => $_POST['id'],
            ':razon' => $_POST['razonsocial'],
            ':direccion' => $_POST['direccion'],
            ':telefono' => $_POST['telefono']
        ]);
    }

    echo "Registro actualizado";
}
?>

<h2>Actualizar</h2>

<form method="POST">
    ID: <input type="number" name="id"><br>

    Descripción: <input type="text" name="descripcion"><br>
    Razón Social: <input type="text" name="razonsocial"><br>

    <button type="submit">Actualizar</button>
</form>