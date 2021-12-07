<?php include_once "encabezado.php" ?>

<?php
include_once "funciones.php";
$productos = buscarProducto($_POST["busqueda"]);
?>
<div class="columns">
    <div class="column">
        <h2 class="is-size-2">Tienda</h2>
    </div>
</div>
<div class="row">
<?php foreach ($productos as $producto) { ?>
    <div class="col-3">
        <div class="card shadow p-3" style="max-height: 550px; height:550px">
            <img 
            class="card-img-top mt-3" 
            style="max-height:300px;"
            <?php if($producto->imagen):?>
            src="<?php echo $producto->imagen; ?>" 
            
            <?php else: ?>
            src="https://st3.depositphotos.com/23594922/31822/v/600/depositphotos_318221368-stock-illustration-missing-picture-page-for-website.jpg"
            <?php endif ?>
            title="<?php echo $producto->nombre ?>" 
            alt="<?php echo $producto->nombre ?>"
            data-bs-container="body" 
            data-bs-toggle="popover" 
            data-bs-placement="right" 
            data-bs-content="<?php echo $producto->descripcion ?>"
            data-bs-trigger="hover focus"
            >
            <div class="card-content">
                <p class="card-header-title is-size-4">
                    <?php echo $producto->nombre ?>
                </p>
                <h1 class="is-size-3">$<?php echo number_format($producto->precio, 2) ?></h1>
                <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                    <form action="eliminar_del_carrito.php" style="display: flex;" method="post">
                        <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                        <span class="button is-success">
                            <i class="fa fa-check"></i>&nbsp;En el carrito
                        </span>
                        <button class="button is-danger">
                            <i class="fa fa-trash-o"></i>&nbsp;Quitar
                        </button>
                    </form>
                <?php } else { ?>
                    <form action="agregar_al_carrito.php" method="post">
                        <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                        <button class="btn btn-primary">
                            <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                        </button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>
    <script>
     var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
<?php } ?>
</div>
<?php include_once "pie.php" ?>