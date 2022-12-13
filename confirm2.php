<?php

session_start();


// echo '<pre>';
// print_r($_SESSION);
//
// echo '</pre>';
// echo '</pre>';

?>

<!-- //*************/ -->
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
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shopping Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<style>
	body {
		background: url(https://www.beautyppt.com/uploads/data/32269/wzZzVzatLTx4Z522.jpg) no-repeat center;
		background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100% 100%;
	}
  table {
       border: 5px solid brown;   //ขนาดเส้นขอบ รูปแบบของเส้น  สีของเส้น
  }
</style>
<form id="frmcart" name="frmcart" method="post" action="123.php">


	<div class="container">
	  <center><h2>ยืนยันการสั่งซื้อ</h2></center>

	  <p>
	    <div class="table-responsive">
	        <table class="table table-bordered">
	            <thead>
								<center>
	           <th  width=2%>  #</th>
		        <th width=2%> รูป</th>
	         <th width=5%> สินค้า</th>
	         <th width=5%> ราคา</th>
	         <th width=1%> จำนวน </th>
	          <th width=5%> รวม(บาท)</th>



		<!-- //*************/ -->
<?php
$total=0;
if(!empty($_SESSION['cart']))
{
	include("connect.php");
	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql = "SELECT * FROM  product WHERE p_id=$p_id";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		$sum = $row['p_price'] * $qty;
		$total += $sum;
		echo "<tr>";
		echo "<td width='5'>" . @$i+=1 . "</td>";
		echo "<td align='center'><img src='img/" . $row["p_pic"] ." ' width='100' hight='120'></td>";
		echo "<td align='center' >" . $row["p_name"] . "</td>";
		echo "<td  align='center'>" .number_format($row["p_price"],2) . "</td>";

		echo "<td  align='center'>";
		echo "<input type='number' name='amount[$p_id]' value='$qty' class='form-control' readonly/></td>";
		echo "<td  align='center'>".number_format($sum,2)."</td>";
		//remove product

		echo "</tr>";
	}
	echo "<tr>";
  	echo "<td colspan='5' bgcolor='#CEE7FF' align='left'>รวมทั้ง</td>";
  	echo "<td align='center' bgcolor='#CEE7FF'>";
  	echo "<b>";
  	echo  number_format($total,2);
  	echo "</b>";
  	echo "</td>";

	echo "</tr>";
}

?>
</table>
                <h3>รายละเอียดการจัดสั่ง</h3>

                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">ชื่อ-นามสกุล</label>
                  <input type="text" class="form-control" id="inputname" name="name" value="<?php echo $_SESSION['User'];?>">
                </div>
                <div class="form-group">
                <label for="inputAddress">ที่อยู่</label>
                <input type="text" class="form-control" id="inputAddress" name="address"value="<?php echo $_SESSION['address'];?>">
                </div>

                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCity">Email</label>
                  <input type="Email" class="form-control" id="inputEmail4" name="email"value="<?php echo $_SESSION['email'];?>">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState">เบอร์โทรศัพท์</label>
                <input type="text" class="form-control" id="inputCity" name="phone"value="<?php echo $_SESSION['phone'];?>">
                </div>

                </div>
<a align="center"> <a href="Page2.php" class="btn btn-primary">กลับไปเลือกสินค้า</a>
                  <input type="hidden" name="total" value="<?php echo $total;?>">
                <button type="submit" class="btn btn-success">สั่งซื่อสินค้า</button>
                <center><div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">ชำระปลายทาง</label>
  </div>
      </form>
    </div>
    </div>
  </div>
</div>
</body>
</html>
<center>
  <!DOCTYPE html>
  <html>
      <head>
          <meta charset="utf-8" />
          <title>ทดสอบ geolocation + google map</title>
          <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />

          <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
          <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
          <!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
 type="text/javascript"></script> -->
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
