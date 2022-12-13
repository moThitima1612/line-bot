
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
		background: url(https://png.pngtree.com/thumb_back/fw800/background/20200325/pngtree-blue-watercolour-sky-background-image_332639.jpg) no-repeat center;
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

           $sql = "SELECT * FROM `tbl_adss` WHERE `id_coffee`='".$id."'";

                           $query = mysqli_query($conn, $sql);
                           $result = mysqli_fetch_array($query)

      ?>



        <form action="showadss.php" method="post" value="<?php echo $result['id_coffee']; ?>">
        <input type="hidden" name="id_coffee" value="<?php echo $result['id_coffee']; ?>">
         <center>
      <h1>แก้ไขข้อมูล</h1>
              <div class="col-sm-4" align="left"> ชื่อเจ้าของร้านกาแฟ	 </div>
              <div class="col-sm-3" align="left">
                <input class="form-control" type="text" name="m_name" value="<?php echo $result['m_name']; ?>">

              </div>
            </div>
            <div class="col-sm-4" align="left"> ชื่อร้านกาแฟ	 </div>
            <div class="col-sm-3" align="left">
              <input class="form-control" type="text" name="cofee_name" value="<?php echo $result['cofee_name']; ?>">

            </div>
          </div>
          </div>
        <div class="col-sm-4" align="left">เบอร์โทรศัพท์</div>
        <div class="col-sm-3" align="left">
            <input class="form-control" type="text" name="m_phone" value="<?php echo $result['m_phone']; ?>">

        </div>
        </div>
        </div>
        <div class="col-sm-4" align="left"> ที่ตั้ง</div>
        <div class="col-sm-3" align="left">
            <input class="form-control" type="text" name="location" value="<?php echo $result['location']; ?>">


          <div align='right'; >
          </div>
        </div>
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
    <form action="showadss.php" method="post">
    <div class="form-group">
      <div class="col-sm-4" align="left"> ชื่อเจ้าของร้านกาแฟ	 </div>
      <div class="col-sm-3" align="left">
        <input type="text" name="m_name"  class="form-control">
      </div>
    </div>
    <div class="col-sm-4" align="left">ชื่อร้านกาแฟ </div>
    <div class="col-sm-3" align="left">
      <input type="text" name="cofee_name"  class="form-control">
    </div>
  </div>
  </div>
<div class="col-sm-4" align="left">เบอร์โทรศัพท์</div>
<div class="col-sm-3" align="left">
  <input type="text" name="m_phone"  class="form-control">
</div>
</div>
</div>
<div class="col-sm-4" align="left"> ที่ตั้ง</div>
<div class="col-sm-3" align="left">
  <input type="text" name="location"  class="form-control">
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
