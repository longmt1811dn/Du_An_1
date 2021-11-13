<?php require_once "../../dao/admin_users.php"; ?>
<div class="admin-main_page">
    <div class="page-title_box">
        <h4 class="page-title">Danh sách người dùng</h4>
    </div>
    <div class="page-top_product">
        <div class="table-top-user">
            <div class="user-top-title">
                <div class="id-title"><span>#</span></div>
                <div class="account-title"><span>account</span></div>
                <div class="pass-title"><span>password</span></div>
                <div class="first-title"><span>first name</span></div>
                <div class="last-title"><span>last name</span></div>
                <div class="email-title"><span>email</span></div>
                <div class="role-title"><span>role</span></div>
                <div class="activated-title"><span>activated</span></div>
                <div class="action-title"><span>Action</span></div>
            </div>




            <?php $listusers = users_listall();
            foreach ($listusers as $list) { ?>
                <div class="user-item-title">
                    <div class="id-item">
                        <?= $list['id_user'] ?>
                    </div>
                    <div class="account-item">
                        <?= $list['account'] ?>
                    </div>
                    <div class="pass-item">
                        <?= $list['pass'] ?>
                    </div>
                    <div class="first-item">
                        <?= $list['first_name'] ?>
                    </div>
                    <div class="last-item">
                        <?= $list['last_name'] ?>
                    </div>
                    <div class="email-item">
                        <?= $list['email'] ?>
                    </div>
                    <div class="role-item">
                        <?= ($list['role'] == 1) ? " Administrator " : "Guest" ?>
                    </div>
                    <?php if ($list['activated'] == 1) { ?>
                        <div class="activated-item">
                            <?= ($list['activated'] == 1) ? "Active" : "Spam"  ?>
                        </div>
                    <?php }else{ ?>
                        <div class="activated-item-spam">
                            <?= ($list['activated'] == 1) ? "Active" : "Spam"  ?>
                        </div>
                        <?php } ?>

                    <div class="action-item">
                        <a class="admin__btn-del" onclick="return confirm('Bạn có muốn xoá không?')" href="?delete&id_user=<?= $list['id_user'] ?>">Xoá</a>
                        <a class="admin__btn-update" href="?edit&id_user=<?= $list['id_user'] ?>">Sửa</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>



</div>