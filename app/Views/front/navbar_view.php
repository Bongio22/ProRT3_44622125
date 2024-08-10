<!-- Navegacion -->
<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('principal') ?>">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if (!$session->has('isLoggedIn') || $session->get('isLoggedIn') !== true): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('quienes_somos') ?>">Quienes Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('acerca_de') ?>">Acerca de</a>
          </li>
        <?php endif; ?>

        <?php if ($session->has('isLoggedIn') && $session->get('isLoggedIn') === true): ?>
          <?php if ($perfil == 1): // Admin ?>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('panelAdmin') ?>">Panel de Administrador</a>
            </li>
          <?php elseif ($perfil == 2): // Usuario ?>
            <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('panelUsuario') ?>">Panel de Usuario</a>
            </li>
          <?php endif; ?>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('logout') ?>">Cerrar Sesión (<?php echo $nombre; ?>)</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('login') ?>">Iniciar Sesión</a>
          </li>
        <?php endif; ?>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>