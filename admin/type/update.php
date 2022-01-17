<?php
extract($edit);
?>
<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Cập nhật</h4>
    </div>
    <form action="index.php?update" class="form_add" method="POST">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" value="<?= $id_type ?>" disabled />
        </div>
        <div class="form-group">
            <label for="">Tên kiểu</label>
            <input type="text" name="name_type" placeholder="Tên loại" value="<?= $name_type ?>" />
        </div>
        <div class="form-group">
            <label for="">Thứ tự</label>
            <input type="text" name="location" placeholder="Thứ tự" value="<?= $location ?>" />
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
        <div class="form-group">
            <span>Chọn object:</span>
            <?php $optionOb = type_getNameObject_option(); ?>
            <select name="id_object" id="">
                <?php foreach ($optionOb as $option) {
                    if ($id_object == $option['id_object']) { ?>
                        <option value="<?= $option['id_object'] ?> " selected><?= $option['name_object'] ?></option>
                    <?php } else { ?>
                        <option value="<?= $option['id_object'] ?> "><?= $option['name_object'] ?></option>
                    <?php } ?>
                <?php } ?>
            </select>

        </div>
        <div class="button-submit">
            <input type="hidden" name="id_type" value="<?= $id_type ?>">
            <input type="submit" name="updateOb" value="Cập nhật"></input>
            <input type="reset" value="Nhập lại">
        </div>
    </form>

</div>