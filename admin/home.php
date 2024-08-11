<div class="content">
  <div class="content__title">Trang chủ</div>
  <div class="sub__content">
    <div class="home">

      <div class="block block__1">
        <p class="block__title">Top khách hàng</p>
        <div class="block__shadow block__1__customer">
          <div class="block__1__customer__content">
            <img src="/public/img/admin/cena.webp">
            <p>John Cena</p>
            <span>China</span>
            <div>$ 15.000</div>
          </div>
          <div class="block__1__customer__content">
            <img src="/public/img/admin/milos.jpg">
            <p>Ricardo Milos</p>
            <span>Brazil</span>
            <div>$ 69.000</div>
          </div>
          <div class="block__1__customer__content">
            <img src="/public/img/admin/xavier.jpg">
            <p>Xavier</p>
            <span>India</span>
            <div>$ 9.000</div>
          </div>
        </div>
      </div>

      <div class="block block__2">
        <p class="block__title">Top doanh thu</p>
        <div class="block__shadow block__2__revenue">
          <div class="revenue revenue--all">
            <p>Tất cả</p>
            <span>$ 212.380.000</span>
            <i class="fa-solid fa-money-check-dollar"></i>
          </div>
          <div class="revenue revenue--today">
            <p>Hôm nay</p>
            <span>$ 592.000</span>
            <i class="fa-solid fa-money-check-dollar"></i>
          </div>
        </div>
      </div>

      <div class="block block__3">
        <p class="block__title">Thị trường</p>
        <div class="block__shadow block__3__new">
          <div id="regions_div"></div>

          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
            google.charts.load('current', {
              'packages': ['geochart'],
            });
            google.charts.setOnLoadCallback(drawRegionsMap);

            function drawRegionsMap() {
              var data = google.visualization.arrayToDataTable([
                ['Country', 'Popularity'],
                ['Vietnam', 1000],
                ['Germany', 200],
                ['United States', 300],
                ['Brazil', 1000],
                ['China', 500],
                ['France', 600],
                ['RU', 700],
                ['India', 1000]
              ]);

              var options = {
                colorAxis: {
                  colors: ['#dfe3ee', '#8b9dc3'] // Thay đổi màu sắc theo ý muốn
                }
              };

              var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

              chart.draw(data, options);
            }
          </script>
        </div>
      </div>

      <div class="block block__4">
        <p class="block__title">Đăng tin</p>
        <div class="block__shadow block__4__post">
          <input autofocus type="text" placeholder="Nhập tiêu đề">
          <input type="text" placeholder="Nhập danh mục">
          <textarea placeholder="Nhập nội dung"></textarea>
          <button>Post</button>
        </div>
      </div>
    </div>
  </div>
</div>