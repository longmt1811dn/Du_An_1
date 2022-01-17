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
            <input type="text" value="<?= $id_user ?>" disabled />
        </div>
        <div class="form-group">
            <label for="">Account</label>
            <input type="text" name="account" placeholder="Account" value="<?= $account ?>" />
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password" placeholder="Password" value="<?= $pass ?>" />
        </div>
        <div class="form-group">
            <label for="">First name</label>
            <input type="text" name="first_name" placeholder="First name" value="<?= $first_name ?>" />
        </div>
        <div class="form-group">
            <label for="">Last name</label>
            <input type="text" name="last_name" placeholder="Last name" value="<?= $last_name ?>" />
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" placeholder="Email" value="<?= $email ?>" />
        </div>
        <div class="form-group-check">
            <label for="">Kích hoạt:</label>
            <div class="form-checkbox">
                <label for="check1" data-off-label="Off">Active</label>
                <input value="1" type="radio" id="check1" name="activated" data-on-label="On" <?php if($activated['activated']==1) echo "checked" ?>>

            </div>
            <div class="form-checkbox">
                <label for="check2" data-off-label="Off">Spam</label>
                <input value="0" type="radio" id="check2" name="activated" data-on-label="On" <?php if($activated['activated']==0) echo "checked" ?>>

            </div>
        </div>
        <div class="form-group-check">
            <label for="">Quyền quản trị:</label>
            <div class="form-checkbox">
                <label for="check1" data-off-label="Off">Administrator</label>
                <input value="1" type="radio" id="check1" name="role" data-on-label="On" <?php if($role['role']==1) echo "checked" ?>>

            </div>
            <div class="form-checkbox">
                <label for="check2" data-off-label="Off">Guest</label>
                <input value="0" type="radio" id="check2" name="role" data-on-label="On" <?php if($role['role']==0) echo "checked" ?>>

            </div>
        </div>
</div>

<div class="button-submit">
    <input type="hidden" name="id_user" value="<?= $id_user ?>">
    <input type="submit" name="update" value="Cập nhật"></input>
    <input type="reset" value="Nhập lại">
</div>
</form>

</div>