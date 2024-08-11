<div class="content">
    <div class="content__title">Biểu đồ</div>
    <div class="sub__content">
        <div class="sub__content__table">
            <div class="sanpham__table" id="chart_div"></div>
            <div class="sanpham__table" id="chart_div2"></div>
            <div class="sanpham__table" id="chart_div3"></div>
            <div class="sanpham__table" id="chart_div4"></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {
                    'packages': ['corechart']
                });
                google.charts.setOnLoadCallback(drawChart);
                google.charts.setOnLoadCallback(drawChart2);
                google.charts.setOnLoadCallback(drawChart3);
                google.charts.setOnLoadCallback(drawChart4);

                // Draw the first chart
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Danh mục', 'Số lượng sản phẩm'],
                        <?php
                        $tongdm = count($listthongke);
                        $i = 1;
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            if ($i == $tongdm) $dauphay = "";
                            else $dauphay = ",";
                            echo "['" . $thongke['tendm'] . "', " . $thongke['countsp'] . "]" . $dauphay;
                            $i += 1;
                        }
                        ?>
                    ]);

                    var options = {
                        title: 'Thống kê sản phẩm theo danh mục',
                        width: 915,
                        height: 600,
                        bar: { groupWidth: '75%' },
                        legend: { position: 'none' },
                        hAxis: {
                            title: 'Danh mục'
                        },
                        vAxis: {
                            title: 'Số lượng sản phẩm'
                        }
                    };

                    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
                    chart.draw(data, options);
                }

                // Draw the second chart
                function drawChart2() {
                    var data = google.visualization.arrayToDataTable([
                        ['Danh mục', 'Giá trung bình'],
                        <?php
                        $tongdm = count($listthongke);
                        $i = 1;
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            if ($i == $tongdm) $dauphay = "";
                            else $dauphay = ",";
                            echo "['" . $thongke['tendm'] . "', " . $thongke['avgprice'] . "]" . $dauphay;
                            $i += 1;
                        }
                        ?>
                    ]);

                    var options = {
                        title: 'Thống kê giá trung bình theo danh mục ($)',
                        width: 915,
                        height: 600,
                        bar: { groupWidth: '75%' },
                        legend: { position: 'none' },
                        hAxis: {
                            title: 'Danh mục'
                        },
                        vAxis: {
                            title: 'Giá trung bình'
                        }
                    };

                    var chart2 = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
                    chart2.draw(data, options);
                }

                // Draw the third chart
                function drawChart3() {
                    var data = google.visualization.arrayToDataTable([
                        ['Sản phẩm', 'Số lần xem'],
                        <?php
                        $tongspx = count($luotxemsp);
                        $i = 1;
                        foreach ($luotxemsp as $sp) {
                            extract($sp);
                            if ($i == $tongspx) $dauphay = "";
                            else $dauphay = ",";
                            echo "['" . $sp['name'] . "', " . $sp['luotxem'] . "]" . $dauphay;
                            $i += 1;
                        }
                        ?>
                    ]);

                    var options = {
                        title: 'Thống kê lượt xem theo sản phẩm',
                        width: 915,
                        height: 600,
                        bar: { groupWidth: '75%' },
                        legend: { position: 'none' },
                        hAxis: {
                            title: 'Sản phẩm'
                        },
                        vAxis: {
                            title: 'Số lần xem'
                        }
                    };

                    var chart3 = new google.visualization.ColumnChart(document.getElementById('chart_div3'));
                    chart3.draw(data, options);
                }

                // Draw the fourth chart
                function drawChart4() {
                    var data = google.visualization.arrayToDataTable([
                        ['Sản phẩm', 'Số lượng'],
                        <?php
                        $tongspm = count($listcart);
                        $i = 1;
                        foreach ($listcart as $sp) {
                            extract($sp);
                            if ($i == $tongspm) $dauphay = "";
                            else $dauphay = ",";
                            echo "['" . $sp['name'] . "', " . $sp['soluong'] . "]" . $dauphay;
                            $i += 1;
                        }
                        ?>
                    ]);

                    var options = {
                        title: 'Thống kê số lượng sản phẩm được mua',
                        width: 915,
                        height: 600,
                        bar: { groupWidth: '75%' },
                        legend: { position: 'none' },
                        hAxis: {
                            title: 'Sản phẩm'
                        },
                        vAxis: {
                            title: 'Số lượng'
                        }
                    };

                    var chart4 = new google.visualization.ColumnChart(document.getElementById('chart_div4'));
                    chart4.draw(data, options);
                }   
            </script>
        </div>
    </div>
</div>
