<?php extract($edit); ?>
<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Thêm mới bài viết</h4>
    </div>
    <form action="index.php?update" class="form_add_news" method="post" enctype="multipart/form-data">
        <div class="form-group-new">
            <label for="">ID</label>
            <input type="text" value="<?= $id_news ?>" disabled />
        </div>
        <div class="form-group-new">
            <label for="">Tiêu đề <span>*</span></label>
            <input type="text" name="title" value="<?= $title ?>" placeholder="Tiêu đề" />
        </div>
        <div class="form-group-new">
            <label for="">Hình ảnh <span>*</span></label>
            <input type="file" name="image_new">
        </div>
        <div class="form-group-new">
            <label for="">Mô tả <span>*</span></label>
            <input type="text" name="describe" value="<?= $summary ?>" placeholder="Mô tả" />
        </div>
        <div class="form-group-check">
            <label for="">Nổi bật: <span>*</span></label>
            <div class="form-checkbox">
                <label for="check1" data-off-label="Off">Nổi bật</label>
                <input value="1" type="radio" id="check1" name="highlights" data-on-label="On" <?php if ($highlights == 1) echo "checked" ?>>

            </div>
            <div class="form-checkbox">
                <label for="check2" data-off-label="Off">Không nổi bật</label>
                <input value="0" type="radio" id="check2" name="highlights" data-on-label="On" <?php if ($highlights == 0) echo "checked" ?>>

            </div>
        </div>
        <div class="form-group-check">
            <label for="">Trạng thái: <span>*</span></label>
            <div class="form-checkbox">
                <label for="check1" data-off-label="Off">Hiện</label>
                <input value="1" type="radio" id="check1" name="hide" data-on-label="On" <?php if ($hide == 1) echo "checked" ?>>

            </div>
            <div class="form-checkbox">
                <label for="check2" data-off-label="Off">Ẩn</label>
                <input value="0" type="radio" id="check2" name="hide" data-on-label="On" <?php if ($hide == 0) echo "checked" ?>>

            </div>
        </div>
        <div class="form-group-new-content">
            <label for="">Mô tả chi tiết </label>
            <textarea class="form-group__textarea" name="content" id="content" cols="1" rows="10" placeholder="Nội dung bài viết"><?= $content ?></textarea>
        </div>
        <div style="width: 100%;" class="button-submit">
            <input type="hidden" name="id_news" value="<?= $id_news ?>">
            <input type="hidden" name="id_user" value="<?= $_SESSION['login_id_admin'] ?>">
            <input type="submit" name="update" value="Cập nhật"></input>
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