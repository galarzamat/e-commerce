<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarProductos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-target="navbarProductos">
    <i class="fa fa-plus"></i>
    </a>
    <div class="dropdown-menu px-1" aria-labelledby="navbarProductos">
        <?php
            if(isset($_GET['add'])){
                global $db;
                $sql = "INSERT INTO productos(nombre,precio,foto,cuotas,categoria) 
                        VALUES('".$_GET['nom']."','".$_GET['pre']."','".$_GET['fot']."','".$_GET['cuo']."','".$_GET['cat']."')";
                $ok = $db->query($sql);
                header("location: index.php");
            }
        ?>
        <form action="" method="get" name="prod">
            <input class="form-control mb-2" type="text" placeholder="nombre" name="nom">
            <input class="form-control mb-2" type="text" placeholder="precio" name="pre">
            <input class="form-control mb-2" type="text" placeholder="foto" name="fot">
            <input class="form-control mb-2" type="text" placeholder="cuotas" name="cuo">
            <input class="form-control mb-2" type="text" placeholder="Categoria" name="cat">
            <input type="hidden" name="add" value=1>
            <div class="dropdown-divider"></div>
            <input type="submit" class="form-control mb-2" value="Agregar Producto">
        </form>
    </div>
</li>