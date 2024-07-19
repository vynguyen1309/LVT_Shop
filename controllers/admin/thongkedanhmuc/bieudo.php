<div class=" row">
<div class="row header frmtitle mb">
    <h1>BIỂU ĐỒ THỐNG KÊ SẢN PHẨM THEO DANH MỤC</h1>
</div>
   <div class="row frmcontent">
     <div id="piechart"></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Số lượng sản phẩm'],
                <?php
                $tongdm = count($listthongke);
                $i=1;
                foreach ($listthongke as $thongke) {
                    extract($thongke);
                    if ($i == $tongdm) $dauphay = "";
                    else $dauphay = ",";
                    echo "['" . $thongke['tendm'] . "', " . $thongke['countsp'] . "]" . $dauphay;
                    $i+=1;
                }
                ?>
            ]);

            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': '',
                'width': 800,
                'height': 500
            };

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
    <a href="index_admin.php?act=thongke"><button type="submit" >Quay lại</button></a>
  </div>
 </div>

