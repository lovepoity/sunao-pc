<div class="content">
    <div class="content__title">Bảng thống kê</div>
    <div class="sub__content" id="thongke">
        <div class="sub__content__table">

            <table class="sanpham__table">
                <tr>
                    <th>Mã</th>
                    <th>Tên danh mục</th>
                    <th>Số lượng</th>
                    <th>Giá cao nhất</th>
                    <th>Giá thấp nhất</th>
                    <th>Giá trung bình</th>
                </tr>
                <?php
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    echo '<tr>
                                <td>' . $madm . '</td>
                                <td>' . $tendm . '</td>
                                <td>' . $countsp . '</td>
                                <td>' . $maxprice . '</td>
                                <td>' . $minprice . '</td>
                                <td>' . $avgprice . '</td>
                            </tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>