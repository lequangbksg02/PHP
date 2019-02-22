<h2>Cập nhật thông tin thịt mới</h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $order->id; ?>"/>
    <div class="form-group">
        <label>Thitbachi</label>
        <input type="text" name="thitbachi" value="<?php echo $order->thitbachi; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Thitsuon</label>
        <textarea name="thitsuon" class="form-control"><?php echo $order->thitsuon; ?></textarea>
    </div>
    <div class="form-group">
        <label>Thitcay</label>
        <textarea name="thitcay" class="form-control"><?php echo $order->thitcay; ?></textarea>
    </div>
    <div class="form-group">
        <label>Thitmeo</label>
        <textarea name="thitmeo" class="form-control"><?php echo $order->thitmeo; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>