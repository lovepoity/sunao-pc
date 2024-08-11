<div class="content">
  <div class="content__title">Thêm loại hàng</div>
  <div class="sub__content">
    <div class="sub__content__table">
      <form action="index.php?act=adddm" method="post">
        <div class="sub__content__title">
          <p>Tên loại hàng</p>
          <div class="input-container">
            <input required oninvalid="this.setCustomValidity('Vui lòng nhập tên danh mục hàng.')" oninput="this.setCustomValidity('')" autofocus class="input-field" placeholder="Nhập tên loại..." type="text" name="tenloai" id="tenloai">
            <span class="input-highlight"></span>
          </div>
        </div>
        <div class="sub__content__button">
          <input class="button--add" type="submit" name="themmoi" value="THÊM MỚI">
          <input class="button--reset" type="reset" value="NHẬP LẠI">
        </div>
        <?php
        if (isset($thongbao) && ($thongbao != ""))
          echo '<div class="thongbao">' . $thongbao . '</div>';
        ?>
      </form>
    </div>
  </div>
</div>