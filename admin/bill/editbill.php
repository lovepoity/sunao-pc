<!-- editbill.php -->
<div class="content">
    <div class="content__title">Sửa đơn hàng</div>
    <div class="sub__content" id="danhmuc">
        <div class="sub__content__table">

            <form action="index.php?act=updatebill" method="post">
                <div class="sub__content__title">
                    <p>Tên khách hàng</p>
                    <div class="input-container">
                        <input type="hidden" name="bill_id" value="<?php echo $bill['id']; ?>">
                        <input autofocus class="input-field" type="text" name="bill_user" value="<?php echo $bill['bill_user']; ?>">
                        <span class="input-highlight"></span>
                    </div>
                </div>


                <div class="sub__content__title">
                    <p>Ngày đặt hàng</p>
                    <div class="input-container">
                        <input class="input-field" type="datetime" name="ngaydathang" value="<?php echo $bill['ngaydathang']; ?>">
                        <span class="input-highlight"></span>
                    </div>
                </div>
                <div class="sub__content__title">
                    <p>Tổng giá trị</p>
                    <div class="input-container">
                        <input class="input-field" type="text" name="total" value="<?php echo $bill['total']; ?>">
                        <span class="input-highlight"></span>
                    </div>
                </div>
                <div class="sub__content__title">

                    <p>Tình trạng đơn hàng:</p>
                    <select name="bill_status">
                        <option value="0" <?php if ($bill['bill_status'] == 0) echo 'selected'; ?>>Đơn hàng mới</option>
                        <option value="1" <?php if ($bill['bill_status'] == 1) echo 'selected'; ?>>Chưa xử lý</option>
                        <option value="2" <?php if ($bill['bill_status'] == 2) echo 'selected'; ?>>Đang xử lý</option>
                        <option value="3" <?php if ($bill['bill_status'] == 3) echo 'selected'; ?>>Đã hoàn thành</option>
                        <option value="4" <?php if ($bill['bill_status'] == 4) echo 'selected'; ?>>Đang giao hàng</option>
                        <option value="5" <?php if ($bill['bill_status'] == 5) echo 'selected'; ?>>Giao hàng thành công</option>
                    </select>
                </div>
                <div class="sub__content__button">
                    <input class="button--add" type="submit" name="update_bill" value="Cập nhật">
                </div>
                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo '<div class="thongbao">' . $thongbao . '</div>';
                ?>
            </form>
        </div>
    </div>
</div>
</div>