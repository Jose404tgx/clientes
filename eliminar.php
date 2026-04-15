<?php
require 'conexion.php';

if ($_POST) {
    $tipo = $_POST['tipo'];
    $id = $_POST['id'];


    if ($tipo == "categoria") {
        $sql = "DELETE FROM categoria WHERE id_categoria=:id";
    }

  

    $stmt = $conexion->prepare($sql);
    $stmt->execute([':id' => $id]);

    echo "Registro eliminado";
}
?>

<h2>Eliminar</h2>

<form method="POST">
    ID: <input type="number" name="id"><br>

    <select name="tipo">
        <option value="categoria">Categoría</option>
    </select><br><br>

    <button type="submit">Eliminar</button>
</form>