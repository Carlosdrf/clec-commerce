<?php include_once "encabezado.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductos();
?>
<div class="columns">
    <div class="column">
        <h2 class="is-size-2">Productos existentes</h2>
        <a class="btn btn-primary" href="agregar_producto.php">Nuevo&nbsp;<i class="fa fa-plus"></i></a>
        <table class="table">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto) { ?>
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
                            <form action="eliminar_producto.php" method="post">
                                <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </form>
                        </td>
                    <?php } ?>
                    </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include_once "pie.php" ?>