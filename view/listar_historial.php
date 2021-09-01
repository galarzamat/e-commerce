<table>
    <caption>ID COMPRA : <?=$compra['id_compra']?></caption>
    <th>PRODUCTO</th>
    <th>CANTIDAD</th>
    <th>PRECIO</th>
    <th>TOTAL</th>
    <?php
        $total = listar_detalle($compra['id_compra']);
        $compra = $compras->fetch_array(MYSQL_ASSOC);
    ?>
    <tfoot>
        <tr>
            <th>FINAL:</th>
            <th>$<?=$total?></th>
        </tr>
    </tfoot>
</table>