<div class="text__bar">
    <span>Thanh toán dần, thời hạn đến 24 tháng và chỉ trả trước 20%.
        <a href="#">Tìm hiểu thêm <i class="fa-solid fa-chevron-right"></i></a>
    </span>
</div>


<div class="container">
    <div class="content">
        <div class="detail">
            <div class="detail__box">

                <div class="detail__name">ĐƠN HÀNG CỦA BẠN</div>
                <div class="cart">
                    <table>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ngày đặt</th>
                            <th>Số lượng mặt hàng</th>
                            <th>Tổng giá trị đơn hàng</th>
                            <th>Tình trạng</th>
                        </tr>

                        <?php
                        if (is_array($listbill)) {
                            foreach ($listbill as $bill) {
                                extract($bill);
                                $ttdh = get_ttdh($bill['bill_status']);
                                $countsp = loadall_cart_count($bill['id']);
                                echo '<tr>
                                        <td>ADU - ' . $bill['id'] . '</td>
                                        <td>' . $bill['ngaydathang'] . '</td>
                                        <td>' . $countsp . '</td>
                                        <td>' . $bill['total'] . '</td>
                                        <td>' . $ttdh . '</td>
                                    </tr>';
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar">
        <?php
        include "view/sidebar.php";
        ?>
    </div>
</div>