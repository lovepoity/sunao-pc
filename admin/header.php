<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="X250-zh1LNLHHNZgUOHLhOYXGqjLq7x3zibdSh2Uj5w" />

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="icon" href="/public/img/main/S.png">
    <!-- END FONTAWESOME -->

    <!-- CSS -->
    <link rel="stylesheet" href="/public/css/main.css">
    <link rel="stylesheet" href="/public/css/admin.css">
    <link rel="stylesheet" href="/public/css/sub__admin.css">
    <!-- END CSS -->

    <!-- JAVASCRIPT -->
    <script src="/public/javascript/admin.js"></script>
    <!-- END JAVASCRIPT -->

    <!-- ----------------------------------------------------------------------------- -->

    <title>Admin</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <div class="sidebar__header">
                <div class="sidebar__admin">
                    <div class="sidebar__left">
                        <img src="/public/img/admin/trot.jpg">
                    </div>
                    <div class="sidebar__right">
                        <h1>Admin</h1>
                        <a href="../index.php"><i class="fa-solid fa-angle-left"></i> Quay về Cửa Hàng</a>
                    </div>
                </div>
            </div>

            <div class="sidebar__menu">
                <ul class="menu__sub1">
                    <li><a href="index.php?act=home"><i class="fa-solid fa-house"></i> Trang chủ</a></li>
                    <li><a href="#danhsach"><i class="fa-solid fa-list"></i> Danh mục<i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="menu__sub2">
                            <li><a href="index.php?act=listdm"><i style="color: #ff5722;" class="fa-solid fa-minus"></i> Danh sách loại hàng</a></li>
                            <li><a href="index.php?act=adddm"><i style="color: #ff5722;" class="fa-solid fa-minus"></i> Thêm loại hàng</a></li>
                        </ul>
                    </li>
                    <li><a href="#sanpham"><i class="fa-solid fa-box"></i> Sản phẩm<i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="menu__sub2">
                            <li><a href="index.php?act=listsp"><i style="color: #2196f3;" class="fa-solid fa-minus"></i> Danh sách sản phẩm</a></li>
                            <li><a href="index.php?act=addsp"><i style="color: #2196f3;" class="fa-solid fa-minus"></i> Thêm sản phẩm</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?act=dskh"><i class="fa-solid fa-users"></i> Tài khoản</a></i>
                    </li>
                    <li><a href="index.php?act=dsbl"><i class="fa-solid fa-quote-left"></i> Bình luận
                        </a>
                    </li>
                    <li><a href="#thongke"><i class="fa-solid fa-chart-simple"></i> Thống kê<i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="menu__sub2">
                            <li><a href="index.php?act=thongke"><i style="color: #009674;" class="fa-solid fa-minus"></i> Bảng thống kê</a></li>
                            <li><a href="index.php?act=bieudo"><i style="color: #009674;" class="fa-solid fa-minus"></i> Biểu đồ</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?act=listbill"><i class="fa-solid fa-table"></i> Danh sách đơn hàng</i></a>
                    </li>
                </ul>
            </div>
            <div class="description">
                <p>@Huy Lê</p>
                <p>@Ngô Kiệt</p>
                <p>@Tony</p>
                <p>@Ngô Dương</p>
            </div>
        </div>