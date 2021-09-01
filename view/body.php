<div class="container">
    <div class="row">
        <div class="col-2">
            <?php 
                if(isset($_GET['sub'])): 
                    if(isset($_SESSION['user'])):
                        echo '<br><br><br><br><br><a class="his" href="./?his=1&sub=1">Historial de Compras</a>';
                    endif;
                else:
                     include('view/categorias.html');
                endif;
            ?>
        </div>
        <div class="col-10">
            <br><br><br><br>
            <?php if(isset($_GET['det'])):
                include('view/detalle.php'); 
             elseif(isset($_GET['sub'])):
                if(isset($_GET['his'])):
                    include('view/historial.php');
                else:
                    include('view/subtotal.php');
                endif;
             else: ?>
                <div id="list" class="m-6 p-3">
                    <?php include('models/db.php'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
    