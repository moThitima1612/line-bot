<?php include ("navbar.php"); ?>
<?php include ("connect.php");
        $search=isset($_POST['search']) ? $_POST['search']:'';
        if (isset($_POST['btnsearch'])) {
        $sql="SELECT order_detail.p_id,order_detail.o_id,order_detail.d_qty,order_detail.d_subtotal,tbl_member.Member_id,tbl_member.m_name, FROM `tbl_member`

        inner JOIN `order_detail` ON tbl_member.Member_id=order_detail.d_id
     WHERE tbl_member.Member_id LIKE '%$search%'";
          $resual = mysqli_query($conn, $sql);

        }else {
        $sql="SELECT order_detail.p_id, order_detail.o_id,order_detail.d_qty,order_detail.d_subtotal,tbl_member.Member_id,tbl_member.m_name  FROM `tbl_member`
          inner JOIN `order_detail` ON tbl_member.Member_id=order_detail.d_id";
          $resual = mysqli_query($conn, $sql);
        }

        //
        // ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

  </head>



  <div class="row">
    <div class="col-md-3 offset-md-9 mt-3">
    </div>
  </div>
  <div class="container "align ='center';>
  <div class="row mt-5">
    <div class="col-md-3 offset-md-9 mt-3">
    <form class="form-inline mb-3" enctype="multipart/form-data" action="Oder1.php"  method="post">
    <div class="input-group mr-2" style="width:272px;">
      <div class="input-group-prepend">
        <div class="input-group-text">ค้นหา</div>
      </div >
      <input type="text" name="search" id="search" class="form-control" value="">

     <button type="submit" name="btnsearch" class="btn btn-info">ตกลง</button>
     </div>
   </div>
 </div>
   </form>
<!-- ************************************ -->
<table  class="table table-bordered table-striped" id="example" >
 <thead class="thead-light">
 <tr align = 'center'; >

          <th width="22%">รหัสการสั่งซื้อ</th>
          <th width="15%">ชื่อลูกค้า</th>

          <th width="15%">รหัสเมนู</th>

          <th width="10%">ราคา</th>
<th width="20%">ดูรายการ</th>
<th width="20%">รับออเดอร์</th>

        </tr>
      </thead>
      <?php
                     while($row = mysqli_fetch_array($resual,MYSQLI_ASSOC)){
                  ?>
                    <tr align ='center';>
                      <td><?php echo $row["o_id"]; ?></td>
                      <td><?php echo $row["m_name"]; ?></td>
                      <td><?php echo $row["p_id"]; ?></td>

                       <td><?php echo $row["d_subtotal"]; ?></td>

                       <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-xl">ดูออรเดอร์</button></th>

                      <th> <button type="button" name="button" class="popupbtn btn btn-warning">Oder</button></th>
                 </tr>
               <?php }?>
           </body>
           </div>
           </div>
           </div>
           </div>
           </table>

                   <!-- EDIT -->
                   <!-- EDIT -->

                                 <div class="modal fade" id="popupmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-lg" role="document">
                                 <div class="modal-content">
                                 <div class="modal-header bg-primary" style="color: white;">
                                 <h5 class=" modal-title" id="exampleModalLabel"></h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                                 </div>
                                 <div class="modal-body">
                                 <form method="POST">
                                 <div class="row d-flex justify-content-center">
                                 <div class="col-lg-6">
                                 <div class="form-group">
                                     <label>ชื่อ :</label>
                                     <input type="text" name="id_room" id="id_room" class="form-control" readonly>
                                 </div>
                                 </div>
                                 </div>
                                 <div class="row d-flex justify-content-center">
                                 <div class="col-lg-6">
                                 <div class="form-group">
                                   <label>สถานะ:</label>
                                     <select class="form-control" name="room_stale" id="room_stale">
                                       <option value="กำลังปรุง">รับออเดอร์</option>
                                        <option value="กำลังปรุง">กำลังปรุง</option>
                                       <option value="กำลังไปส่ง">กำลังไปส่ง</option>
                                       <option value="กำลังไปส่ง">ส่งเสร็จแล้ว</option>
                                     </select>
                                 </div>
                                 </div>
                                 </div>
                                 <div class="row d-flex justify-content-center">
                                 <div class="col-lg-6">
                                 <div class="form-group">

                                 </div>
                                 </div>
                                 </div>
                                 <div class="modal-footer">
                                   <button type="submit" name="updatedata" class="btn btn-primary">บันทึก</button>
                                 </div>
                                 </form>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                 </div>
                                   <!-- ########################################################################### -->
                           </body>
                           <script type="text/javascript">
                           $(document).ready(function() {
                                       $('.popupbtn').on('click', function() {
                                           $('#popupmodal').modal('show');
                                             $tr = $(this).closest('tr');
                                             var data = $tr.children("td").map(function() {
                                                 return $(this).text();
                                             }).get();
                                             $('#id_room').val(data[1]);
                                         });
                                     });
                           </script>
                           </html>
                           <?php
                 if(isset($_POST['updatedata'])){
                   $sql="SELECT * FROM `supplies` WHERE `room_number` = '".$_POST['id_room']."'";
                   $resual = mysqli_query($conn, $sql);
                   if (mysqli_num_rows($resual) > 0) {
                     $sql2 = "UPDATE `supplies` SET `supplies_stutus`='".$_POST['room_stale']."',`supplies_date`='".$_POST['date']."' WHERE `room_number` = '".$_POST['id_room']."'";
                   }else {
                     $sql2 = "INSERT INTO `supplies`(`room_number`, `supplies_stutus`, `supplies_date`) VALUES ('".$_POST['id_room']."','".$_POST['room_stale']."','".$_POST['date']."')";
                   }
                   $resual2 = mysqli_query($conn, $sql2);
                   if ($resual2) {
                       echo "
                       <script>
                         window.location = 'supplies.php';
                       </script>";
                   }else {
                       echo "error $sql";
                     }
                   }
                    ?>
                    <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-xl">
                        <div class="modal-content">


                            <?php
                            	include("connect.php");


                              $querycartdetaill =
                              "SELECT d.*,p_pic,p.p_name,p.p_price,h.*
                                 FROM  order_detail as d
                                 INNER join  order_head as h ON d.o_id = h.o_id
                                 INNER join  product as p ON d.p_id = p.p_id
                                  WHERE d.o_id=1";
                                $rscartdetaill= mysqli_query($conn,$querycartdetaill );
                                $rowdetaill = mysqli_fetch_array($rscartdetaill);
                                ?>

                                <!-- //*************/ -->

                                	<style>
                                  body {
                                    background: url(https://u7.uidownload.com/vector/652/828/vector-light-yellow-background-illustration-eps-ai.jpg) no-repeat center;
                                    background-size: cover;
                                  background-repeat: no-repeat;
                                  background-attachment: fixed;
                                  background-size: 100% 100%;
                                  }
                                	.container{


                                    width: 200%;
                                    height: : 200%;



                                	}
                                </style>
                                  <center>

                                	<div class="container">


                                	  <center><h3>ออรเดอร์</h3></center>
                                <img src="img/m.jpg" class="img-circle" width="200" height="150" alt="Cinque Terre">
                                    <h6 align = 'right'>  Order:<?php echo    $rowdetaill ['o_id'] ; ?><br></h6>
                                		<h6 align = 'right'>     วันที่สั่งซื้อ:<?php echo    $rowdetaill ['o_dttm'] ; ?><br></h6>
                                		<h6 align = 'left'>  ส่งไปที่:<?php echo    $rowdetaill ['o_name'] ; ?><br>
                                              <?php echo    $rowdetaill ['o_addr'] ; ?><br></h6>
                                		<h6 align = 'left'>    เบอร์โทรศัพท์:<?php echo $rowdetaill ['o_phone'] ; ?><br></h6>

                                <h6 align = 'left'>    Email:<?php echo    $rowdetaill ['o_email'] ; ?><br	></h6>




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

                                      </form>

                                    </div>
                                  </div>
                                </div>
                                </body>
                                </html>
