<?php if (isset($_GET['q'])) cerrarSes(); ?>
<h4>Bienvenido</h4>
<h5><?= getDat('nombre') ?></h5>
<div class="dropdown-divider"></div>
<a href="./?sub=1&his=1" class="btn btn-primary his2">Historial de Compras</a>
<div class="dropdown-divider"></div>
<a class="btn btn-danger his2" href="./?q=1">Cerrar Sesión</a>