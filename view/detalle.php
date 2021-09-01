<div class="container">
    <div class="row">

        <div class="col-6">
            <img src="fotos/<?=$_GET['img']?>" height="400" width="400">
        </div>
        <div class="col-6">
            <h2><?=$_GET['nom']?></h2>
            <h3>$<?=$_GET['cos']?></h3>
            <h4>Este producto <?php if($_GET['cuo']>0)echo 'se puede comprar en hasta '.$_GET['cuo'].' cuotas';else echo 'no se puede comprar en cuotas'; ?></h4>
            <a href="./?prod=<?=$_GET['id']?>&nom=<?=$_GET['nom']?>&cos=<?=$_GET['cos']?>" 
            class="btn btn-primary">Agregar al carrito</a>
        </div>
    </div>
</div>