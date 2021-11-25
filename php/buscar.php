<?php
    include 'conexion.php';

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../dataTable/DataTables-1.10.23/css/dataTables.bootstrap4.min.css">
</head>
<style>
    body{
        box-sizing: border-box;
        margin:0;
        padding: 0;
        background-image: linear-gradient(180deg, #b2eaff 0, #5389f2 50%, #003265 100%);
        background-repeat: no-repeat;
    }
    
    .row{
        margin-right: 0;
        margin-left: 0;
    }
    .table-responsive{
        background-color: #ffffff;
    }
    section{
        width: 100%;
        height: 100vh;
    }

    .page-item.active .page-link{
        background-color: #DC3545;
    }
</style>

<body>
    <?php
        if (isset($_POST['buscar'])) {
            $buscador= $_POST['buscar'];
            $query = "SELECT * FROM `super` WHERE no LIKE '%$buscado%' ";
        }else{
            $query= "SELECT * FROM `super`  ";    
        }
    
    ?>

    <section class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-12" >
                <div class="table-responsive">                
                    <table id="ejemplo" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Detalle</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Color</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                                $consulta = mysqli_query($conexion, $query) or die($conexion);
                                while($resultado = mysqli_fetch_array($consulta)){
                                    ?>
                            <tr>
                                <td><?php echo $resultado['nombre']?></td>
                                <td><?php echo $resultado['detalle']?></td>
                                <td><?php echo $resultado['cantidad']?></td>
                                <td><?php echo $resultado['precio']?></td>
                                <td><?php echo $resultado['color']?></td>
                                <td><?php echo $resultado['email']?></td>
                            </tr>
                            <?php }?>

                        </tfoot>
                    </table>      
                </div>
            </div>
        </div>
    </div>

    <div class="container">
                <div class="row">
                    <div class="col-md-12">
                      
                        <a class=" btn btn-block btn-danger mt-4" href="../index.php">Volver a cargar</a>
                        <!-- <a class="btn btn-block btn-danger" href="buscar.php">Stock</a> -->

                    </div>
                </div>
    </div>
    
    </section>
    


    <!-- <a class="btn btn-secondary" href="../index.php">Inicio</a> -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.js"></script>
    <script src="../dataTable/datatables.min.js"></script>
    <script>
       $(document).ready(function() {
            $('#ejemplo').DataTable();
        } );
    </script>
</body>
</html>