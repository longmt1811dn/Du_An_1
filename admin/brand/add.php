<div class="admin-main_page">
  <div class="page-title_box">
    <h4 class="page-title">Thêm mới</h4>
  </div>
  <form action="" class="form_add" method="post">
    <div class="form-group">
      <label for="">ID</label>
      <input type="text" placeholder="Auto number" disabled />
    </div>
    <div class="form-group">
      <label for="">Tên thương hiệu</label>
      <input type="text" name="name_brand" placeholder="Tên thương hiệu" />
    </div>
    <div class="form-group">
      <label for="">Thứ tự</label>
      <input type="text" name="location" placeholder="Thứ tự" />
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
      <input type="submit" name="addBrand" value="Thêm mới"></input>
      <input type="reset" value="Nhập lại">
    </div>
  </form>
  <?php
  if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
  ?>
</div>