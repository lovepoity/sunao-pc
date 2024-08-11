<?php
if (is_array($sanpham)) {
  extract($sanpham);
}
$hinhpath = "../public/img/sp/" . $img;
if (is_file($hinhpath)) {
  $hinh = "<img src='" . $hinhpath . "' height='80' alt='no photo'>";
} else {
  $hinh = "no photo";
}
?>
<div class="content">
  <div class="content__title">Cập nhật thông tin sản phẩm</div>
  <div class="sub__content">
    <form class="sub__content__table" action="index.php?act=updatesp" method="post" enctype="multipart/form-data">


      <div class="sub__content__title">

        <p>Danh mục</p>
        <select name="iddm" id="">
          <?php
          foreach ($listdanhmuc as $danhmuc) {
            if (isset($iddm) && $danhmuc['id'] == $iddm) {
              $s = "selected";
            } else {
              $s = "";
            }
            echo '<option value="' . $danhmuc['id'] . '" ' . $s . '>' . $danhmuc['name'] . '</option>';
          }
          ?>
        </select>
      </div>

      <div style="margin-top: 40px;" class="sub__content__title">
        <p style="margin-bottom: 5px;">Tên sản phảm</p>
        <div class="input-container">
          <input autofocus class="input-field" type="text" name="tensp" value="<?php echo $name; ?>">
          <span class="input-highlight"></span>
        </div>
      </div>

      <div class="sub__content__title">
        <p style="margin: 50px 0 5px 0;">Giá</p>
        <div class="input-container">
          <input class="input-field" type="text" name="giasp" value="<?php echo $price; ?>">
          <span class="input-highlight"></span>
        </div>
      </div>

      <div class="sub__content__title">
        <p style="margin: 50px 0 5px 0;">Hình ảnh</p>
        <div class="sub__content__title__img">
          <?php echo $hinh; ?>
          <label for="file-upload" class="custom-file-upload">
            Chọn file từ máy tính
          </label>
        </div>
        <input id="file-upload" type="file" name="hinh" id="hinh">

      </div>

      <div class="sub__content__title">
        <p>Mô tả</p>
        <textarea name="mota" id="mota"><?php echo $mota; ?></textarea>
      </div>


      <div class="sub__content__button">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input class="button--add" type="submit" name="capnhat" value="Cập nhật">
        <a href="index.php?act=listsp"><input class="button--list" type="button" value="DANH SÁCH"></a>
      </div>
      <?php
      if (isset($thongbao) && ($thongbao != ""))
        echo '<div class="thongbao">' . $thongbao . '</div>';
      ?>
    </form>
  </div>
</div>