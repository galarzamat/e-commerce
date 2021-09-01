<center>
    <table>
        <th>nombre</th>
        <th>costo</th>
        <th>cantidad</th>
        <th>total</th>
        <?php foreach($_SESSION['carrito'] as $id): ?>
            <tr>
                <td><?=$id['nombre']?></td>
                <td>$<?=$id['costo']?></td>
                <td><?=$id['cantidad']?></td>
                <td>$<?=$id['total']?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</center>