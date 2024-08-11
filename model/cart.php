<?php


function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = '<th>Thao tác</th>';
        $xoasp_td2 = '<td></td>';
    } else {
        $xoasp_th = '';
        $xoasp_td2 = '';
    }
    echo '<tr>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            ' . $xoasp_th . '
        </tr>';

    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] . $cart[4];
        $tong += $ttien;
        if ($del == 1) {
            $xoasp_td = '<td><a href="index.php?act=delcart&idcart=' . $i . '"> <input type="button" value="Xóa"> </a></td>';
        } else {
            $xoasp_td = '';
        }
        echo '

                <tr>
                    <td><img src="' . $hinh . '" alt="" height="80"></td>
                    <td>' . $cart[1] . '</td>
                    <td>' . $cart[3] . '</td>
                    <td>' . $cart[4] . '</td>
                    <td>' . $ttien . '</td>
                    ' . $xoasp_td . '
                </tr>';
        $i += 1;
    }
    echo '<tr>
            <td colspan="4">Tổng đơn hàng</td>
           
            <td>' . $tong . '</td>
            ' . $xoasp_td2 . '
        </tr>';
}

function tongdonhang()
{
    $tong = 0;

    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] . $cart[4];
        $tong += $ttien;
    }
    return $tong;
}

function insert_bill($iduser, $user, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill (iduser, bill_user, bill_email, bill_address, bill_tel, bill_pttt, ngaydathang, total) 
    values('$iduser' ,'$user', '$email', '$address', '$tel', '$pttt', '$ngaydathang', '$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}

function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO cart (iduser, idpro, img, name, price, soluong, thanhtien, idbill) 
    values('$iduser', '$idpro', '$img', '$name', '$price', '$soluong', '$thanhtien', '$idbill')";
    return pdo_execute($sql);
}

function loadall_cart($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill = $idbill";
    $bill = pdo_query($sql);
    return sizeof($bill);
}

function loadone_bill($id)
{
    $sql = "SELECT * FROM bill WHERE id = $id";
    $bill = pdo_query_one($sql);
    return $bill;
}

function loadall_cart_thongke()
{
    $sql = "SELECT * FROM cart";
    $bill = pdo_query($sql);
    return $bill;
}

function loadall_cart_count($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill = $idbill";
    $bill = pdo_query($sql);
    return sizeof($bill);;
}

function loadall_bill($kyw = 0, $iduser = 0)
{
    $sql = "SELECT * FROM bill WHERE 1";
    $sql .= " ORDER BY id DESC";
    $listbill = pdo_query($sql);
    return $listbill;
}

function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;

        case '1':
            $tt = "Chưa xử lý";
            break;

        case '2':
            $tt = "Đang xử lý";
            break;

        case '3':
            $tt = "Đã hoàn thành";
            break;

        case '4':
            $tt = "Đang giao hàng";
            break;

        case '5':
            $tt = "Giao hàng thành công";
            break;

        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}
function loadall_thongke()
{
    $sql = "SELECT danhmuc.id AS madm, danhmuc.name AS tendm, COUNT(sanpham.id) AS countsp, MIN(sanpham.price) AS minprice, MAX(sanpham.price) AS maxprice, AVG(sanpham.price) AS avgprice";
    $sql .= " FROM sanpham LEFT JOIN danhmuc ON danhmuc.id=sanpham.iddm";
    $sql .= " GROUP BY danhmuc.id ORDER BY danhmuc.id DESC";
    return pdo_query($sql);
}

function delete_bill($id)
{
    // Xóa các dòng liên quan trong bảng 'cart' trước
    $sql = "DELETE FROM cart WHERE idbill=" . $id;
    pdo_execute($sql);

    // Sau đó mới xóa dòng trong bảng 'bill'
    $sql = "DELETE FROM bill WHERE id=" . $id;
    pdo_execute($sql);
}
include_once 'pdo.php'; // Sử dụng include_once để chỉ import file pdo.php một lần

function update_bill($id, $name, $ngaydathang, $total, $ttdh)
{
    try {
        $sql = "UPDATE bill SET 
                bill_user = ?,
                ngaydathang = ?,
                total = ?,
                bill_status = ?
                WHERE id = ?";
        pdo_execute($sql, $name, $ngaydathang, $total, $ttdh, $id);
    } catch (PDOException $e) {
        // Xử lý ngoại lệ PDO tại đây nếu cần thiết
        throw $e;
    }
}
