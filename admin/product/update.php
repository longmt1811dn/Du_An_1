<?php
extract($edit);
?>
<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Cập nhật sản phẩm</h4>
    </div>
    <form action="index.php?updateOb" class="form_add_product" method="post" enctype="multipart/form-data">
        <div class="form-group-product">
            <label for="">ID</label>
            <input type="text" value="<?= $id_product ?>" disabled />
        </div>
        <div class="form-group-product">
            <label for="">Tên sản phẩm  <span>*</span></label>
            <input type="text" name="name_product" placeholder="Tên sản phẩm" value="<?= $name_product ?>" />
        </div>
        <div class="form-group-product">
            <label for="">Hình ảnh  <span>*</span></label>
            <input type="file" name="url_product">
        </div>
        <div class="form-group-product">
            <label for="">Giá sản phẩm  <span>*</span></label>
            <input type="text" name="price" placeholder="Giá sản phẩm" value="<?= $price ?>" />
        </div>
        <div class="form-group-product">
            <label for="">Mô tả tóm tắt  <span>*</span></label>
            <input type="text" name="describe" placeholder="Mô tả tóm tắt" value="<?= $describe ?>" />
        </div>
        <div class="form-group-product">
            <label for="">Kích thước sản phẩm  <span>*</span></label>
            <input type="text" name="size" placeholder="Kích thước sản phẩm" value="<?= $size ?>" />
        </div>
        <div class="form-group-product">
            <label for="">Chất liệu sản phẩm  <span>*</span></label>
            <input type="text" name="material" placeholder="Chất liệu sản phẩm" value="<?= $material ?>" />
        </div>

        <div class="form-group-product">
            <label for="">Giảm giá  <span>*</span></label>
            <input type="text" name="promotion" placeholder="Giảm giá sản phẩm" value="<?= $promotion ?>" />
        </div>
        <div class="form-group-product">
            <label for="">Loại - Thương hiệu  <span>*</span></label>
            <select name="id_type-brand" class="form-group__select">
                <option value="0">Chọn Loại - Thương Hiệu</option>
                <?php $getAll = product_getAllTypeBrand(); ?>
                <?php foreach ($getAll as $getTB) {
                    if ($id_type_brand == $getTB['id_type_brand']) { ?>
                        <option value="<?= $getTB['id_type_brand'] ?>" selected><?= product_getNameType($getTB['id_type']) . ' - ' . product_getNameBrand($getTB['id_brand']) ?></option>
                    <?php } else { ?>
                        <option value="<?= $getTB['id_type_brand'] ?>"><?= product_getNameType($getTB['id_type']) . ' - ' . product_getNameBrand($getTB['id_brand']) ?></option>
                <?php }
                } ?>
            </select>
        </div>
        <div class="check-box">
            <label for="">Nổi bật:</label>
            <div class="check">
                <input type="radio" name="highlights" value="0" <?php if ($highlights == 0) echo "checked" ?> />
                <span>Không nổi bật</span>
            </div>
            <div class="check">
                <input type="radio" name="highlights" value="1" <?php if ($highlights == 1) echo "checked" ?> />
                <span>Nổi bật</span>
            </div>
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
        <div class="form-group-product">
            <label for="">Mô tả chi tiết</label>
            <textarea class="form-group__textarea" name="content" id="content" cols="1" rows="10" placeholder="Mô tả chi tiết sản phẩm"><?= $content ?></textarea>
        </div>
        <div class="button-submit">
            <input type="hidden" name="id_product" value="<?= $id_product ?>">
            <input type="submit" name="updateOb" value="Cập nhật"></input>
            <input type="reset" value="Nhập lại">
        </div>
    </form>

</div>
<script src="../../ckeditor5/ckeditor5-build-classic/ckeditor.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/translations/vi.js"> </script>
<script src="../../ckfinder_php_3.5.2/ckfinder/ckfinder.js"></script>
<script>
    function openPopup(idobj) {
        CKFinder.popup({
            chooseFiles: true,
            onInit: function(finder) {
                finder.on('files:choose', function(evt) {
                    var file = evt.data.files.first();
                    document.getElementById(idobj).value = file.getUrl();
                });
                finder.on('file:choose:resizedImage', function(evt) {
                    document.getElementById(idobj).value = evt.data.resizedUrl;
                });
            }
        });
    }
</script>
<script>
    ClassicEditor.create(document.querySelector('#content'), {
            language: 'vi',
            ckfinder: {
                uploadUrl: '../../ckfinder_php_3.5.2/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
            },
            toolbar: ['ckfinder', 'imageUpload', '|', 'heading', '|', 'bold', 'italic', '|', 'undo', 'redo']
        })
        .then(editor => {})
        .catch(function(error) {
            console.error(error);
        });
</script>