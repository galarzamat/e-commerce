<?php
    function listar_carrito(){
        if($_SESSION['carrito']==array()){
            echo '<h6 style="color:orange;text-align:center">carrito vacio</h6>';
            return false;
        }else{
            include('./view/tabla_carrito.php');
            return true;
        }
    }
    function al_carrito($id,$nom,$cos){
        if(isset($_SESSION['carrito'][$id])){
            $_SESSION['carrito'][$id]['cantidad']++;
            $_SESSION['carrito'][$id]['total']+=$_SESSION['carrito'][$id]['costo'];
        }else{
            $_SESSION['carrito'][$id]=array(
                "nombre"=>$nom,
                "costo"=>$cos,
                "cantidad"=>1,
                "total"=>$cos
            );
        }
    }
    function limpiar_carrito(){
        $_SESSION['carrito'] = array();
    }
    function comprar(){
        global $db;
        $sql = 'INSERT INTO compras(dni) VALUES('.$_SESSION['user'].')';
        $db->query($sql);
        $comp = $db->insert_id;
        foreach($_SESSION['carrito'] as $id_prod => $prod){
            $sql = "INSERT INTO detalle_compra(id_compra,id_producto,cant,precio) 
                    VALUES($comp,".$id_prod.",".$prod['cantidad'].",".$prod['costo'].")";
            $db->query($sql);
        }
        limpiar_carrito();
        echo '<script>comprar();</script>';
    }
    function buscarProd($id){
        global $db;
        $sql = "SELECT nombre FROM productos WHERE id_producto=$id";
        return $db->query($sql)->fetch_array(MYSQL_ASSOC)['nombre'];
    }
    function listar_detalle($idcom){
        global $db;
        $sql = "SELECT * FROM detalle_compra WHERE id_compra=$idcom";
        $det_com_full = $db->query($sql);
        $det_com = $det_com_full->fetch_array(MYSQL_ASSOC);
        $total = 0;
        while($det_com!=NULL){
            $tot_act = $det_com['cant']*$det_com['precio'];
            include('./view/listar_detalle.php');
            $det_com = $det_com_full->fetch_array(MYSQL_ASSOC);
            $total+=$tot_act;
        }
        return $total;
    }
    function listar_historial(){
        global $db;
        $sql = "SELECT * FROM compras WHERE dni=".$_SESSION['user']." ORDER BY id_compra DESC";
        $compras = $db->query($sql);
        $compra = $compras->fetch_array(MYSQL_ASSOC);
        while($compra!=NULL):
            include('./view/listar_historial.php');
        endwhile;
    }
    if(!isset($_SESSION['carrito'])) $_SESSION['carrito'] = array();
?>