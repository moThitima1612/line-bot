<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <!-- Bootstrap CSS -->


  </head>

  <style>
  body {


  	background: url(https://u7.uidownload.com/vector/652/828/vector-light-yellow-background-illustration-eps-ai.jpg) no-repeat center;
    background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  }



    </style>
    <p>
    <body>
      <!--start  banner -->


<!-- End Top menu -->
<!-- start slider -->


<!-- start show product detail -->
<body>
  <!DOCTYPE html>
  <html>
  <head>
  <title>
  CSChatThaiUI
  - Web font preview
  </title>
  <style type='text/css'>

  @font-face {
   font-family: 'happy';
   src: url('happy.eot?#iefix') format('embedded-opentype'),  url('happy.woff') format('woff'), url('happy.ttf')  format('truetype'), url('happy.svg#CSChatThaiUI') format('svg');
   font-weight: normal;
   font-size:350%;
   font-style: normal;
  }

  body { font-family: 'happy' !important; }

  </style>
  </head>
  <body>

  <div class="row" align="center">

<div class="container">

    <div class="panel panel-primary">
                 <!-- Default panel contents -->
                 <div class="panel-heading">รายละเอียดเมนู</div>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#CC9999;">





<?php
      include("connect.php");
	$id = $_GET['id']; //สร้างตัวแปร p_id เพื่อรับค่า

	$sql = "SELECT * FROM product WHERE p_id=$id";  //รับค่าตัวแปร p_id ที่ส่งมา
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
  $p_id = $row['p_id'];
$p_view = $row['p_view'];
$count = $p_view + 1;

$sql= "UPDATE product SET  p_view=$count WHERE p_id = $p_id";
mysqli_query($conn, $sql);
//  <p>

     echo "<img src='img/" . $row["p_pic"] ." ' width='300' hight='170'  </td>";


     ?>
<dt>

     <html>
<head>
<title>Thaicreate  PHP Sending Email</title>
</head>
<body>
</p>
<body>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <p>
  <center>


  <h3> <?php echo "<td width='279'>" . $row["p_name"] . "</td>" ?>
</br>
      <font color="blue">

          <p><br> <?php echo"<td>" .number_format($row["p_price"],2) . "</td>"; ?>
        </font>
        บาท


           <?php  echo "<a href='cart.php?p_id=$row[p_id]&act=add' class='btn btn-info'><span class='glyphicon glyphicon-shopping-cart'> </span> เพิ่มลงตะกร้าสินค้า </a></td>";  ?>
      </h3







        <p align="center">จำนวนการรับชม
          <span class="glyphicon glyphicon-eye-open"> </span>
          &nbsp; <span class="badge"><?php echo  $row['p_view']; ?>  </span> &nbsp; ครั้ง
          </p>
          <br>
          <br>
          <br>


                 <!-- อันนี้ต้องสมัครเองนะครับ  -->
                  <p align="right">

                    <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5500ee80057fdb99"></script>

                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
                    <div class="addthis_inline_share_toolbox_r64r"></div>






                          <a align="center"> <a href="Page2.php" class="btn btn-success">กลับไปเลือกสินค้า</a>
                        </td>
                    </tr>
                    </div>
                  </div>
                </div>
