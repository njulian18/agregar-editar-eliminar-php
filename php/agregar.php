<?php
include 'conexion.php';
include '../component/nav.php';


    $produc = $_POST['nombre'];
    $deta = $_POST['detalle'];
    $canti = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $color = $_POST['color'];
    $email = $_POST['email'];



    $query = "INSERT INTO `super` (`id`, `nombre`, `detalle`, `cantidad`, `precio`, `color`, `email`) 
    VALUES (NULL, '$produc', '$deta', '$canti', '$precio', '$color', '$email')"; 
    mysqli_query($conexion,$query); 

    if ($query == '200') {
        header('Location: '.'buscar.php');
    }

    
    // $query = "INSERT INTO `Basar` (`id`, `nombre`, `detalle`, `cantidad`) 
    // VALUES (NULL, '$produc', '$deta', '$canti')";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>

    body{
    box-sizing: border-box;
    margin:0;
    padding: 0;
    }
    section{
        background-image: linear-gradient(180deg, #b2eaff 0, #5389f2 50%, #003265 100%);
        background-repeat: no-repeat;
        width: 100%;
        height: 100vh;
    }
    h2{
        text-shadow: 2px 1px #000000;
    }

</style>
<body>
    <section>
        <div class="container">
                <h2 class="text-center pt-5 pb-5">Se cargo el producto correctamente</h2>
                <div class="row">
                    <div class="col-md-12">
                        <!-- <button class="btn btn-block btn-danger mb-3" type="submit"> Enviar</button> -->
                        <a class="btn btn-block btn-danger" href="../index.php">Cargar más</a>
                        <a class="btn btn-block btn-danger" href="buscar.php">Stock</a>

                    </div>
                </div>
        </div>
    
    </section>

</body>
</html>