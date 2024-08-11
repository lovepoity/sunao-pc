<div class="content">
    <div class="content__title">Danh sách sản phẩm</div>
    <div class="sub__content" id="sanpham">
        <div class="sub__content__table">
            <table class="sanpham__table">
                <tr>
                    <th>Mã</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Lượt xem</th>
                    <th>Hành động</th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    $hinhpath = "../public/img/sp/" . $img;
                    if (is_file($hinhpath)) {
                        $img = "<img  src='" . $hinhpath . "' height='80' alt='sunao'>";
                    } else {
                        $img = "no photo";
                    }
                    echo '<tr>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $img . '</td>
                            <td>' . $price . '</td>
                            <td>' . $luotxem . '</td>
                            <td>
                                <div class="action">
                                    <a href="' . $suasp . '">
                                    <input class="button--edit" type="button" value="Sửa"></a> 
                                    <a href="' . $xoasp . '">
                                    <input class="button--delete" type="button" value="Xóa"></a>
                                </div>    
                            </td>
                        </tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>
</div>