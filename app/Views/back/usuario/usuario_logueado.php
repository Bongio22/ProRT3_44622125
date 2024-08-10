
<!-- Vista para el usuario logueado -->
<?php if (session()->get('perfil_id') == 1): ?>
    <!-- Contenido específico para el administrador -->
    <div class="card mb-3">
        <img class="img-fluid" src="<?php echo base_url('assets/img/Bienvenido.png') ?>" class="card-img-top" alt="Bienvenido">
        <div class="card-body">
            <h5 class="card-title">Queremos brindarte lo mejor!</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
    </div>
<?php elseif (session()->get('perfil_id') == 2): ?>
    <!-- Contenido específico para el usuario -->
    <div class="card mb-3">
        <img class="img-fluid" src="<?php echo base_url('assets/img/bienvenidousuario.png') ?>" class="card-img-top" alt="Bienvenido">
        <div class="card-body">
            <h5 class="card-title">Queremos brindarte lo mejor!</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
    </div>
<?php endif; ?>
