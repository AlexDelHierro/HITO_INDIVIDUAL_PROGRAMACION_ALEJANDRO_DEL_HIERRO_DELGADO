<div class="container">
    <form action="../modelo/crear_cliente.php" method="POST">
    <div class="form-group">
    <div class="form-group">
        <label for="usuario">Usuario</label>
        <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="cliente_help" placeholder="Nombre" >
        <small id="usuario_help" class="form-text text-muted">Nombre del usuario</small>
    </div>
    <div class="form-group">
        <label for="apellidos">apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" >
    </div>
    <div class="form-group">
        <label for="contraseña">contraseña</label>
        <input type="text" class="form-control" id="contraseña" name="contraseña" placeholder="contraseña" >
    </div>
    <button type="submit" class="btn btn-primary">Crear Uasuario</button>
    </form>
</div>
