<?php
session_start();
include 'conexion.php';

$id = $_REQUEST['id'];

$queryBorrar="DELETE FROM productos WHERE id_producto = '$id'";
mysqli_query($conexion, $queryBorrar) or die("Problemas en delete".mysqli_error($conexion));
//echo "Producto borrado correctamente";
$_SESSION['mensaje'] = "borrado_ok";
header('Location: listado.php');

?>