


<?php include ("connect.php");
    $search=isset($_POST['search']) ? $_POST['search']:'';
    $sql="SELECT * FROM `tbl_adss` WHERE`id_coffee` LIKE '%$search%'";
    $resual = mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ข้อมูลที่อยู่</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  </head>
  <style>
	body {
		background: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSumqcAQiMHQiIhpqA78EmkZqh6Cjzig3CqKc6Nwze3WFjIknS_6rh6KncmubbF51QjLcA&usqp=CAU) no-repeat center;
		background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100% 100%;
	}

	/* </style>
  <!DOCTYPE html>
  <html>
  <head>
  <title>
  CSChatThaiUI
  - Web font preview
  </title>
  <style type='text/css'>

  @font-face {
   font-family: 'Lulu';
   src: url('Lulu.eot?#iefix') format('embedded-opentype'),  url('Lulu.woff') format('woff'), url('Lulu.ttf')  format('truetype'), url('Lulu.svg#CSChatThaiUI') format('svg');
   font-weight: normal;
   font-size:350%;
   font-style: normal;
  }

  body { font-family: 'Lulu' !important; }

  </style>
  </head>
  <body> */

<!-- body {

     font-size: 26px;



   }
  <div class="container" align = 'center';> -->
    <div class="row mt-5">
      <div class="col ">
        <center>
        <div class="card" style="width: 80rem;">
          <h4 class="card-header bg-success text-white" align ='left ';>ข้อมูลที่อยู่
          <a type="submit" class="btn btn-outline-dark" href="insadss.php">เพิ่มข้อมูลที่อยู่</a></h4>
           <div class="card-body ">
             <!-- ************************************ -->
             <div class="row mt-1" >
               <form class="form-inline mb-3" enctype="multipart/form-data" action="Adss.php"  method="post">
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
                <!-- ************************************ -->
             <table  class="table table-striped mt-2">
               <thead>
               <tr align = 'center';>
                   <th width="3%">รหัส</th>
                   <th width="20%">ชื่อเจ้าของร้านกาแฟ</th>
                   <th width="15%">ชื่อร้านกาแฟ</th>
                   <th width="7%">เบอร์โทรศัพท์</th>
                   <th width="10%">ที่ตั้ง</th>


                   <th width="7%">แก้ไข</th>
                   <th width="7%">ลบ</th>
                 </tr>

               </thead>
             </thead>


               <?php
                        while($row = mysqli_fetch_array($resual,MYSQLI_ASSOC)){
                   ?>
                   <tr align = 'center';>
                     <td><?php echo $row["id_coffee"]; ?></td>
                     <td><?php echo $row["m_name"]; ?></td>
                     <td><?php echo $row["cofee_name"]; ?></td>
                        <td><?php echo $row["m_phone"]; ?></td>
                      <td><?php echo $row["location"]; ?></td>

                     <th><a class="btn btn-warning" href="insadss.php?id=<?php echo $row["id_coffee"];?>">จัดการ</a></th>
                     <th><a class="btn btn-danger" href="JavaScript:if(confirm('ต้องการลบหรือไม่?')==true){window.location='showadss.php?CustomerID=<?php echo $row["id_coffee"];?>';}">ลบ</a></th>
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
