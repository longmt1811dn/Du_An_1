<?php
extract($edit);
?>
<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Cập nhật</h4>
    </div>
    <form action="index.php?updateOb" class="form_add" method="POST">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" value="<?= $id_bill ?>" disabled />
        </div>
        <div class="form-group">
            <label for="">Họ</label>
            <input type="text" name="first_name" disabled value="<?= $first_name ?>" />
        </div>
        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" name="last_name" disabled value="<?= $last_name ?>" />
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" disabled value="<?= $email ?>" />
        </div>
        <div class="form-group">
            <label for="">Địa chỉ</label>
            <input type="text" name="address" disabled value="<?= $address ?>" />
        </div>
        <div style="width:92%" class="form-group-check">
            <label for="check1">Tình trạng đơn: <span>*</span></label>
            <div class="form-checkbox">
                <label for="check1" data-off-label="Off">Đã duyệt</label>
                <input value="1" type="radio" id="check1" name="status" data-on-label="On" <?php if ($status == 1) echo "checked" ?>>

            </div>
            <div class="form-checkbox">
                <label for="check2" data-off-label="Off">Chưa duyệt</label>
                <input value="0" type="radio" id="check2" name="status" data-on-label="On" <?php if ($status == 0) echo "checked" ?>>

            </div>
        </div>
        <div class="form-group">
            <label for="">Ghi chú khách hàng:</label>
            <input type="text" name="note" disabled value="<?= $note ?>" />
        </div>
        <div class="form-group">
            <label for="">Ghi chú Admin:</label>
            <input type="text" name="note_admin" value="<?= $note_admin ?>" />
        </div>
        <div class="check-box">
            <label for="">Trạng thái:</label>
            <div class="check">
                <input type="radio" name="hide" value="0" <?php if ($hide == 0) echo "checked" ?> />
                <span>Ẩn</span>
            </div>
            <div class="check">
                <input type="radio" name="hide" value="1" <?php if ($hide == 1) echo "checked" ?> />
                <span>Hiện</span>
            </div>
        </div>
        <div class="button-submit">
            <input type="hidden" name="id_bill" value="<?= $id_bill ?>">
            <input type="submit" name="updateOb" value="Cập nhật"></input>
            <input type="reset" value="Nhập lại">
        </div>
    </form>

</div>