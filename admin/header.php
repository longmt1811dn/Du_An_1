<div class="admin-header_profile">
    <input type="checkbox" class="check-qtv" id="check-qtv" hidden />
    <label for="check-qtv" class="profile-user_avatar">
        <div class="img-user_avatar">
            <img src="../../assets/image/avt-username_admin.png" alt="" />
        </div>
    </label>
    <div class="profile-user_name">
        <h4 class="name_admin"><?= $admin['last_name'] . " " . $admin['first_name'] ?></h4>
        <p class="role_admin">Quản trị viên</p>
    </div>
    <div class="profile-info">
        <div class="profile-info_detail">
            <a href="../../index.php">Trở về trang chủ</a>
            <a href="../login/?act=logout">Thoát</a>
        </div>
    </div>
</div>
