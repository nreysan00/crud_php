<?php
include('conexion.php');

$con = connection();

$sql = "SELECT * from productos";
$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styles.css">
    <title>PRODUCTOS</title>
</head>
<body>
<div class="users-form">
        <form action="insertarProducto.php" method="POST">
            <h1>Añadir producto</h1>
            <input type="text" name="descripcion" placeholder="Descripción">
            <input type="text" name="precio" placeholder="Precio">
            <input type="text" name="cantidad" placeholder="Cantidad">
            <input type="submit" value="Agregar producto">
        </form>
    </div>

    <div class="users-table">
        <h2>Productos registrados</h2>
        <table>
            <thead>
                <tr>
                <th>COD Producto</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th></th>
                <th></th>
                </tr>

            </thead>
            <tbody>
                <?php while($row=mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['cod_producto'] ?></th>
                        <th><?= $row['descripcion'] ?></th>
                        <th><?= $row['precio'] ?>€</th>
                        <th><?= $row['cantidad'] ?></th>

                        <th><a href="updateProducto.php?cod_producto=<?= $row['cod_producto'] ?>" class="users-table--edit">Editar</th>
                        <th><a href="deleteProducto.php?cod_producto=<?= $row['cod_producto'] ?>" class="users-table--delete">Eliminar</th>
                    </tr>
                <?php endwhile; ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>