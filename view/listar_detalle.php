<!--$det_com tiene id_compra, id_producto, cant, precio-->
<tr>
    <td><?=buscarProd($det_com['id_producto'])?></td>
    <td><?=$det_com['cant']?></td>
    <td><?=$det_com['precio']?></td>
    <td>$<?=$tot_act?></td>
</tr>