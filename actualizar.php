<?php
require 'conexion.php';

if ($_POST) {
    $tipo = $_POST['tipo'];

    if ($tipo == "categoria") {
        $sql = "UPDATE categoria 
                SET descripcion=:descripcion 
                WHERE id_categoria=:id";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([
            ':id' => $_POST['id'],
            ':descripcion' => $_POST['descripcion']
        ]);
    }
    echo "Registro actualizado";
}
?>

<h2>Actualizar</h2>

<form method="POST">
    ID: <input type="number" name="id"><br>

    <select name="tipo">
        <option value="cliente">Cliente</option>
        <option value="categoria">Categoría</option>
        <option value="proveedor">Proveedor</option>
    </select><br><br>
    <button type="submit">Actualizar</button>
</form>