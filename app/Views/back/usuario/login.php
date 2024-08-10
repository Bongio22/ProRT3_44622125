<!-- back/usuario/login.php -->
<div class="login">
    <!-- Mensaje de error -->
    <?php if(session()->getFlashdata('msg')): ?>
        <div class="alert alert-warning">
            <?= session()->getFlashdata('msg') ?>
        </div>
    <?php endif; ?>

    <!-- Inicio del formulario -->
    <form method="post" action="<?= base_url('/enviarlogin') ?>">
        <!-- Email -->
        <div class="mb-3 w-75 mx-auto">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <!-- Contraseña -->
        <div class="mb-3 w-75 mx-auto">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input name="pass" type="password" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Iniciar sesión</button>
        </div>
    </form>
    <!-- Fin de formulario -->

    <hr>
    <div class="registro-container">
        <h4 class="titulo">¿No tienes una cuenta?</h4>
        <div class="botonRegis">
            <a href="<?= base_url('registro') ?>" class="btn btn-light">Registrarse</a>
        </div>
    </div>
</div>

