<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM productos2 WHERE id='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query)

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Aqui los archivos estan apuntando mal entonces en servidor Linux no las encuentra (la 'i' es mayuscula)-->
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
            <form action="update.php" method="POST">
            
                        <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                        
                        <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
                        <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>">
                        <input type="text" class="form-control mb-3" name="stock" placeholder="Stock" value="<?php echo $row['stock']  ?>">
                        <input type="text" class="form-control mb-3" name="descripcion" placeholder="Descripcion" value="<?php echo $row['descripcion']  ?>">
                        
                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
            </form>
            
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