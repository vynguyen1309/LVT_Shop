<!-- <div class="row">
    <div id="columnchart"  ></div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        //load gg charts
        google.charts.load('current',{'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        //draw the charts and set the chart values
        function drawChart(){
            var data = google.visualization.arrayToDataTable([
                ['Danh mục', 'Doanh thu'],
                
            ]);

            var option = {'title': 'Thống kê doanh thu theo loại sản phẩm', 'width':800, 'height':640};

            var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
            chart.draw(data, option);    
        }
    </script>
</div> -->


<div class=" row">
<div class="row header frmtitle mb">
    <h1>BIỂU ĐỒ THỐNG KÊ DOANH THU</h1>
</div>
   <div class="row frmcontent">
   <div id="columnchart"  ></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    //load gg charts
    google.charts.load('current',{'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    //draw the charts and set the chart values
    function drawChart(){
        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Doanh thu'],
            <?php
               $tongdt=count($doanhthu);
               $i=1;
               foreach ($doanhthu as $doanhthu){
                extract($doanhthu);
                if($i==$tongdt) $dauphay=""; else $dauphay=",";
                echo "['".$doanhthu['madh']."',".$doanhthu['total_revenue']."]".$dauphay;
                $i+=1;
               }
            ?>
        ]);

        var option = {'title': 'Thống kê doanh thu theo mã đơn hàng', 'width':800, 'height':640};

        var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
        chart.draw(data, option);    
    }
</script>
    <a href="index_admin.php?act=doanh_thu"><button type="submit" >Quay lại</button></a>
  </div>
 </div>




