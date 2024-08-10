<?php $validation = \Config\Services::validation(); ?>

<div class="registro">
    <form action="<?php echo base_url('/enviar-form') ?>" method="post">
        <?= csrf_field(); ?>

        <?php if (!empty(session()->getFlashdata('fail'))): ?>
            <div class="alert alert-danger w-75 mx-auto"><?= session()->getFlashdata('fail'); ?></div>
        <?php endif ?>

        <?php if (!empty(session()->getFlashdata('success'))): ?>
            <div class="alert alert-success w-75 mx-auto"><?= session()->getFlashdata('success'); ?></div>
        <?php endif ?>

        <!-- Nombre -->
        <div class="mb-3 w-75 mx-auto">
            <label for="nombre" class="form-label">Nombre</label>
            <input name="nombre" type="text" class="form-control" placeholder="Ej: María" required>
            <?php if ($validation->getError('nombre')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('nombre'); ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Apellido -->
        <div class="mb-3 w-75 mx-auto">
            <label for="apellido" class="form-label">Apellido</label>
            <input name="apellido" type="text" class="form-control" placeholder="Ej: Romero" required>
            <?php if ($validation->getError('apellido')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('apellido'); ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Email -->
        <div class="mb-3 w-75 mx-auto">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="mariaRomero@gmail.com" required>
            <?php if ($validation->getError('email')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('email'); ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Nombre de usuario -->
        <div class="mb-3 w-75 mx-auto">
            <label for="usuario" class="form-label">Nombre de usuario</label>
            <input name="usuario" type="text" class="form-control" placeholder="Maria209" required>
            <?php if ($validation->getError('usuario')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('usuario'); ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Contraseña -->
        <div class="mb-3 w-75 mx-auto">
            <label for="pass" class="form-label">Contraseña</label>
            <input name="pass" type="password" class="form-control" id="exampleInputPassword1" required>
            <?php if ($validation->getError('pass')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('pass'); ?>
                </div>
            <?php endif; ?>
        </div>
        
        <!-- Repetir contraseña -->
        <div class="mb-3 w-75 mx-auto">
            <label for="repass" class="form-label">Repetir contraseña</label>
            <input name="repass" type="password" class="form-control" id="exampleInputPassword1" required>
            <?php if ($validation->getError('repass')): ?>
                <div class='alert alert-danger mt-2'>
                    <?= $validation->getError('repass'); ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success">Registrarse</button>
        </div>
    </form>
</div>
