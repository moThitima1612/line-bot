<?php include ("navbar.php"); ?>
<?php include ("connect.php");
        $search=isset($_POST['search']) ? $_POST['search']:'';
        if (isset($_POST['btnsearch'])) {
        $sql="SELECT ,order_head.o_dttm,order_head.o_total,order_head.o_status,order_detail.p_id,order_detail.d_id,order_detail.d_qty,order_detail.d_subtotal,tbl_member.Member_id,tbl_member.m_name FROM `tbl_member`
          inner JOIN `order_head` ON tbl_member.Member_id=order_head.o_id
        inner JOIN `order_detail` ON tbl_member.Member_id=order_detail.d_id
     WHERE order_head.o_status LIKE '%$search%'";
          $resual = mysqli_query($conn, $sql);

        }else {
          $sql="SELECT order_detail.p_id,order_detail.o_id,order_detail.d_qty,order_detail.d_subtotal,tbl_member.Member_id,tbl_member.m_name,order_head.o_dttm,order_head.o_total,order_head.o_status FROM `tbl_member`
            inner JOIN `order_head` ON tbl_member.Member_id=order_head.o_id
          inner JOIN `order_detail` ON tbl_member.Member_id=order_detail.d_id ";
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
  <style>
  body {
    background: url(https://u7.uidownload.com/vector/652/828/vector-light-yellow-background-illustration-eps-ai.jpg) no-repeat center;
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

  <div class="container "align ='center';>
  <div class="row mt-5">
    <div class="col-md-3 offset-md-9 mt-3">
    <form class="form-inline mb-3" enctype="multipart/form-data" action="payment.php"  method="post">
     <div class="input-group mr-2" style="width:272px;">
       <div class="input-group-prepend">
         <div class="input-group-text">ค้นหา</div>
       </div >
       <input type="text" name="search" id="search" class="form-control" value="">

       <div>
       <button type="submit" name="btnsearch" class="btn btn-info">ตกลง</button>
       </div>
     </div>
   </div>
     </form>
        <!-- ************************************ -->
        <table  class="table table-bordered table-striped" id="example" >
          <thead class="thead-light">
          <tr align = 'center'; >
          <th width="17%">รหัสการสั่ง</th>
          <th width="15%">ราคา</th>
          <th width="17%">วันที่ชำระ</th>
            <!-- <th width="17%">สถานะ</th> -->
              <th width="17%">ดูรายการ</th>
              <th width="17%">ชำระเงินแล้ว</th>



        </tr>
      </thead>
      <?php
                     while($row = mysqli_fetch_array($resual,MYSQLI_ASSOC)){
                  ?>
                    <tr align ='center';>

                      <td><?php echo $row["o_id"]; ?></td>
                      <td><?php echo $row["o_total"]; ?></td>
                      <td><?php echo $row["o_dttm"]; ?></td>
                      <!-- <td><?php echo $row["o_status"]; ?></td> -->

                    <td><button type="button" name="btucancel"  onclick="window.location='8.php?act=cancel';" class="btn btn-warning">

                      <span class="glyphicon glyphicon-eye-open"> </span>ดูรายการ </button></th><td><button type="button" name="btucancel"  onclick="window.location='?act=cancel';" class="btn btn-danger">
                        <span class="glyphicon glyphicon-shopping-cart"> </span>ชำระเงิน</button></th>
                 </tr>

                      </tr>
                    <?php }?>
                </body>
                </div>
                </div>
                </div>
                </div>
                </table>
                 <center>
                   <?php
if (isset($_POST['o_id'])) {
  $sql = "UPDATE `order_head` SET `o_status`='2' WHERE `o_id`='".$_POST['o_id']."'";
 $resual = mysqli_query($conn, $sql);
 if ($resual) {
   echo "
   <script>
       window.location = 'payment.php';
  </script>";
 }else {
   echo "error $sql";
 }
}
 ?>

                   <!-- Modal -->
    <div class="modal fade" id="paybillmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ชำระค่าเช่า</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal fade" id="paybillmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                     <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">ชำระค่าเช่า</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                       </button>
                                     </div>

            <form  method="post">
          <div class="modal-body">
            <p>ชำระเงินค่าเช่า</p>
            <p>เลขที่บิล <span id="bill_id"></span></p>
            <p>ห้อง <span id="room_id"></span></p>
                <input type="hidden" name="idbill" id="idbill">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
            <button type="submit" class="btn btn-primary" name="paybill">ชำระเงิน</button>
          </div>
          </form>
        </div>
      </div>
    </div>
      </body>
      <script type="text/javascript">
      $(document).ready(function() {
              $('.paybillbtn').on('click', function() {
                  $('#paybillmodal').modal('show');
                  $tr = $(this).closest('tr');
                  var data = $tr.children("td").map(function() {
                      return $(this).text();
                  });
                  $('#idbill').val(data[0]);
                  $('#bill_id').text(data[0]);
                  $('#room_id').text(data[1]);
              });
      });
      </script>
    </html>
    <?php
    if (isset($_POST['paybill'])) {
      $sql = "UPDATE `bill` SET `status_bill`='ชำระเงินแล้ว' WHERE `id`='".$_POST['idbill']."'";
     $resual = mysqli_query($conn, $sql);
     if ($resual) {
       echo "
       <script>
           window.location = 'bill.php';
      </script>";
     }else {
       echo "error $sql";
     }
    }
     ?>
