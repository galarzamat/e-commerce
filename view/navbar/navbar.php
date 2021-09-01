<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Gaia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-shopping-bag"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php include('carrito.php'); ?>
        </div>
      </li>
      <?php include('user/index.php'); ?>
      <?php if(isset($_SESSION['isAdmin']) and $_SESSION['isAdmin']) include('./admin/cargar_producto.php'); ?>
    </ul>
    <?php include('busqueda.php'); ?>
  </div>
</nav>