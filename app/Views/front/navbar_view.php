<!-- inicio barra de navegacion -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark py-2 py-lg-0">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('principal')?>">
    <img src="assets/img/Logotipo/logo1.png" alt="" width="77" height="77" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <!-- llamo a supertitulo para la fuente-->
          <a class="nav-link supertitulo" aria-current="page" href="<?php echo base_url('principal')?>">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link supertitulo" href="<?php echo base_url('quienes_somos')?>">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link supertitulo" href="<?php echo base_url('acerca_de')?>">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link supertitulo" href="<?php echo base_url('registro')?>">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link supertitulo" href="<?php echo base_url('login')?>">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link supertitulo" href="<?php echo base_url('catalogo')?>">Catálogo</a>
        </li>
        <li class="nav-item dropdown supertitulo">
          <a class="nav-link dropdown-toggle supertitulo" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item mintitulo" href="#">Plantas</a></li>
            <li><a class="dropdown-item mintitulo" href="#">Masetas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item mintitulo" href="#">Ayuda</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Deshabilitado</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
<!-- fin barra de navegacion -->
</header>
<!-- fin encabezado -->

<body>
    <!-- inicio de cuerpo-->