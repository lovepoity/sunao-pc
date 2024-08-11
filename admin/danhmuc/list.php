<div class="content">
    <div class="content__title">Danh mục loại hàng</div>
    <div class="sub__content" id="danhmuc">
        <div class="sub__content__table">
            <table>
                <tr>
                    <th>Mã</th>
                    <th>Tên loại hàng</th>
                    <th>Hành động</th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $id;
                    $xoadm = "index.php?act=xoadm&id=" . $id;
                    echo '<tr>
                            <td>' . $id . '</td>
                            <td>' . $name . '</td>
                            <td>
                                <div class="action">          
                                    <a href="' . $suadm . '"> 
                                    <input class="button--edit" type="button" value="Sửa"></a>
                                    <a href="' . $xoadm . '">
                                    <input class="button--delete" type="button" value="Xóa"></a>
                                </div>
                            </td>
                        </tr>';
                }
                ?>
            </table>
        </div>
    </div