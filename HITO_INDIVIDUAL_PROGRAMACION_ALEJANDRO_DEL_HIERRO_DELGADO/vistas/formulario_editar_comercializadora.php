<?php 

$formulario = '

<div class="container">
    <form action="../modelo/actualizar_comercializadora.php" method="POST">
    <input type="hidden" name = "idusuario" id = "idusuario" value="'.$usuario['idusuario'].'">
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="usuario_help" placeholder="Nombre" value = "'.$usuario['nombre'].'">
        <small id="cliente_help" class="form-text text-muted">Nombre del cliente.</small>
    </div>
    <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" value = "'.$usuario['apellidos'].'">
    </div>
    <div class="form-group">
        <label for="contraseña">contraseña</label>
        <input type="text" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña" value = "'.$usuario['contraseña'].'">
    </div>
    <button type="submit" class="btn btn-primary">Actualizar Datos</button>
    </form>
</div>';

echo $formulario;

?>