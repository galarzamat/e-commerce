<?php
    if(isset($_GET['log'])){
        $cuenta = verify($_GET['us'],$_GET['pass']);
        if($cuenta==NULL){
            echo "usuario o contraseña invalido";
        }else{
            $_SESSION['user'] = $_GET['us'];
            if($cuenta==1) $_SESSION['isAdmin'] = true;
            header("location: index.php?u=1");
        }
    }
?>
<form action="" method="get">
    <input class="form-control mb-2" type="text" placeholder="Dni" name="us">
    <input class="form-control " type="password" placeholder="contraseña" name="pass">
    <input type="hidden" name="log" value=1>
    <input type="hidden" name="u" value=1>
    <div class="dropdown-divider"></div>
    <input type="submit" class="form-control mb-2" value="Iniciar Sesión">
</form>
<button class="form-control" onclick="window.location.href='./?reg=1&u=1'">Registrarse</button>