<h2>Danh sách loại thịt</h2>
<a href="./index.php?page=add">Thêm mới</a>
<!--<<a href="#">Quản lý User</a>-->
<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Thitbachi</th>
        <th>Thitsuon</th>
        <th>Thitcay</th>
        <th>Thitmeo</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($order as $key => $order): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $order->thitbachi ?></td>
        <td><?php echo $order->thitsuon ?></td>
        <td><?php echo $order->thitcay ?></td>
        <td><?php echo $order->thitmeo ?></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $order->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $order->id; ?>" class="btn btn-sm">Update</a></td>
        <?php endforeach; ?>
    </tbody>
</table>
