<?php
include('conexion.php');
$con = connection();

$cod_producto = $_GET['cod_producto'];

$sql = "DELETE from productos where cod_producto='$cod_producto'";

$query = mysqli_query($con, $sql);

if($query){
    Header("Location: productos.php");
};
?>