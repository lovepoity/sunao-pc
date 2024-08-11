<?php
if (is_array($dm)) {
    extract($dm);
}
?>

<div class="content">
    <div class="content__title">Cập nhật loại hàng</div>
    <div class="sub__content">
        <div class="sub__content__table">
            <form action="index.php?act=updatedm" method="post">
                <div class="sub__content__title">
                    <div class="input-container">
                        <p>Tên loại</p>
                        <input autofocus class="input-field" placeholder="Nhập tên loại..." type="text" name="tenloai" value="<?php if (isset($name) && ($name != "")) echo $name; ?>">
                        <span class="input-highlight"></span>
                    </div>
                </div>

                <div class="sub__content__button">
                    <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0)) echo $id; ?>">
                    <input class="button--add" type="submit" name="capnhat" value="Cập nhật">
                    <a href="index.php?act=listdm"><input class="button--list" type="button" value="Danh sách"></a>
                </div>

                <?php
                if (isset($thongbao) && ($thongbao != ""))
                    echo '<div class="thongbao">' . $thongbao . '</div>';
                ?>
            </form>
        </div>
    </div>
</div>

</div>