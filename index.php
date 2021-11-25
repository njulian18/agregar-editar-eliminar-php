<?php
require 'php/conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
    .form-row{
        position: relative;
        padding: 15px 20px;
    }

    .form-group{
        padding: 15px 10px;
        display: block;
        margin: 0 auto;
    }

</style>
<body>
    <?php 
        require 'component/nav.php';
    ?> 

    <section>
        <div class="form-row">
            <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xl-12 bg-dark text-light">
                    <form action="php/agregar.php" method="POST" enctype="multipart/form-data">
                    

                        <div class="form-group row">
                            <label for="text" class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                            </div>                
                        </div>

                        <div class="form-group row">
                            <label for="detalle" class="col-sm-3 col-form-label">Detalle</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="detalle"  placeholder="Detalle" required>
                            </div>                
                        </div>

                        <div class="form-group row">
                            <label for="cantidad" class="col-sm-3 col-form-label">Cantidad</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="cantidad" placeholder="Cantidad" required>
                            </div>                
                        </div>

                        <div class="form-group row">
                            <label for="precio" class="col-sm-3 col-form-label">Pre/Uni</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="precio"  placeholder="Precio" required>
                            </div>                
                        </div>

                        <div class="form-group row">
                            <label for="color" class="col-sm-3 col-form-label">Color</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control"  name="color" placeholder="Color" required>
                            </div>                
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email"  placeholder="Email" required>
                            </div>                
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-block btn-danger mb-3" type="submit"> Cargar producto</button>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <button class="btn btn-block btn-danger mb-3" type="submit"> Enviar</button> -->
                    <a class="btn btn-block btn-danger" href="php/buscar.php">Stock</a>
                </div>
            </div>
        </div>
        
        
    </section>        <!-- <h1>Julian Nuñez</h1> -->

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>
</body>
</html>