<?php 
// session_start();
include 'conexion.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        $produc = $_POST['nombre'];
        $deta = $_POST['detalle'];
        $canti = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $color = $_POST['color'];
        $email = $_POST['email'];

        // `id`, `nombre`, `detalle`, `cantidad`, `precio`, `color`, `email`

        $query="UPDATE productos SET nombre='$product',
                                     detalle='$deta',
                                     cantidad='$canti',
                                     precio='$precio',
                                     color='$color'
                                     email?='$email' 
                                WHERE id_producto = '$id' ";

        mysqli_query($conexion, $query) 
        or die("Problemas al actualizar ".mysqli_error($conexion));

        $_SESSION['mensaje'] = "modificado_ok";
        header('Location: listado.php');
    ?>
</body>
</html>