<?php
include('conexion.php');
$con = connection();

$cod_producto = $_POST['cod_producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

$sql = "UPDATE productos set cod_producto='$cod_producto', descripcion='$descripcion', precio='$precio', cantidad='$cantidad' where cod_producto='$cod_producto'";
$query=mysqli_query($con, $sql);

if ($query){
    Header("Location: productos.php");
}

?>