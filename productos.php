<?php 
    // include("conexion.php");
    include("insertar.php");
    $con=conectar();

    $sql="SELECT * FROM productos2";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Super Market</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="interfasCliente/css/normalize.css">
        <link rel="stylesheet" href="interfasCliente/css/custom.css">
    </head>
    <body>
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="four columns logoF">
                        <img src="interfasCliente/img/logoSM4.png" id="logo">
                        <p class="titulo2">administrador supermarket</p>
                    </div>
                    <div class="two columns u-pull-right">
                        <p></p>
                    </div>
                </div> 
            </div>
        </header>
        
        <div class="container mt-5">
                <div class="row"> 
                    
                    <div class="col-md-3">
                        <h1>Ingrese Producto</h1>
                            <form action="insertar.php" method="POST" >

                                <input type="text" class="form-control mb-3" name="id" placeholder="ID">
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                <input type="numbre" class="form-control mb-3" name="precio" placeholder="Precio">
                                <input type="text" class="form-control mb-3" name="stock" placeholder="Stock">
                                <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion">
                                
                                <label for="imagen" >Imagen</label>
                                <input type="file" id="imagen" class="mb-3" name="imagen" accept="image/jpeg, image/png">

                                <input type="submit" class="btn btn-primary">

                            </form>
                            
                    </div>

                    <div class="col-md-8">
                        <table class="table table2" >
                            <thead class="table-success table-striped" >
                                <tr >
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th>Descripcion</th>
                                    <th>Imagen</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                    <?php
                                        while($row=mysqli_fetch_array($query)){
                                    ?>
                                        <tr>
                                            <th><?php  echo $row['id']?></th>
                                            <th><?php  echo $row['nombre']?></th>
                                            <th><?php  echo $row['precio']?></th>
                                            <th><?php  echo $row['stock']?></th>
                                            <th><?php  echo $row['descripcion']?></th>    
                                            <th><?php  echo $row['imagen']?></th>    
                                            <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                            <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                        </tr>
                                    <?php 
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>  
        </div>

        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="four columns">
                            <nav id="principal" class="menu">
                                <a class="enlace" href="#">Sobre Nosotros</a>
                                <a class="enlace" href="#">contacto</a>
                                <a class="enlace" href="#">Ubicacion</a>
                                <a class="enlace" href="#"></a>
                                <a class="enlace" href="#"></a>
                            </nav>
                    </div>
                        
                </div>
            </div>
        </footer>

        <script src="interfasCliente/js/app.js"></script>
    </body>
</html>