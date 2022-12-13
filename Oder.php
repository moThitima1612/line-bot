<?php include ("navbar.php"); ?>
<?php include ("connect.php");
        $search=isset($_POST['search']) ? $_POST['search']:'';
        if (isset($_POST['btnsearch'])) {
        $sql="SELECT order_detail.p_id,order_detail.o_id,order_detail.d_qty,order_detail.d_subtotal,tbl_member.Member_id,tbl_member.m_name FROM `tbl_member`
          inner JOIN `order_head` ON tbl_member.Member_id=order_detail.d_id
        inner JOIN `order_detail` ON tbl_member.Member_id=order_detail.d_id
     WHERE tbl_member.Member_id LIKE '%$search%'";
          $resual = mysqli_query($conn, $sql);

        }else {
        $sql="SELECT order_detail.p_id, order_detail.o_id,order_detail.d_qty,order_detail.d_subtotal,tbl_member.Member_id,tbl_member.m_name  FROM `tbl_member`
          inner JOIN `order_detail` ON tbl_member.Member_id=tbl_member.Member_id ";
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
    background: url(https://64.media.tumblr.com/tumblr_m8llqueGOd1rr8uo0o1_500.gifv) no-repeat center;
    background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  }

  </style>

    <div class="container" align ='center';>
    <div class="row mt-5">
    <div class="col">
    <div class="card" style="width: 45rem;">
    <h4 class="card-header bg-success text-white" align ='left ';>รายการการสั่งซื้อ</h4>
    <div class="card-body ">
      <!-- ***************************************************** -->
      <div class="row mt-1" >
        <form class="form-inline mb-3" enctype="multipart/form-data" action="Oder.php"  method="post">
         <div class="input-group mr-3 " style="width:300px;">
           <div align = 'center';class="input-group-prepend">
             <div class="input-group-text">ค้นหา</div>
           </div >
           <input type="text" name="search" id="search" class="form-control" value="">
         </div>
           <div>
           <button type="submit" class="btn btn-info ">ตกลง</button>
           </div>
         </div>

         </form>
         <!-- ***************************************************** -->
    <table  class="table table-striped">
      <thead>
        <tr align = 'center';>
          <th width="17%">รหัสการสั่งซื้อ</th>
          <th width="15%">ชื่อลูกค้า</th>

          <th width="15%">รหัสเมนู</th>
          <th width="15%">จำนวน</th>

          <th width="10%">ราคา</th>
<th width="10%">ดูรายการ</th>
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
                      <td><?php echo $row["d_qty"]; ?></td>
                       <td><?php echo $row["d_subtotal"]; ?></td>
                       <td><button type="button" name="btucancel"  onclick="window.location='2.php?act=cancel';" class="btn btn-warning">
                         <span class="glyphicon glyphicon-shopping-cart"> </span>ดู </button></th>

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
                   <label>ตำแหน่ง:</label><br>

                      Latitude:16.8296448 , Longitude: 100.2471424
                     </select>
                 </div>
                 </div>
                 </div>

      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Google Map API 3 - 01</title>



      </head>



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
