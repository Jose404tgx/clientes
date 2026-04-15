<?php
require 'conexion.php';

if ($_POST) {
    $tipo = $_POST['tipo'];

    if ($tipo == "proveedor") {
        $sql = "INSERT INTO proveedor(razonsocial, direccion, telefono) 
                VALUES(:razon, :direccion, :telefono)";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([
            ':razon' => $_POST['razonsocial'],
            ':direccion' => $_POST['direccion'],
            ':telefono' => $_POST['telefono']
        ]);
    }

    echo "Registro insertado correctamente";
}
?>

<h2>Insertar</h2>

<form method="POST">
    <select name="tipo">
    <!-- Proveedor -->

    <button type="submit">Guardar</button>
</form>