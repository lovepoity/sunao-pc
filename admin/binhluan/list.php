<div class="content">
    <div class="content__title">Danh sách bình luận</div>
    <div class="sub__content" id="binhluan">
        <div class="sub__content__table">
            <table class="sanpham__table">
                <tr>
                    <th>ID</th>
                    <th>Nội dung</th>
                    <th>ID User</th>
                    <th>ID Sản phẩm</th>
                    <th>Ngày bình luận</th>
                    <th>Hành động</th>
                </tr>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                    $xoabl = "index.php?act=xoabl&id=" . $id;
                    echo '<tr>
                                <td>' . $id . '</td>
                                <td>' . $noidung . '</td>
                                <td>' . $iduser . '</td>
                                <td>' . $idpro . '</td>
                                <td>' . $ngaybinhluan . '</td>
                                <td><a href="' . $xoabl . '"><input class="button--delete" type="button" value="Xóa"></a></td>
                                </tr>';
                }
                ?>
            </table>
        </div>
    </div