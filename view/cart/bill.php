<div class="text__bar">
    <span>Thanh toán dần, thời hạn đến 24 tháng và chỉ trả trước 20%.
        <a href="#">Tìm hiểu thêm <i class="fa-solid fa-chevron-right"></i></a>
    </span>
</div>
<div class="container">
    <div class="content ">
        <form action="index.php?act=billconfirm" method="post">
            <div class="detail">
                <div class="detail__box">

                    <div class="detail__name">THÔNG TIN ĐẶT HÀNG</div>
                    <div class="cart" id="cart__bill">
                        <table border="0">
                            <?php
                            if (isset($_SESSION['user'])) {
                                $user = $_SESSION['user']['user'];
                                $address = $_SESSION['user']['address'];
                                $email = $_SESSION['user']['email'];
                                $tel = $_SESSION['user']['tel'];
                            } else {
                                $user = "";
                                $address = "";
                                $email = "";
                                $tel = "";
                            }
                            ?>
                            <tr>
                                <td>Nguời đặt hàng</td>
                                <td><input autofocus type="text" name="user" value="<?= $user ?>"></td>
                            </tr>
                            <tr>
                                <td>Địa chỉ</td>
                                <td><input type="text" name="address" value="<?= $address ?>"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="email" value="<?= $email ?>"></td>
                            </tr>
                            <tr>
                                <td>Điện thoại</td>
                                <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                            </tr>
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) {
                                echo $thongbao;
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div style="margin: 20px 0;" class="detail">
                <div class="detail__box">
                    <div class="detail__name">PHƯƠNG THỨC THANH TOÁN</div>
                    <div class="cart" id="cart__check">
                        <table>
                            <tr>
                                <td><label for="cod"><input id="cod" type="radio" name="pttt" value="1" checked>Trả tiền khi nhận hàng</label></td>
                                <td><label for="bank"><input id="bank" type="radio" name="pttt" value="2">Chuyển khoản ngân hàng</label></td>
                                <td><label for="visa"><input id="visa" type="radio" name="pttt" value="3">Visa / Master Card</label></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="detail">
                <div class="detail__box">
                    <div class="detail__name">THÔNG TIN GIỎ HÀNG</div>
                    <div class="cart">
                        <table border="0">
                            <?php
                            viewcart(0);
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="cart__agree">
                <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
            </div>
        </form>
    </div>




    <div class="sidebar">
        <?php include "view/sidebar.php"; ?>
    </div>
</div>