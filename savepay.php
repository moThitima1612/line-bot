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
	width:10%;
}

</style>
</head>
<body>
	<style>
 	body {
 		background: url(https://images.pexels.com/photos/1410229/pexels-photo-1410229.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260) no-repeat center;
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
		echo "<td width='334'>" . $row["p_id"] . "</td>";
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
</div>
</div>
<div class="form-check">
  <div class="col-sm-12" align="left">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    ชำระปลาย
  </label>
</div>
<div class="container" id="hid" >
<input type="hidden"  name="total" value="<?php echo "$total";?>" />
<div class="form-group">
<div class="col-sm-12" align="cen">
  <button type="submit" class="btn btn-primary" id="btn">
   ยืนยันการชำระ </button>
</div>
</div>
	          </div>
	        </div>
	      </form>
	    </div>
	  </div>
	</div>

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
