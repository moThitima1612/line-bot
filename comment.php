<?php include ("navbar.php");?>

<?php include ("connect.php");
    $search=isset($_POST['search']) ? $_POST['search']:'';
      $sql="SELECT * FROM `register` WHERE `m_id` LIKE '%$search%'";
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
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">  <title>ข้อมูลแสดงความคิดเห็น</title>
</head>
<div class="container "align ='center';>
<div class="row mt-6">
  <div class="col">
    <div class="card-body ">
     <!-- <h4>ข้อมูลผู้เช่า</h4> -->

                <!-- ************************************ -->
                <!-- ************************************ -->
                <div class="row">
                  <div class="col-md-3 offset-md-9 mt-3">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 offset-md-9 mt-3">
                  <form class="form-inline mb-3" enctype="multipart/form-data" action="comment.php"  method="post">
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
                   <th width="3%">รหัส</th>

                   <th width="15%">ไอดี</th>


                   <th width="15%">คะแนน</th>
                   <th width="10%">หัวข้อ</th>
                   <th width="10%">comments</th>
                   <th width="10%">เวลา</th>
<th width="10%">ลบ</th>


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
                     <td><?php echo $row["ratingId"]; ?></td>
                     <td><?php echo $row["userId"]; ?></td>
                       <td><?php echo $row["ratingNumber"]; ?></td>
                          <td><?php echo $row["title"]; ?></td>
                          <td><?php echo $row["comments"]; ?></td>
                     <td><?php echo $row["created"]; ?></td>
<th><a class="btn btn-danger" href="JavaScript:if(confirm('ต้องการลบหรือไม่?')==true){window.location='Show_comment.php?CustomerID=<?php echo $row["ratingId"];?>';}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a>
</div>
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
