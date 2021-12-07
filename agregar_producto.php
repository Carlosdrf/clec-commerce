<?php include_once "encabezado.php" ?>
<div class="row justify-content-md-center">
    <h2 class="is-size-2 text-center mb-3">Agregar producto</h2>
    <div class="col-5 rounded shadow p-5 hero is-info ">
        <form action="guardar_producto.php" method="post">
            <div class="field">
                <label for="imagen"> <b> Imagen </b> (opcional)</label>
                <div class="control">
                    <input required id="imagen" class="input mt-2 mb-3" type="text" placeholder="http://inserte-link.example" name="imagen">
                </div>
            </div>
            <div class="field">
                <label for="nombre"><b> Nombre </b></label>
                <div class="control">
                    <input required id="nombre" class="input mt-2 mb-3" type="text" placeholder="Nombre" name="nombre">
                </div>
            </div>
            <div class="field">
                <label for="descripcion"><b> Descripción </b></label>
                <div class="control">
                    <textarea name="descripcion" class="textarea mt-2 mb-3" id="descripcion" cols="30" rows="5" placeholder="Descripción" required></textarea>
                </div>
            </div>
            <div class="field">
                <label for="precio"><b> Precio </b></label>
                <div class="control">
                    <input required id="precio" name="precio" class="input mt-2 mb-3" type="number" placeholder="Precio">
                </div>
            </div>
            <div class="field">
                <div class="control">
                    <a href="productos.php" class="btn btn-secondary">Volver</a>
                    <button class="btn btn-success">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php" ?>