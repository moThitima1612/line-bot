<?php session_start();?>
<?php

if (!$_SESSION["UserID"]){  //check session

	

}else{?>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #CD853F;">
	<a class="navbar-brand" href="#"></a>

<font color="#FFFFFF">  <img src="img/818.png" class="img-circle " width="60" height="50" alt="Cinque Terre" align="left"> <h6> <?php echo ($_SESSION['User']);?> สถานะ:แอดมิน &nbsp;<img src="img/5.png" class="img-circle PM" alt="Cinque Terre" > </h6></font>
<br>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mali">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" charset="utf-8"></script>
      <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js" charset="utf-8"></script>
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
				<style>




					.PM {
						background: url() center no-repeat;
						background-size: 15px 15px;
						width: 15px;
						height: 15px;
						border: none;
						display:inline-block;

						animation: blink 1s ease-in infinite;
					}


				@keyframes blink {
					from, to { opacity: 1 }
					50% { opacity: 0 }
				}
					table {
							 border: 2px solid brown;   
					}

					</style>
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
					 src: url('Dosis ExtraBold.eot?#iefix') format('embedded-opentype'),  url('Lulu.woff') format('woff'), url('Lulu.ttf')  format('truetype'), url('Lulu.svg#CSChatThaiUI') format('svg');
					 font-weight: normal;
					 font-size:150%;
					 font-style: normal;
					}

					body { font-family: 'Dosis ExtraBold' !important; }

					</style>
			  		<div class="container">
  			<div class="row">




      <?php //session_destroy();?>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
			<div class="dropdown show">
	<a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"style="color:#A0522D">
	<font size="4">ข้อมูลร้านกาแฟ</font>
	</a>

	<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
	<a class="dropdown-item" href="Basic_information.php"><p style="color:#A0522D">ข้อมูลแอดมิด</p></a>
	<a class="dropdown-item" href="member.php"><p style="color:#A0522D"> ข้อมูลสมาชิก</p></a>
	<a class="dropdown-item" href="product.php"><p style="color:#A0522D">ข้อเมนูอาหาร</p></a>
	<a class="dropdown-item" href="type.php"><p style="color:#A0522D"> ประเภทเมนู</p></a>
	</div>
	</div>

      <li class="nav-item">
        <a class="nav-link" href="Oder1.php"><p style="color:#A0522D"><font size="4">รายการสั่งซื้อ</font><br></p></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="payment.php"><p style="color:#A0522D"><font size="4">ข้อมูลการชำระเงิน</font><br></p></a>
      </li>



      <li class="nav-item">
        <a class="nav-link" href=" Delivery.php"><p style="color:#A0522D"><font size="4">ข้อมูลจัดส่ง</font><br></p></a>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href=" comment.php"><p style="color:#A0522D"><font size="4">แสดงความคิดเห็น</font><br></p></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" 151.php"><p style="color:#A0522D"><font size="4">ข้อมูลยอดขาย</font><br></p></a>
      </li>

		</ul>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
			<ul class="nav navbar-nav navbar-right">
		         <li><a href="logout.php"><span class="btn btn-outline-warning"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 20 20">
					 		<path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
					 	</svg> ออกจากระบบ</a></span></li>

		       </ul>
		     </div>
		   </div>


    </ul>

  </div>
</nav>

		 </ul>
	 </div>
 </div>
<?php }?>
