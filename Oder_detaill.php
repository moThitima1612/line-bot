<?php
	include("connect.php");

$o_id =$_GET['o_id'];
  $querycartdetaill =
  "SELECT d.*,p_pic,p.p_name,p.p_price,h.*
     FROM  order_detail as d
     INNER join  order_head as h ON d.o_id = h.o_id
     INNER join  product as p ON d.p_id = p.p_id
      WHERE d.o_id=$o_id";
    $rscartdetaill= mysqli_query($conn,$querycartdetaill );
    $rowdetaill = mysqli_fetch_array($rscartdetaill);

?>

<!-- //*************/ -->
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
	<!-- <style>
	body {
		background: url(https://images.pexels.com/photos/1410229/pexels-photo-1410229.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260) no-repeat center;
		background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100% 100%;
	}
</style> -->


	<div class="container">

	  <center><h2>รายละเอียดการสั่งซื้อ</h2></center>
    <h5>
      oderid:<?php echo    $rowdetaill ['o_id'] ; ?><br>
      ส่งไปที่:<?php echo    $rowdetaill ['o_name'] ; ?><br>
              <?php echo    $rowdetaill ['o_addr'] ; ?><br>
      เบอร์โทรศัพท์:<?php echo $rowdetaill ['o_phone'] ; ?><br>
       Email:<?php echo    $rowdetaill ['o_email'] ; ?><br>
       วันที่สั่งซื้อ:<?php echo    $rowdetaill ['o_dttm'] ; ?><br>

        สถานะ:<?php
        $st =$rowdetaill ['o_status'] ;
        echo '<font color ="blue">';
          //1 = รอชำระเงิน 2 = ชำระเงินแล้ว 3 = ยกเลิก
          if($st==1){
            echo 'รอชำระเงิน';
          }elseif($st==2){
              echo '<font color ="Orage">';
              echo 'ชำระเงินแล้ว';
            }elseif($st==3){
              echo '<font color ="red">';
                echo 'ยกเลิก';
          }
          echo '</font>';
        ?>
				<br>
			<h6 align = 'left'>   วิธีการชำระเงิน:เก็บเงินปลายทาง<br	></h6>
</h5>
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
    // $querycartdetaill = "SELECT d.*,p_pic,p.p_name,p.p_price,h.*
    //  FROM  order_detail as d
    //  INNER join  order_head as h ON d.o_id = o.p_id
    //  INNER join  product as p ON d.p_id = p.p_id
    //   WHERE d.o_id=1";
    // $rscartdetaill= mysqli_query($conn,$querycartdetaill );
    // $rowdetaill = mysqli_fetch_array($rscartdetaill);
    $total=0;



    	foreach($rscartdetaill as $row){

$total +=$row["d_subtotal"];
    		echo "<tr>";
    		echo "<td width='5'>" . @$i+=1 . "</td>";
    		echo "<td align='center'><img src='img/" . $row["p_pic"] ." ' width='100' hight='120'></td>";
    		echo "<td align='center' >" . $row["p_name"] . "</td>";
    		echo "<td  align='center'>" .number_format($row["p_price"],2) . "</td>";

    		echo "<td  align='center'>" .number_format($row["d_qty"],2) . "</td>";
    		echo "<td  align='center'>".number_format($row["d_subtotal"],2)."</td>";
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


?>
</table>
<td><a href="Page2.php" class="btn btn-primary">ยืนยัน</a></th>
      </form>

    </div>
  </div>
</div>
</body>
</html>
