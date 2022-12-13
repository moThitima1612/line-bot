
<?php include ("navbar.php");?>

<?php include ("connect.php");
    $search=isset($_POST['search']) ? $_POST['search']:'';
    $sql="SELECT * FROM  category WHERE `c_id` LIKE '%$search%'";
    $resual = mysqli_query($conn, $sql);
 ?>
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
<!--
  <div class="container" align = 'center';> -->


                <!DOCTYPE html>
                <html lang="en" dir="ltr">
                  <head>

                    <meta charset="utf-8">
                    <title>ข้อมูลสมาชิก</title>
              </head>
              <div class="container "align ='center';>
              <div class="row mt-5">
                <div class="col">
                  <div class="card-body ">
                   <!-- <h4>ข้อมูลผู้เช่า</h4> -->
                     <div class="row">
                       <div class="col-md-3 offset-md-9 ">
                           <a style="width:250px;" type="submit" class="btn btn-info" href="insert_type.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                             <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5zm6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5V4.5z"/>
                           </svg> เพิ่มข้อมูลสมาชิก</a>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-md-3 offset-md-9 mt-3">
                     <form class="form-inline mb-3" enctype="multipart/form-data" action="type.php"  method="post">
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
                   <th width="17%">รหัส</th>
                   <th width="15%">ชื่อเมนู</th>


                   <th width="17%">แก้ไข</th>
                   <th width="17%">ลบ</th>
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
                     <td><?php echo $row["c_id"]; ?></td>
                     <td><?php echo $row["c_name"]; ?></td>

                     <th><a class="btn btn-warning" href="insert_type.php?id=<?php echo $row["c_id"];?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                      </svg></a></th>
                     <th><a class="btn btn-danger" href="JavaScript:if(confirm('ต้องการลบหรือไม่?')==true){window.location='Show_type.php?CustomerID=<?php echo $row["c_id"];?>';}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                       <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                       <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                     </svg></a></a></th>
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
