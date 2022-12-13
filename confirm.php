<?php
	session_start();
	date_default_timezone_set("Asia/Bangkok");
	$date = date("y-m-d");
	echo "<br>";
    include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Free  Template by devbanban.com</title>

<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<style type="text/css">
#btn{
	width:25%;
}

</style>
</head>
<body>
	<style>
 	body {
 		background: url(https://png.pngtree.com/thumb_back/fh260/background/20190718/pngtree-vector-background-with-abstract-geometric-design-of-white-circle-image_283904.jpg) no-repeat center;
 		background-size: cover;
 	background-repeat: no-repeat;
 	background-attachment: fixed;
 	background-size: 100% 100%;
 	}
 </style>

<style type="text/css">
@media print {
	#hid{
		display: none;
	}

}

</style>


<body>
<center>

<form id="frmcart" name="frmcart" method="post" action="123.php">

	<div class="container">

  <h2>รายการสั่งซื้อ</h2>
	<div class="form-group">
		<div class="container" id="hid" >
		<div class="col-sm-12" align="left">
		<a class="btn btn-outline-primary" href="Page2.php" role="button">กลับไปหน้ารายการสินค้า</a>
		<right><input type = "button" class="btn btn-primary" name = "print" value = "print" onclick = "window.print()"></button></right>
	</div>
		</div>
	<div class="container">
    <table class="table">
      <table class="table table-bordered">
        <tr>
  <th>ลำดับ</th>
	<th>รูป</th>
          <th>สินค้า</th>
          <th>ราคา</th>
          <th>จำนวน</th>
					<th>รวม/รายการ</th>

        </tr>
</tbody>
<?php
	$total=0;
	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql	= "select * from product where p_id=$p_id";
		$query	= mysqli_query($conn, $sql);
		$row	= mysqli_fetch_array($query);
		$sum	= $row['p_price']*$qty;
		$total	+= $sum;
		echo "<tr>";
			echo "<td width='5'>" . @$i+=1 . "</td>";
			echo "<td align='center'><img src='img/" . $row["p_pic"] ." ' width='250' hight='170'></td>";
    echo "<td>" . $row["p_name"] . "</td>";
    echo "<td align='left'>" .number_format($row['p_price'],2) ."</td>";
    echo "<td align='left'>$qty</td>";
    echo "<td align='left'>".number_format($sum,2)."</td>";
    echo "</tr>";
	}
	echo "<tr>";
    echo "<td  align='left' colspan='3' bgcolor='#F9D5E3'><b>รวม</b></td>";
    echo "<td align='left' bgcolor='#F9D5E3'>"."<b>".number_format($total,2)."</b>"."</td>";
    echo "</tr>";
?>

</tbody>
</table>
</div>

<p>

<div class="container" id="hid" >

	<div class="container" style="padding-top:70">

	  <div class="row">
	  <div class="col-md-4"></div>
	    <div class="col-md-5" style="background-color:#f4f4f4">
	      <h3 align="center" style="color:green">
	      <span class="glyphicon glyphicon-shopping-cart"> </span>
	         confirm cart </h3>
	      <form  name="formlogin" action="" method="POST" id="login" class="form-horizontal">
	        <div class="form-group">
	          <div class="col-sm-12">


			</p>

	</div>
	<div class="form-group">
		<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
	<!--start footer-->

	<!--end footer-->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	</body>
	</html>


</div>
</td>
</tr>
</table>
</form>
</body>
</html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>ทดสอบ geolocation + google map</title>
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    </head>
    <body>
            ตำแหน่งของฉัน:
        <div id="geo_data"></div>
        <div id="map_canvas" style="background: #f5f5f5; height:300px; width: 300px;"></div>

        <script type="text/javascript">
        var initialLocation;
            var bangkok = new google.maps.LatLng(13.755716, 100.501589);
            function initialize() {
                var myOptions = {
                    zoom: 15,
                    //center: latlng,
                    mapTypeControl: false,
                    navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("map_canvas"),
                myOptions);

                // detect geolocation lat/lng
                if ( navigator.geolocation ) {
                    navigator.geolocation.getCurrentPosition(function(location) {
                        var location = location.coords;
                        $("#geo_data").html('lat: '+location.latitude+'<br />long: '+location.longitude);
                        initialLocation = new google.maps.LatLng(location.latitude, location.longitude);
                        map.setCenter(initialLocation);
                        setMarker(initialLocation);
                    }, function() {
                        handleNoGeolocation();
                    });
                } else {
                    handleNoGeolocation();
                }

                // no geolocation
                function handleNoGeolocation() {
                    map.setCenter(bangkok);
                    setMarker(bangkok);
                    $("#geo_data").html('lat: 13.755716<br />long: 100.501589');
                }

                // set marker
                function setMarker(initialName) {
                    var marker = new google.maps.Marker({
                        draggable: true,
                        position: initialName,
                        map: map,
                        title: "คุณอยู่ที่นี่."
                    });
                    google.maps.event.addListener(marker, 'dragend', function(event) {
                        $("#geo_data").html('lat: '+marker.getPosition().lat()+'<br />long: '+marker.getPosition().lng());
                    });
                }
            }

            $(document).ready(function() {
                initialize();
            });
        </script>
    </body>
</html>
