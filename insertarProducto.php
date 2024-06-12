<?php
include('conexion.php');

$con=connection();

$cod_producto=null;
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$sql = "INSERT INTO productos VALUES('$cod_producto', '$descripcion','$precio', '$cantidad')";
$query = mysqli_query($con, $sql);

if ($query){
    Header("Location: productos.php");
};
?>