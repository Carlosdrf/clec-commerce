<?php include_once "encabezado.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductosEnCarrito();
if (count($productos) <= 0) {
?>
    <section class="hero is-info rounded shadow">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Aún no hay productos en tu carrito
                </h1>
                <h2 class="subtitle">
                    Visita la tienda para encontrar lo que buscas
                </h2>
                <a href="tienda.php" class="btn btn-info">Ver tienda</a>
            </div>
        </div>
    </section>
<?php } else { ?>
    <div class="columns">
        <div class="column">
            <h2 class="is-size-2">Mi carrito de compras</h2>
            <table class="table">
                <thead>
                    <tr>
                        <td>Imagen</td>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Quitar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($productos as $producto) {
                        $total += $producto->precio;
                    ?>
                        <tr>
                            <?php if($producto->imagen):?>
                                <td><img style="height:200px" src="<?php echo $producto->imagen?>" alt="<?php echo $producto->imagen?>"></td>
                            <?php else: ?>
                                <td>No posee imagen</td>
                            <?php endif ?>
                            <td><?php echo $producto->nombre ?></td>
                            <td><?php echo $producto->descripcion ?></td>
                            <td>$<?php echo number_format($producto->precio, 2) ?></td>
                            <td>
                                <form action="eliminar_del_carrito.php" method="post">
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                    <input type="hidden" name="redireccionar_carrito">
                                    <button class="button is-danger">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </form>
                            </td>
                        <?php } ?>
                        </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2" class="is-size-4 has-text-right"><strong>Total</strong></td>
                        <td colspan="2" class="is-size-4">
                            $<?php echo number_format($total, 2) ?>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <a href="generarpdf.php" class="button is-success is-large"><i class="fa fa-check"></i>&nbsp;Terminar compra</a>
        </div>
    </div>
<?php } ?>
<?php include_once "pie.php" ?>