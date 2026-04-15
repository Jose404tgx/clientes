<?php
require 'conexion.php';

if ($_POST) {
    $tipo = $_POST['tipo'];

    if ($tipo == "categoria") {
        $sql = "INSERT INTO categoria(descripcion) VALUES(:descripcion)";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([
            ':descripcion' => $_POST['descripcion']
        ]);
    }
}
?>

<h2>Insertar</h2>

<form method="POST">
    <select name="tipo">
        <option value="categoria">Categoría</option>
    </select><br><br>

    <!-- Categoria -->
    Descripción: <input type="text" name="descripcion"><br>
    <button type="submit">Guardar</button>
</form>