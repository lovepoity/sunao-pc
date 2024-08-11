<div class="text__bar">
  <span>Thanh toán dần, thời hạn đến 24 tháng và chỉ trả trước 20%.
    <a href="#">Tìm hiểu thêm <i class="fa-solid fa-chevron-right"></i></a>
  </span>
</div>
<!-- CONTAINER -->
<div class="container">
  <!-- CONTENT -->
  <div class="content">
    <div class="detail">
      <div class="detail__box">
        <div class="detail__name">Liên hệ với chúng tôi</div>
        <div class="cart">
          <form action="submit_contact.php" method="POST">

            <p class="acc__title">Tên</p>
            <div class="input-container">
              <input autofocus placeholder="Nhập tên" class="input-field" id="name" name="name" required>
              <span class="input-highlight"></span>
            </div>

            <p class="acc__title">Email</p>
            <div class="input-container">
              <input placeholder="Nhập email" class="input-field" type="email" id="email" name="email" required>
              <span class="input-highlight"></span>
            </div>

            <p class="acc__title">Chủ đề</p>
            <div class="input-container">
              <input placeholder="Nhập chủ đề" class="input-field" type="text" id="subject" name="subject" required>
              <span class="input-highlight"></span>
            </div>

            <p style="margin-bottom: 10px;" class="acc__title">Nội dung</p>
            <div class="sub__content__title input-container">
              <textarea placeholder="Nhập phản hồi" id="message" name="message" rows="5" required></textarea>
            </div>


            <div class="acc__button">
              <input style="margin-right: 0px" class="button--add" type="submit" class="form-button" value="Gửi"></input>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  <!-- SIDEBAR -->
  <div class="sidebar">
    <?php include "view/sidebar.php"; ?>
  </div>
</div>