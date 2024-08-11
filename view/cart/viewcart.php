<div class="text__bar">
    <span>Thanh toán dần, thời hạn đến 24 tháng và chỉ trả trước 20%.
        <a href="#">Tìm hiểu thêm <i class="fa-solid fa-chevron-right"></i></a>
    </span>
</div>

<div class="container">
    <div class="content">
        <div class="detail">
            <div class="detail__box">
                <div class="detail__name">GIỎ HÀNG</div>
                <div class="cart">
                    <table border="0">
                        <?php
                        viewcart(1);
                        ?>
                    </table>
                    <div class="acc__button">
                        <a href="index.php?act=bill"><input class="button--next" type="submit" value="TIẾP TỤC ĐẶT HÀNG"> </a>
                        <a href="index.php?act=delcart"> <input class="button--del" type="button" value="XOÁ GIỎ HÀNG"> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <?php include "view/sidebar.php"; ?>
    </div>
</div>