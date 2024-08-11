<div class="text__bar">
  <span>Thanh toán dần, thời hạn đến 24 tháng và chỉ trả trước 20%.
    <a href="#">Tìm hiểu thêm <i class="fa-solid fa-chevron-right"></i></a>
  </span>
</div>

<div class="container">
  <div class="content">
    <div class="detail__same">
      <?php if (!empty($thongbao)) : ?>
        <div class="detail__same__title"><?= $thongbao ?></div>
      <?php endif; ?>

      <?php if (empty($dssp)) : ?>
        <br>
      <?php else : ?>
        <div class="detail__same__title"><?= $tendm ?></div>
        <div class="detail__same__content">
          <?php
          $i = 0;
          foreach ($dssp as $sp) {
            extract($sp);
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            $hinh = $img_path . $img;
            if (($i = 2) || ($i = 5) || ($i = 8) || ($i = 11)) {
              $mr = "";
            } else {
              $mr = "mr";
            }
            echo '<div class="detail__same__content__item ' . $mr . '">
                      <a href="' . $linksp . '">
                        <div class="row img"><img src="' . $hinh . '"  alt="sunao"></a></div>
                        <li>' . $name . '</li>
                        <div>' . $price . '</div>
                      </a> 
                  </div>';
            $i += 1;
          }

          ?>
        </div>

        <script>
          document.addEventListener("DOMContentLoaded", function() {
            <?php if ($isEmpty) : ?>
              var detailSame = document.querySelector('.detail__same');
              if (detailSame) {
                detailSame.remove();
              }
            <?php endif; ?>
          });
        </script>

      <?php endif; ?>
    </div>
  </div>
  <div class="sidebar">
    <?php include "view/sidebar.php"; ?>
  </div>
</div>