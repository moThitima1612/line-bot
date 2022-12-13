<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>

		<title>Simple Loader</title>

		<style>
		.content {display:none;}
		.preload { width:100px;
			height: 200px;
			position: fixed;
			top: 30%;
			left: 45%;
		}
		</style>
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script>
		$(function() {
			$(".preload").fadeOut(2000,
		function() {
			$(".content").fadeIn(1000);
		});
		});
		</script>

	</head>
	<body>
		<div class="preload"><img src="images/loader-128x/Preloader_3.gif"></div>
		<div class="content">
<?php include ("connect.php");

    $search=isset($_POST['search']) ? $_POST['search']:'';
    $sql="SELECT * FROM  product WHERE `p_id` LIKE '%$search%'";
    $resual = mysqli_query($conn, $sql);
 ?>

 <?php session_start();?>
 <?php

 if (!$_SESSION["UserID"]){

     Header("Location: 11.php");

 }else{?>

 	<!-- Header("Location: logout.php");
 	exit();
 }

 ?> -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <!-- Theme Made By www.w3schools.com - No Copyright -->
   <title>Member</title>
   <meta charset="utf-8">

   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   <style>
    body {
			background: url(https://png.pngtree.com/thumb_back/fw800/background/20190222/ourmid/pngtree-green-out-of-focus-spot-simple-background-spotsimpledreamfashionbackground-image_54078.jpg) no-repeat center;
	    background-size: cover;
	  background-repeat: no-repeat;
	  background-attachment: fixed;
	  background-size: 100% 100%;

   }
   body {

       font-size: 18px;



     }
		 .PM {
		   background: url(https://cdn.icon-icons.com/icons2/402/PNG/512/trafficlight-green_40427.png) center no-repeat;
		   background-size: 16px 16px;
		   width: 16px;
		   height: 16px;
		   border: none;
		   display:inline-block;

		   animation: blink 0.5s ease-in infinite;
		 }


	 @keyframes blink {
	   from, to { opacity: 1 }
	   50% { opacity: 0 }
	 }
		 table {
		      border: 2px solid brown;   //ขนาดเส้นขอบ รูปแบบของเส้น  สีของเส้น
		 }

   .item h4 {
     font-size: 19%;
     line-height: 1.375em;
     font-weight: 400;
     font-style: italic;
     margin: 70% 0;
   }
   .item span {
     font-style: normal;
   }
   .panel {
     border: 1px solid #f4511e;
     border-radius:0 !important;
     transition: box-shadow 0.5s;
   }
   .panel:hover {
     box-shadow: 5px 0px 40px rgba(0,0,0, .2);
   }
   .panel-footer .btn:hover {
     border: 1px solid #f4511e;
     background-color: #fff !important;
     color: #f4511e;
   }
   .panel-heading {
     color: #fff !important;
     background-color: #f4511e !important;
     padding: 25px;
     border-bottom: 1px solid transparent;
     border-top-left-radius: 0px;
     border-top-right-radius: 0px;
     border-bottom-left-radius: 0px;
     border-bottom-right-radius: 0px;
   }
   .panel-footer {
     background-color: white !important;
   }
   .panel-footer h3 {
     font-size: 32px;
   }
   .panel-footer h4 {
     color: #aaa;
     font-size: 14px;
   }
   .panel-footer .btn {
     margin: 15px 0;
     background-color: #f4511e;
     color: #fff;
   }
   .navbar {
     margin-bottom: 0;
     background-color: #f4511e;
     z-index: 9999;
     border: 0;
     font-size: 12px !important;
     line-height: 1.42857143 !important;
     letter-spacing: 4px;
     border-radius: 0;
   }
   .navbar li a, .navbar .navbar-brand {
     color: #fff !important;
   }
   .navbar-nav li a:hover, .navbar-nav li.active a {
     color: #f4511e !important;
     background-color: #fff !important;
   }
   .navbar-default .navbar-toggle {
     border-color: transparent;
     color: #fff !important;
   }
   @media screen and (max-width: 768%) {
     .col-sm-4 {
       text-align: center;
       margin: 25% 0;
			 table {
			      border: 2px solid brown;   //ขนาดเส้นขอบ รูปแบบของเส้น  สีของเส้น
			 }
     }
   } */
   </style>
 </head>
 <body>

 <nav class="navbar navbar-default navbar-fixed-top">
   <div class="container">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>

     </div>

   </div>
 </nav>
 <!DOCTYPE html>
 <html>
 <head>
 <title>
 CSChatThaiUI
	- Web font preview
 </title>
 <style type='text/css'>

 @font-face {
	 font-family: 'Lulu';
	 src: url('Lulu.eot?#iefix') format('embedded-opentype'),  url('Lulu.woff') format('woff'), url('Lulu.ttf')  format('truetype'), url('Lulu.svg#CSChatThaiUI') format('svg');
	 font-weight: normal;
	 font-size:350%;
	 font-style: normal;
 }

 body { font-family: 'LUla' !important; }

 </style>
 </head>
 <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>


      </ul>
    </div>

    <font size=4>  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cart.php?"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
       <li><a href="logout.php" class="glyphicon glyphicon-shopping-danger" onclick="return confirm('ยืนยันการออกจากระบบ');">ออกจากระบบ</a></li>
      </ul>
    	<img src="img/818.png" class="img-circle " width="60" height="50" alt="Cinque Terre">
     <?php echo ($_SESSION['User']);?><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สถานะ:สมาชิก  &nbsp;<img src="img/5.png" class="img-circle PM " width="60" height="50" alt="Cinque Terre"></h3>
    </div>
  </div>
</nav>

<html lang="en">
 <head>

<!-- ************************************ -->
<div class="container">
  <div class="row">



<table  class="table table-striped  mt-2">
<thead>
  <tr>


  </tr>
<tr align = 'right';>
 <th width="20%">เมนู</th>
    <th width="30%">ราคา</th>
       <th width="40%">ภาพเมนู</th>

   </thead>
<?php
 //connect db
 include("connect.php");
 $sql = "SELECT * FROM product order by p_id";  //เรียกข้อมูลมาแสดงทั้งหมด
 $result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_array($result))

{



  echo "<td align='left'>" . $row["p_name"] . "</td>";

    echo "<td align='left'>" .number_format($row["p_price"],2). "</td>";

   echo "<td align='left'><img src='img/" . $row["p_pic"] ." ' width='200' high='250'></td>";

    echo "<td><a  class='btn btn-primary btn-lg' href='product_detail.php?id=$row[p_id]'role='button'>
  <span class='glyphicon glyphicon-shopping-cart'></span>สั่งซื้อ</a></a></td>";




           echo "</tr>";
            }
             ?>
           </ul>

 </tr>
           </div>
         </div>
         <div class="col-sm-10"></div>
         </div>
         </div>
       </div>
         </body>
         </html>

         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
         </body>
         </html>
       </table>
<?php }?>
