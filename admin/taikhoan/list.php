<div class="content">
    <div class="content__title">Danh sách tài khoản</div>
    <div class="sub__content" id="taikhoan">

        <div class="sub__content__table">


            <table class="sanpham__table">

                <tr>
                    <th>Mã</th>
                    <th>Tên đăng nhập</th>
                    <th>Mật khẩu</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Điện thoại</th>
                    <th>Vai trò</th>
                    <th>Thao tác</th>
                </tr>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $xoatk = "index.php?act=xoatk&id=" . $id;
                    echo '<tr>
                                <td>' . $id . '</td>
                                <td>' . $user . '</td>
                                <td>' . $pass . '</td>
                                <td>' . $email . '</td>
                                <td>' . $address . '</td>
                                <td>' . $tel . '</td>
                                <td>' . $role . '</td>
                                <td> <a href="' . $xoatk . '"><input class="button--delete" type="button" value="Xóa"></a></td>
                                </tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>
</div>