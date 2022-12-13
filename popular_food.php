<?php
//เชื่อมต่อฐานข้อมูล
	include_once("connect.php");mysqli_query($condb, "SET NAMES 'utf8' ");
 // คิวรี่ข้อมูลจากตาราง
$query = "SELECT product_type, SUM(amount) as total FROM tbl_sales GROUP BY product_type";
$result = mysqli_query($conn, $query);

    //นำข้อมูลที่ได้จากคิวรี่มากำหนดรูปแบบข้อมุลให้ถูกโครงสร้างของกราฟที่ใช้ *อ่าน docs เพิ่มเติม
    $datax = array();
    foreach ($result as $k) {
      $datax[] = "['".$k['product_type']."'".", ".$k['total']."]";
    }

    //cut last commar
    $datax = implode(",", $datax);
    //แสดงข้อมูลก่อนนำไปแสดงบนกราฟ
  //ถ้าอยากเอาออก ก็ใส่ double slash ข้างหน้าครับ
?>
<br>
<html>
  <head>
    <!-- เรียก js มาใช้งาน -->
    <center>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Summary per product_type'],
          <?php echo $datax;?>
        ]);

        var options = {
          title: 'SALES REPORT'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
