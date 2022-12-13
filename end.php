

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>

  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 {
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 {
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 {
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 {
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
	.margin {
  font-family: "Times New Roman", Times, serif;
font-size: 50px;
color:pink;
}
body {

  font-size: 23px;



}

body * {

  font-size: 94%;

}
  </style>
</head>
<body>

<!-- Navbar -->

<!-- First Container -->
<span class="style1">
<!-- Local Time ---------------------->
<div id="local_time" style="background-color:#FFCC00">&nbsp;</div>
<script language="JavaScript1.2">
<!--

function local_date(now_time) {
    current_local_time = new Date();

    local_time.innerHTML = current_local_time.getDate() + "/" + (current_local_time.getMonth()+1) + "/" + current_local_time.getFullYear() + " &nbsp;" + current_local_time.getHours() + ":" + current_local_time.getMinutes() + ":" +current_local_time.getSeconds();

    setTimeout("local_date()",1000);
}

setTimeout("local_date()",1000);
//-->
</script>
<!-- Local Time ---------------------->
<div class="container-fluid bg-1 text-center">

  <b> <h2 class="margin">House to Café</h2>
	<body>
		<img src="img/m.jpg" class="img-circle" width="300" height="280" alt="Cinque Terre">

	<?php
	echo '<center>';
  //
	date_default_timezone_set("Asia/Bangkok");
  $my=date('d-m-y');

	$datenow = date('H:i');
	//$datenow = '2018-05-30';
	$datestart = '09:00 น.';
	$dateend =   '20:30 น.';
	echo '<br>';
	echo 'วันที่: '.$my;
    	echo '&nbsp;';
	echo 'เวลา: '.$datenow;
	echo '<br />';
	echo '<font color="black">';
	echo 'Open  : '.$datestart;
	echo '<br />';
	echo 'Close  : '.$dateend;
	echo '</font>';
	echo '<br>';
		if($datenow  >= $datestart && $datenow <= $dateend) {
			echo '<font color="green">';
			echo ' <b> Open';
			echo '</font>';
		}else{
			echo '<font color="red">';
			echo'  <b> Close ';
			echo '</font>';
		}
	echo '<br>';


	echo '</h3>';
	echo '</center>';
	?>

</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Welcome to Café	</h3>

</div>

  </a>
</div>

<!-- Third Container (Grid) -->
