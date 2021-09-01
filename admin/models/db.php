<div class="row">
    
    <?php
            $busq = (isset($_POST['s'])?$_POST['s']:"");
            $db = new mysqli('localhost','root','usbw','compras');
            $categoria = "";
            if(isset($_POST['ct']))
                if($_POST['ct']!=0) $categoria = "AND categoria=".$_POST['ct'];
            $sql = "SELECT * FROM productos WHERE nombre LIKE '%$busq%' ".$categoria;
            $registros = $db->query($sql);
            foreach($registros as $productos):?>

            <div class="col-4 mb-3">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                        <img src="fotos/<?=$productos['foto']?>" width="250" height="250" class="card-img-top">
                        <h5 class="card-title"><?=$productos['nombre']?></h5>
                        <p class="card-text">$<?= $productos['precio'] ?></p>
                        <a href="./?det=1&nom=<?=$productos['nombre']?>&cos=<?=$productos['precio']?>&cuo=<?=$productos['cuotas']?>&img=<?=$productos['foto']?>&id=<?=$productos['id_producto']?>" class="btn btn-secondary mb-1">Ver Detalles</a>
                        <a href="./?prod=<?=$productos['id_producto']?>&nom=<?=$productos['nombre']?>&cos=<?=$productos['precio']?>&car=1" 
                        class="btn btn-primary">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            
            <?php endforeach;?>
        
</div>
        

