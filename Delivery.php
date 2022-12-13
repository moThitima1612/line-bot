
<?php include ("navbar.php");?>

<?php include ("connect.php");
    $search=isset($_POST['search']) ? $_POST['search']:'';
    $sql="SELECT * FROM  order_head WHERE `o_id` LIKE '%$search%'";
    $resual = mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ข้อมูลแอดมิน</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
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
<!--
  <div class="container" align = 'center';> -->
  <div class="container "align ='center';>
  <div class="row mt-5">
    <div class="col-md-3 offset-md-9 mt-3">
    <form class="form-inline mb-3" enctype="multipart/form-data" action="Delivery.php"  method="post">
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
                   <th width="3%">รหัส</th>
                   <th width="10%">ชื่อ-นามสกุล</th>
                   <th width="15%">Email</th>


                   <th width="15%">ที่อยู่</th>
                   <th width="10%">โทรศัพท์</th>
                   <th width="10%">เวลา</th>
                   <th width="10%">ราคา</th>


                    <th width="10%">ตำแหน่ง</th>
                    <th width="7%">ลบ</th>
                 </tr>

               </thead>
             </thead>

             <!-- Include bootstrap & jQuery -->
             <link rel="stylesheet" href="bootstrap.css" />
             <script src="jquery-3.3.1.min.js"></script>
             <script src="bootstrap.js"></script>

             <!-- Creating table heading -->

               <?php
                        while($row = mysqli_fetch_array($resual,MYSQLI_ASSOC)){
                   ?>
                   <tr align = 'center';>
                     <td><?php echo $row["o_id"]; ?></td>
                     <td><?php echo $row["o_name"]; ?></td>
                     <td><?php echo $row["o_email"]; ?></td>
                       <td><?php echo $row["o_addr"]; ?></td>

                          <td><?php echo $row["o_phone"]; ?></td>
                          <td><?php echo $row["o_dttm"]; ?></td>
                     <td><?php echo $row["o_total"]; ?></td>




                       <td>  Latitude:16.498687999999998, Longitude: 98.69393919999999</th>
<th><a class="btn btn-danger" href="JavaScript:if(confirm('ต้องการลบหรือไม่?')==true){window.location='show.php?CustomerID=<?php echo $row["o_id"];?>';}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a>
</tr>
                 <?php }?>
        </body>
        </div>
      </div>
    </div>
  </div>
</table>
</body>
</html>
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
