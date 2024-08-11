<div class="text__bar">
    <span>Thanh toán dần, thời hạn đến 24 tháng và chỉ trả trước 20%.
        <a href="#">Tìm hiểu thêm <i class="fa-solid fa-chevron-right"></i></a>
    </span>
</div>
<div class="container">
    <div class="content">
        <div class="detail">
            <div class="detail__box">
                <div class="detail__name">ĐĂNG KÝ THÀNH VIÊN</div>
                <div class="cart">
                    <form action="index.php?act=dangky" method="post">
                        <p class="acc__title">Email</p>
                        <div class="input-container">
                            <input pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required oninvalid="this.setCustomValidity('Vui lòng nhập email.')" oninput="this.setCustomValidity('')" autofocus class="input-field" type="email" name="email">
                            <span class="input-highlight"></span>
                        </div>
                        <p class="acc__title">Tên đăng nhập</p>
                        <div class="input-container">
                            <input pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required oninvalid="this.setCustomValidity('Vui lòng nhập tên đăng nhập.')" oninput="this.setCustomValidity('')" class="input-field" type="text" name="user">
                            <span class="input-highlight"></span>
                        </div>
                        <p class="acc__title">Mật khẩu</p>
                        <div class="input-container">
                            <input required oninvalid="this.setCustomValidity('Vui lòng nhập mật khẩu.')" oninput="this.setCustomValidity('')" class="input-field" type="password" name="pass">
                            <span class="input-highlight"></span>
                        </div>
                        <div class="acc__button">
                            <input class="button--add" type="submit" value="Đăng ký" name="dangky">
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