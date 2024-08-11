<div class="text__bar">
    <span>Thanh toán dần, thời hạn đến 24 tháng và chỉ trả trước 20%.
        <a href="#">Tìm hiểu thêm <i class="fa-solid fa-chevron-right"></i></a>
    </span>
</div>

<div class="container">
    <div class="content ">
        <div class="detail">
            <div class="detail__box">
                <div class="detail__name">Cảm ơn quý khách đã đặt hàng</div>
            </div>

            <div class="cart__confirm">
                <div class="cart__confirm__custom">
                    <div class="cart__confirm__custom__name">THÔNG TIN ĐƠN HÀNG</div>
                    <div class="cart__confirm__custom__info">
                        <li>- Mã đơn hàng: ADU - <?= $bill['id']; ?></li>
                        <li>- Ngày đặt hàng: <?= $bill['ngaydathang']; ?></li>
                        <li>- Tổng đơn hàng: <?= $bill['total']; ?></li>
                        <li>- Phương thức thanh toán: <?= $bill['bill_pttt']; ?></li>
                    </div>
                </div>
                <div class="cart__confirm__custom">
                    <div class="cart__confirm__custom__name">THÔNG TIN ĐẶT HÀNG</div>
                    <div class="cart__confirm__custom__info">
                        <li>- Nguời đặt hàng: <?= $bill['bill_user'] ?></li>
                        <li>- Địa chỉ: <?= $bill['bill_address'] ?></li>
                        <li>- Email: <?= $bill['bill_email'] ?></li>
                        <li>- Điện thoại: <?= $bill['bill_tel'] ?></li>
                    </div>
                </div>
            </div>

        </div>
        <?php
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
        }
        ?>




        <div style="margin-top: 20px;" class="detail">
            <div class="detail__box">
                <div class="detail__name">CHI TIẾT GIỎ HÀNG</div>
                <div class="cart">
                    <table border="1">
                        <?php
                        viewcart(0);
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <!-- <div class="row mb bill">
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
            </div> -->
    </div>




    <div class="sidebar">
        <?php include "view/sidebar.php"; ?>
    </div>
</div>