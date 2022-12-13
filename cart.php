<?php
error_reporting( error_reporting() & ~E_NOTICE );
session_start();

// echo '<pre>';
// print_r($_SESSION);
//
// echo '</pre>';
// echo '</pre>';
	@$p_id = $_GET['p_id'];
	@$act = $_GET['act'];

	if($act=='add' && !empty($p_id))
	{
		if(isset($_SESSION['cart'][$p_id]))
		{
			$_SESSION['cart'][$p_id]++;
		}
		else
		{
			$_SESSION['cart'][$p_id]=1;
		}
	}

	if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['cart'][$p_id]);
	}

	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $p_id=>$amount)
		{
			$_SESSION['cart'][$p_id]=$amount;
		}
	}
	////ยกเลิกสั่งซื้อ
	if($act=='cancel')  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['cart']);
	}

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
	<body><!DOCTYPE html>
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
		background: url(https://www.homeppt.com/uploads/data/32294/umKyJXGUni4qtYfC.jpg) no-repeat center;
		background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100% 100%;

}
</style>
<form id="frmcart" name="frmcart" method="post" action="?act=update">


	<div class="container">
	  <b><center><h2>รายละเอียดคำสั่งซื้อ</h2></center></b>
<a align="center"> <a href="Page2.php" class="btn btn-primary">กลับไปเลือกสินค้า</a>
	  <p>

	    <div class="table-responsive">
				<!-- <table width="200" border="2" cellspacing="0" bordercolor="red" > -->

	        <table class="table table-bordered">
	            <thead>
								<center>
	           <th  width=2%>  #</th>
		        <th width=2%> รูป</th>
	         <th width=5%> สินค้า</th>
	         <th width=5%> ราคา</th>
	         <th width=15%> จำนวน </th>
	          <th width=5%> รวม(บาท)</th>
						<th width=1%> ลบ</th>


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
		echo "<input type='number' name='amount[$p_id]' value='$qty' class='form-control' min='1'/></td>";
		echo "<td  align='center'>".number_format($sum,2)."</td>";
		//remove product
		echo "<td  align='center'>";
		echo "<a href='cart.php?p_id=$p_id&act=remove'class='btn btn-danger btn-sm'><span class='glyphicon glyphicon-trash'> </span>ลบ</a></td>";
		echo "</tr>";
	}
	echo "<tr>";
  	echo "<td colspan='5' bgcolor='#CEE7FF' align='left'>รวมทั้ง</td>";
  	echo "<td align='center' bgcolor='#CEE7FF'>";
  	echo "<b>";
  	echo  number_format($total,2);
  	echo "</b>";
  	echo "</td>";
  	echo "<td align='center' bgcolor='#CEE7FF'></td>";
	echo "</tr>";
}
?>
 <?php if ($total > 0) { ?>


<tr>

          <td colspan="7" align="right">

						<button type="button" name="btucancel"  class="btn btn-danger"  onclick="window.location='cart.php?act=cancel'"/>
            <span class="glyphicon glyphicon-circle-arrow-left"> </span> ยกเลิกการสั่งซื้อ </button>
          <button type="submit" name="button" id="button" class="btn btn-warning">  <span class="glyphicon glyphicon-refresh"> </span>  คำนวณราคาใหม่ </button>
            <button type="button" name="Submit2"  class='btn btn-success' onclick="window.location='confirm2.php';"/>
            <span class="glyphicon glyphicon-shopping-cart"></span> สั่งซื้อ </button>
            </td>

        </tr>
				    </form>
							</table>
			<?php } else { ?>
					<div class="alert alert-danger" role="alert" style="margin:15px;">
							<center>------ไม่มีเมนูในตะกร้า กรุณาเลือกรายการใหม่อีกครั้ง---------
							<a href="<?php echo base_url(); ?>Page2.php" class="alert-link">คลิกที่นี้</a>
					</div>
			<?php } ?>

			<body>


				<img src="daffy.gif"ALIGN = "MIDDLE" width="150" height="151"> &nbsp;
			 <img src="kerokero.gif" ALIGN = "MIDDLE" width="150" height="153">
			 <img src="daffy.gif"ALIGN = "MIDDLE" width="150" height="151"> &nbsp;
			 <img src="kerokero.gif" ALIGN = "MIDDLE" width="150" height="153">
			 <img src="daffy.gif"ALIGN = "MIDDLE" width="150" height="151"> &nbsp;
			 <img src="kerokero.gif" ALIGN = "MIDDLE" width="150" height="153">
			 <img src="daffy.gif"ALIGN = "MIDDLE" width="150" height="151"> &nbsp;
			      </body>
			</html>


    </div>
  </div>
</div>
</body>
</html>
