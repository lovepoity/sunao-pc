<div class="text__bar">
    <span>Thanh toán dần, thời hạn đến 24 tháng và chỉ trả trước 20%.
        <a href="#">Tìm hiểu thêm <i class="fa-solid fa-chevron-right"></i></a>
    </span>
</div>
<div class="container">
    <div class="content ">
        <div class="detail">
            <div class="detail__box">
                <div class="detail__name">CẬP NHẬT TÀI KHOẢN</div>
                <div class="cart">
                    <?php
                    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);
                    }
                    ?>
                    <form action="index.php?act=edit_taikhoan" method="post">
                        <!-- email -->
                        <p class="acc__title">Email</p>
                        <div class="input-container">
                            <input autofocus class="input-field" type="email" name="email" value="<?= $email ?>">
                            <span class="input-highlight"></span>
                        </div>

                        <!-- ten dang nhap -->
                        <p class="acc__title">Tên đăng nhập</p>
                        <div class="input-container">
                            <input autofocus class="input-field" type="text" name="user" value="<?= $user ?>">
                            <span class="input-highlight"></span>
                        </div>

                        <!-- mat khau -->
                        <p class="acc__title">Mật khẩu</p>
                        <div class="input-container">
                            <input autofocus class="input-field" type="password" name="pass" value="<?= $pass ?>">
                            <span class="input-highlight"></span>
                        </div>

                        <!-- dia chi -->
                        <p class="acc__title">Địa chỉ</p>
                        <div class="input-container">
                            <input autofocus class="input-field" type="text" name="address" value="<?= $address ?>">
                            <span class="input-highlight"></span>
                        </div>

                        <!-- SDT -->
                        <p class="acc__title">Số điện thoại</p>
                        <div class="input-container">
                            <input autofocus class="input-field" type="text" name="tel" value="<?= $tel ?>">
                            <span class="input-highlight"></span>
                        </div>


                        <div class="acc__button">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <input class="button--add" type="submit" value="Cập nhật" name="capnhat">
                            <input class="button--reset" type="reset" value="Nhập lại">
                        </div>
                    </form>
                    <p class="thongbao">
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!-- SIDEBAR -->
    <div class="sidebar">
        <?php include "view/sidebar.php"; ?>
    </div>
</div>