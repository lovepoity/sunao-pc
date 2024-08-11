<div class="content">
  <div class="content__title">Thêm sản phẩm</div>
  <div class="sub__content">
    <form class="sub__content__table" action="index.php?act=addsp" method="post" enctype="multipart/form-data">
      <div class="sub__content__title">
        <p>Danh mục</p>
        <select name="iddm" id="">
          <?php
          foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            echo '<option value="' . $id . '">' . $name . '</option>';
          }
          ?>
        </select>
      </div>
      <div class="sub__content__title">
        <p style="margin: 30px 0 5px 0;">Tên sản phẩm</p>
        <div class="input-container">
          <input required oninvalid="this.setCustomValidity('Vui lòng nhập tên sản phẩm.')" oninput="this.setCustomValidity('')" autofocus class="input-field" placeholder="Nhập tên sản phẩm..." type="text" name="tensp" id="tensp">
          <span class="input-highlight"></span>
        </div>
      </div>
      <div class="sub__content__title">
        <p style="margin-bottom: 5px;">Giá bán</p>
        <div class="input-container">
          <input required oninvalid="this.setCustomValidity('Vui lòng nhập giá bán.')" oninput="this.setCustomValidity('')" class="input-field" placeholder="Nhập giá sản phẩm..." type="number" name="giasp" id="giasp">
          <span class="input-highlight"></span>
        </div>
      </div>
      <div class="sub__content__title">
        <p>Hình ảnh</p>
        <label for="file-upload" class="custom-file-upload">
          Chọn file từ máy tính
        </label>
        <input required oninvalid="this.setCustomValidity('Vui thêm ảnh sản phẩm.')" oninput="this.setCustomValidity('')" id="file-upload" type="file" name="hinh" id="hinh">
      </div>
      <div class="sub__content__title">
        <p>Mô tả</p>
        <textarea required oninvalid="this.setCustomValidity('Vui lòng nhập mô tả sản phẩm.')" oninput="this.setCustomValidity('')" placeholder="Nhập mô tả..." name="mota" id=""></textarea>
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