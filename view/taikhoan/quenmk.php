<div class="text__bar">
    <span>Thanh toán dần, thời hạn đến 24 tháng và chỉ trả trước 20%.
        <a href="#">Tìm hiểu thêm <i class="fa-solid fa-chevron-right"></i></a>
    </span>
</div>

<div class="container">
    <div class="content">
        <div class="detail">
            <div class="detail__box">
                <div class="detail__name">QUÊN MẬT KHẨU</div>
                <div class="cart">
                    <form action="index.php?act=quenmk" method="post">
                        <p class="acc__title">Nhập Email</p>
                        <div class="input-container">
                            <input autofocus class="input-field" type="email" name="email">
                            <span class="input-highlight"></span>
                        </div>

                        <div class="acc__button">
                            <input class="button--add" type="submit" value="Gửi" name="guiemail">
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