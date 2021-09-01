<?php
    if(isset($_GET['log'])){
        register($_GET['us'],$_GET['pass'],$_GET['nom'],$_GET['ape'],$_GET['tel'],$_GET['dir'],$_GET['cp']);
        header("location: ./?log=1&us=".$_GET['us'].'&pass='.$_GET['pass']);
    }
?>
<form action="" method="get">
    <input class="form-control mb-2" type="text" placeholder="dni" name="us">
    <input class="form-control mb-2" type="password" placeholder="contraseña" name="pass">
    <input class="form-control mb-2" type="text" placeholder="nombre" name="nom">
    <input class="form-control mb-2" type="text" placeholder="apellido" name="ape">
    <input class="form-control mb-2" type="text" placeholder="telefono" name="tel">
    <input class="form-control mb-2" type="text" placeholder="direccion" name="dir">
    <input class="form-control mb-2" type="text" placeholder="codigo postal" name="cp">
    <input type="hidden" name="reg" value=1>
    <input type="hidden" name="log" value=1>
    <div class="dropdown-divider"></div>
    <input type="submit" class="form-control mb-2" value="Registrarse">
    <a class="form-control mb-2" href="./?u=1" style="text-align:center">Iniciar Sesion</a>
</form>