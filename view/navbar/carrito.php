<h5>&nbsp&nbspCarrito</h5>
<?php 
    if(isset($_GET['prod'])){
        al_carrito($_GET['prod'],$_GET['nom'],$_GET['cos']);
    }
    if(isset($_GET['limp'])) limpiar_carrito();
    if(listar_carrito()) echo '<a class="btn btn-danger ml-2" href="./?limp=1">Limpiar Carrito</a>'; 
?>
<div class="dropdown-divider"></div>
<a class="btn btn-sucess" href="./?sub=1">Ver Subtotal</a>