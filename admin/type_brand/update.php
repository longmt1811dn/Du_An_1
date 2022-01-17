<?php
extract($edit);
?>

<script src="../../assets/js/admin_type_brand_add_update.js"></script>

<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Cập nhật</h4>
    </div>
    <form action="index.php?updateTB" class="form_add" method="post">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" value="<?= $id_type_brand ?>" disabled />
        </div>
        
        <div class="form-group">
            <label for="id_type">Chọn kiểu:</label>
            <?php $listType = type_selectall(); ?>
            <select name="id_type" id="id_type" onchange="my_fun(this.value);">
                <option value disabled selected >Chọn kiểu</option>
                <?php foreach ($listType as $item) { ?>
                <?php if($id_type == $item['id_type']) { ?>
                <option value="<?= $item['id_type'] ?>" selected><?= $item['name_type'] ?></option>
                <?php } else { ?>
                <option value="<?= $item['id_type'] ?>" ><?= $item['name_type'] ?></option>
                <?php } ?>
                <?php } ?>
            </select>
        </div>
        
        <div class="form-group">
            <label for="id_brand">Chọn thương hiệu:</label>
            <?php $listBrand = brand_selectall(); ?>
            <select name="id_brand" id="id_brand">
                <option value disabled selected >Chọn thương hiệu</option>
                <?php foreach ($listBrand as $item) { ?>

                <?php if($id_brand == $item['id_brand']) { ?>
                    <option value="<?= $item['id_brand'] ?>" selected><?= $item['name_brand'] ?></option>
                <?php } else {
                    $sql = "SELECT * FROM type_brand WHERE id_type = '{$id_type}' AND id_brand = '{$item['id_brand']}'";
                    $kq = $conn->query($sql);
                    
                    if ($kq->rowCount() == 0) { ?>
                    <option value="<?= $item['id_brand'] ?>"><?= $item['name_brand'] ?></option>
                <?php }} ?>
                <?php } ?>
            </select>
        </div>
        
        <div class="check-box">
            <label for="">Trạng thái:</label>
            <div class="check">
                <input type="radio" name="hide" value="0" <?php if ($hide == 0) echo "checked" ?>/>
                <span>Ẩn</span>
            </div>
            <div class="check">
                <input type="radio" name="hide" value="1" <?php if ($hide == 1) echo "checked" ?> />
                <span>Hiện</span>
            </div>
        </div>
        <div class="button-submit">
            <input type="hidden" name="id_type_brand" value="<?= $id_type_brand ?>">
            <input type="submit" name="updateTB" value="Cập nhật"></input>
            <input type="reset" value="Nhập lại">
        </div>
    </form>
    
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
    
</div>

