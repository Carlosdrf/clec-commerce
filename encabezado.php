<?php
    include_once('funciones.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLEC COMMERCE</title>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">

    <link rel="icon" href="img/logo_icon.ico">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>

<body>
    <!-- navbar -->
    <div class="d-flex justify-content-end align-items-center align-self-center">
        <nav class="navbar navbar-expand-sm navbar-light bg-light align-items-center align-self-center p-3">
            <a href="index.php">
                <img src="img/logo.png" alt="logo" style="height:45px;">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tienda.php">Tienda</a>
                    </li>
                    <li>
                        <form class="d-flex" action="busqueda.php" method="post">
                            <input class="form-control" type="text" name="busqueda" id="busqueda" placeholder="Search">
                            <a class="btn btn-outline-primasry" type="submit">Search</a>
                        </form>
                    </li>
                    <li>
                        <a href="ver_carrito.php" class="btn btn-primary">
                            <strong>Ver carrito <?php
                            include_once "funciones.php";
                            $conteo = count(obtenerIdsDeProductosEnCarrito());
                            if ($conteo > 0) {
                                printf("(%d)", $conteo);
                            }
                            ?>&nbsp;<i class="fa fa-shopping-cart"></i></strong>
                        </a>
                    </li>
                </ul>
                
            </div>
        </nav>
    </div>

    <section class="section">