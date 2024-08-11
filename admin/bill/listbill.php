<div class="content">
    <div class="content__title">Danh sách đơn hàng</div>
    <div class="sub__content" id="donhang">
        <div class="sub__content__table">
            <table class="sanpham__table">
                <tr>
                    <th>Mã</th>
                    <th>Thông tin khách hàng</th>
                    <th>Số lượng</th>
                    <th>Tổng</th>
                    <th>Tình trạng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Thao tác</th>
                </tr>
                <?php
                foreach ($listbill as $bill) {
                    extract($bill);
                    $kh = $bill['bill_user'] . "
                        <br>" . $bill['bill_email'] . "
                        <br>" . $bill['bill_address'] . "
                        <br>" . $bill['bill_tel'];
                    $ttdh = get_ttdh($bill['bill_status']);
                    $countsp = loadall_cart_count($bill['id']);
                    $xoabill = "index.php?act=xoabill&id=" . $bill['id'];
                    $suabill = "index.php?act=suabill&id=" . $bill['id'];
                    echo '<tr>
                                <td>ADU - ' . $bill['id'] . '</td>
                                <td>' . $kh . '</td>
                                <td>' . $countsp . '</td>
                                <td>' . $bill['total'] . '</td>
                                <td>' . $ttdh . '</td>
                                <td>' . $ngaydathang . '</td>
                                <td>
                                    <div class="action">
                                        <a href="' . $suabill . '"><input class="button--edit" type="button" value="Sửa"></a>
                                        <a href="' . $xoabill . '"><input class="button--delete" type="button" value="Xóa"></a>
                                    </div>
                                        </td>
                            <tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>