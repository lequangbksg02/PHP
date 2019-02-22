<?php
if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới loại thịt</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên loại thịt</label>
                    <input type="text" class="form-control" name="name"  placeholder="Nhập tên" required>
                </div>
                <div class="form-group">
                    <label>Mathit</label>
                    <input type="email" class="form-control" name="email" placeholder="Nhập mail" required>
                </div>
                <div class="form-group">
                    <label>Ma thit</label>
                    <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>