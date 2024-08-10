<div class="login">
    <form>
        <div class="mb-3 w-75 mx-auto">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 w-75 mx-auto">
            <label for="Contraseña" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Iniciar sesión</button>
        </div>
    </form>
    <hr>
    <div class="registro-container">
        <h4 class="titulo">¿No tienes una cuenta?</h4>
        <div class="botonRegis">
            <a href="<?php echo base_url('registro') ?>" class="btn btn-light">Registrarse</a>
        </div>
    </div>
</div>