<div class="text__bar">
    <span>Thanh toán dần, thời hạn đến 24 tháng và chỉ trả trước 20%.
        <a href="#">Tìm hiểu thêm <i class="fa-solid fa-chevron-right"></i></a>
    </span>
</div>
<div class="container">
    <div class="content">
        <div class="detail">
            <div class="detail__box">
                <?php
                if (isset($onesp)) {
                    extract($onesp);
                ?>
                    <p class="detail__name"><?= htmlspecialchars($name) ?></p>
                    <div class="detail__content">
                        <?php
                        $img_full_path = $img_path . $img;
                        echo '<img src="' . htmlspecialchars($img_full_path) . '"  alt="sunao">';
                        ?>
                        <div class="detail__content__info">
                            <?php
                            echo '<div class="detail__content__price"><p>Giá bán chính thức</p>$ ' . htmlspecialchars($price) . '</div>';
                            echo '<div class="detail__content__desc"><p>Thông tin sản phẩm</p>' . htmlspecialchars($mota) . '</div>';
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="detail__star">
                    <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>

                </div>
            </div>


        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $("#comment").load("view/binhluan/binhluanfrom.php", {
                    idpro: <?= isset($id) ? (int)$id : 0 ?>
                });
            });
        </script>
        <div class="comment" id="comment"></div>
        <div class="detail__same">
            <div class="detail__same__title">SẢN PHẨM CÙNG LOẠI</div>
            <div class="detail__same__content">
                <?php
                if (isset($sp_cung_loai) && is_array($sp_cung_loai)) {
                    foreach ($sp_cung_loai as $sp_cungloai) {
                        $img_full_path = $img_path . $sp_cungloai['img'];
                        $linksp = "index.php?act=sanphamct&idsp=" . (int)$sp_cungloai['id'];
                ?>
                        <div class="detail__same__content__item">
                            <a href="<?= htmlspecialchars($linksp) ?>" class="full-link">
                                <img src="<?= htmlspecialchars($img_full_path) ?>" alt="<?= htmlspecialchars($sp_cungloai['name']) ?>">
                                <li><?= htmlspecialchars($sp_cungloai['name']) ?></li>
                                <div>$ <?= htmlspecialchars($sp_cungloai['price']) ?></div>
                            </a>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- SIDEBAR -->
    <div class="sidebar">
        <?php include "sidebar.php"; ?>
    </div>
</div>