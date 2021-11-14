<script src="../../assets/js/admin_type_brand_add_update.js"></script>

<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Thêm mới</h4>
    </div>
    <form action="?addTB" class="form_add" method="post">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" placeholder="Auto number" disabled />
        </div>
        
        <div class="form-group">
            <label for="id_type">Chọn kiểu:</label>
            <?php $listType = type_selectall(); ?>
            <select name="id_type" id="id_type" onchange="my_fun(this.value);">
                <option value="0">Chọn kiểu</option>
                <?php foreach ($listType as $item) { ?>
                <option value="<?= $item['id_type'] ?>" ><?= $item['name_type'] ?></option>
                <?php } ?>
            </select>
        </div>
        
        <div class="form-group">
            <label for="id_brand">Chọn thương hiệu:</label>
            <select name="id_brand" id="id_brand" disabled="true">
                <option value="0">Chọn thương hiệu</option>
            </select>
        </div>
        
        <div class="check-box">
            <label for="">Trạng thái:</label>
            <div class="check">
                <input type="radio" name="hide" value="0" />
                <span>Ẩn</span>
            </div>
            <div class="check">
                <input type="radio" name="hide" value="1" checked />
                <span>Hiện</span>
            </div>
        </div>
        <div class="button-submit">
            <input type="submit" name="addTB" value="Thêm mới"></input>
            <input type="reset" value="Nhập lại">
        </div>
    </form>
    
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
    
</div>