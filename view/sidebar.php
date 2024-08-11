<!-- ACCOUNT -->
<div class="sidebar__box" id="account">
    <div class="sidebar__box__title"><i class="fa-solid fa-user"></i> Tài khoản</div>
    <?php
    if (isset($_SESSION['user'])) {
        extract($_SESSION['user']);
    ?>

        <div class="login__welcome">Chào <div class="login__name">
                <?= $user ?>
            </div> !
        </div>
        <div class="login__infor">
            <li>
                <a href="index.php?act=mybill">Đơn hàng của tôi</a>
            </li>
            <li>
                <a href="index.php?act=quenmk">Quên mật khẩu</a>
            </li>
            <li>
                <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
            </li>
            <?php if ($role == 1) { ?>
                <li>
                    <a href="admin/index.php">Đăng nhập tài khoản admin</a>
                </li>
            <?php } ?>
            <li>
                <a href="index.php?act=thoat">Thoát</a>
            </li>
        </div>

    <?php
    } else {
    ?>
        <form action="index.php?act=dangnhap" method="post">
            <div class="sidebar__box__form sidebar__box__form--input">
                Tên đăng nhập <br>
                <input type="text" name="user" placeholder="Nhập tên đăng nhập...">
            </div>
            <div class="sidebar__box__form sidebar__box__form--input">
                Mật khẩu <br>
                <input type="password" name="pass" placeholder="Nhập mật khẩu...">
            </div>
            <div class="sidebar__box__form">
                <input type="submit" value="ĐĂNG NHẬP" name="dangnhap">
            </div>
        </form>
        <ul>
            <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
            <li><a href="index.php?act=dangky">Đăng ký thành viên</a></li>
        </ul>
    <?php
    }
    ?>
</div>
<!-- MENU -->
<div class="sidebar__box" id="menu">
    <div class="sidebar__box__title"> <i class="fa-solid fa-rectangle-list"></i> Danh mục</div>
    <?php foreach ($dsdm as $dm) {
        extract($dm);
        $linkdm = "index.php?act=sanpham&iddm=" . $id;
        echo '<a href="' . $linkdm . '" class="sidebar__box__menu"><i class="fa-solid fa-chevron-right"></i> ' . $name . '</a>';
    }
    ?>
    <div class="sidebar__box__search">
        <form action="index.php?act=sanpham" method="post">
            <input placeholder="Nhập sản phẩm" type="text" name="kyw" id="">
            <input type="submit" name="timkiem" value="Tìm Kiếm">
        </form>

    </div>
</div>
<!-- TOP 10 -->
<div class="sidebar__box" id="top10">
    <div class="sidebar__box__title"><i class="fa-solid fa-thumbs-up"></i> Top 10 yêu thích</div>
    <?php
    foreach ($dstop10 as $sp) {
        extract($sp);
        $linksp = "index.php?act=sanphamct&idsp=" . $id;
        $img = $img_path . $img;
        echo '<div class="sidebar__box__item">
            <a href="' . $linksp . '"><img  alt="sunao" src="' . $img . '" />' . $name . '</a>
        </div>';
    }
    ?>
</div>
</div>

</div>