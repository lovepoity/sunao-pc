<div class="text__bar">
  <span>Thanh toán dần, thời hạn đến 24 tháng và chỉ trả trước 20%.
    <a href="#">Tìm hiểu thêm <i class="fa-solid fa-chevron-right"></i></a>
  </span>
</div>

<div class="container">
  <!-- CONTENT -->
  <div class="content">
    <!-- BANNER -->
    <div class="banner">
      <!-- Slideshow container -->
      <div class="slideshow-container">
        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
          <img loading="lazy" src="../public/img/banner/banner_1.webp" alt="sunao" style="width:100%; height: 450px">
        </div>
        <div class="mySlides fade">
          <img loading="lazy" src="../public/img/banner/banner_2.webp" alt="sunao" style="width:100%; height: 450px">
        </div>
        <div class="mySlides fade">
          <img loading="lazy" src="../public/img/banner/banner_3.webp" alt="sunao" style="width:100%; height: 450px">
        </div>
        <div class="mySlides fade">
          <img loading="lazy" src="../public/img/banner/banner_4.webp" alt="sunao" style="width:100%; height: 450px">
        </div>
        <div class="mySlides fade">
          <img loading="lazy" src="../public/img/banner/banner_5.webp" alt="sunao" style="width:100%; height: 450px">
        </div>
        <div class="mySlides fade">
          <img loading="lazy" src="../public/img/banner/banner_6.webp" alt="sunao" style="width:100%; height: 450px">
        </div>
        <div class="mySlides fade">
          <img loading="lazy" src="../public/img/banner/banner_7.webp" alt="sunao" style="width:100%; height: 450px">
        </div>

        <div class="prev" onclick="plusSlides(-1)">&#10094;</div>
        <div class="next" onclick="plusSlides(1)">&#10095;</div>
      </div>
    </div>

    <!-- PRODUCT -->
    <div class="product" id="product-container">
      <div class="product__title">
        <div>Tất cả sản phẩm</div>
        <i class="fa-solid fa-list"></i>
      </div>
      <?php
      $i = 0;
      foreach ($spnew as $sp) {
        extract($sp);
        $linksp = "index.php?act=sanphamct&idsp=" . $id;
        $hinh = $img_path . $img;
        if (($i == 2) || ($i == 5) || ($i == 8)) {
          $mr = "";
        } else {
          $mr = "mr";
        }
        echo '<div class="product__item ' . $mr . '">
                  <a href="' . $linksp . '"><img loading="lazy" src="' . $hinh . '" alt="sunao"></a>
                  <a href="' . $linksp . '">' . $name . '</a>
                  <p>$ ' . $price . '</p>
                    <form action="index.php?act=addtocart" method="post" onsubmit="return checkLogin()">
                      <input type="hidden" name="id" value="' . $id . '">
                      <input type="hidden" name="name" value="' . $name . '">
                      <input type="hidden" name="img" value="' . $img . '">
                      <input type="hidden" name="price" value="' . $price . '">
                      <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                    </form>
                </div>';
        $i += 1;
      }
      ?>
    </div>

    <!-- ----------------------------------------------------------------------------- -->
    <!-- Cảnh báo đăng nhập -->
    <script>
      function checkLogin() {
        <?php if (!isset($_SESSION['user'])) { ?>
          alert("Vui lòng đăng nhập để thêm vào giỏ hàng.");
          return false; // Prevent form submission
        <?php } ?>
        return true; // Allow form submission
      }
    </script>
    <div class="pagination" id="pagination-container"></div>

    <!-- END PRODUCT -->
    <!-- ----------------------------------------------------------------------------- -->

  </div>

  <!-- SIDEBAR -->
  <div class="sidebar">
    <?php include "sidebar.php" ?>
  </div>
  <!-- SIDEBAR -->

</div>

<!-- END CONTAINER -->
<!-- ----------------------------------------------------------------------------- -->
<!-- ENDOW -->

<div class="endow">
  <div class="endow__1">
    <p>ƯU ĐÃI SINH VIÊN</p>
    <div class="endow__2">
      <img loading="lazy" src="/public/img/endow/1.webp" alt="sunao">
      <img loading="lazy" src="/public/img/endow/2.webp" alt="sunao">
      <img loading="lazy" src="/public/img/endow/3.webp" alt="sunao">
      <img loading="lazy" src="/public/img/endow/4.webp" alt="sunao">
    </div>
  </div>
  <div class="endow__1">
    <p>ƯU ĐÃI THANH TOÁN</p>
    <div class="endow__2">
      <img loading="lazy" src="/public/img/endow/5.webp" alt="sunao">
      <img loading="lazy" src="/public/img/endow/6.webp" alt="sunao">
      <img loading="lazy" src="/public/img/endow/7.webp" alt="sunao">
      <img loading="lazy" src="/public/img/endow/8.webp" alt="sunao">
    </div>
  </div>
  <div class="endow__1">
    <p>CHUYÊN TRANG THƯƠNG HIỆU</p>
    <div class="endow__2">
      <img loading="lazy" src="/public/img/endow/9.webp" alt="sunao">
      <img loading="lazy" src="/public/img/endow/10.webp" alt="sunao">
      <img loading="lazy" src="/public/img/endow/11.webp" alt="sunao">
      <img loading="lazy" src="/public/img/endow/12.webp" alt="sunao">
    </div>
  </div>
</div>

<!-- ----------------------------------------------------------------------------- -->
<!-- END ENDOW -->