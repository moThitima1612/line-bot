<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  </head>
  <style>
  body {
    background: url(https://i.pinimg.com/originals/5b/87/b5/5b87b51fa0e3a732e2b013a8da07e1e8.jpg) no-repeat center;
    background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  }

  </style>
  <body>
    <?php
   $id=isset($_GET['id'])  ?$_GET["id"]:'';
   if($id!='') {

           $sql = "SELECT * FROM `category` WHERE `c_id`='".$id."'";

                           $query = mysqli_query($conn, $sql);
                           $result = mysqli_fetch_array($query)

      ?>



        <form action="Show_type.php" method="post" value="<?php echo $result['c_id']; ?>">
        <input type="hidden" name="c_id" value="<?php echo $result['c_id']; ?>">
         <center>
      <h1>แก้ไขข้อมูล</h1>
              <div class="col-sm-4" align="left"> ชื่อประเภทเมนู	 </div>
              <div class="col-sm-3" align="left">
                  <input class="form-control" type="text" name="c_name" value="<?php echo $result['c_name']; ?>">

              </div>
            </div>

      <div class="form-group">
        <div class="col-sm-3"> </div>
        <div class="col-sm-6">
            <input class="btn btn-primary mt-4" type="submit" value="บันทึกการแก้ไข" name="update">
        </div>
      </div>
    </form>
   <?php }else{?>
       <center>
      <h1>เพิ่มข้อมูล</h1>
    <form action="Show_type.php" method="post">
    <div class="form-group">
      <div class="col-sm-4" align="left"> ชื่อประเภทเมนู	 </div>
      <div class="col-sm-3" align="left">
        <input type="text" name="c_name" class="form-control">
      </div>
    </div>
  <div class="form-group">
    <div class="col-sm-3"> </div>
    <div class="col-sm-6">
        <input class="btn btn-primary mt-4" type="submit" value="บันทึกการเพิ่มข้อมูล" name="save">
    </div>
  </div>
  </form>
      </div>
    </div>
  </form>
  </center>
  </div>
  </div>
  </div>
  </body>
  <?php } ?>
