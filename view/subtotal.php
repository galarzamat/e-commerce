<?php
    if(isset($_GET['comp'])){
        comprar();
    }
?>
<h5>&nbsp&nbspCarrito</h5>
<?php 
    if(isset($_GET['prod'])){
        al_carrito($_GET['prod'],$_GET['nom'],$_GET['cos']);
    }
    if(isset($_GET['limp'])) limpiar_carrito();
    $carritoValido = listar_carrito();
    if($carritoValido) echo '<a class="btn btn-danger mr-2" href="./?limp=1">Limpiar Carrito</a>'; 
?>
<a class="btn btn-success <?=(isset($_SESSION['user']) and $carritoValido)?'':'disabled'?>" href="./?comp=1&sub=1" >Comprar</a>