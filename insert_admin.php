
<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
   $id=isset($_GET['id'])  ?$_GET["id"]:'';
   if($id!='') {

           $sql = "SELECT * FROM `tbl_basic` WHERE `b_id`='".$id."'";

                           $query = mysqli_query($conn, $sql);
                           $result = mysqli_fetch_array($query)

      ?>



        <form action="Show_admin.php" method="post" value="<?php echo $result['b_id']; ?>">
        <input type="hidden" name="b_id" value="<?php echo $result['b_id']; ?>">
         <center>
      <h1>แก้ไขข้อมูล</h1>
              <div class="col-sm-4" align="left"> ชื่อ-นามสกุล	 </div>
              <div class="col-sm-3" align="left">
                <input class="form-control" type="text" name="m_name" value="<?php echo $result['m_name']; ?>">

              </div>
            </div>
            <div class="col-sm-4" align="left"> Email	 </div>
            <div class="col-sm-3" align="left">
              <input class="form-control" type="text" name="m_email" value="<?php echo $result['m_email']; ?>">

            </div>
          </div>
          </div>
        <div class="col-sm-4" align="left">Username</div>
        <div class="col-sm-3" align="left">
            <input class="form-control" type="text" name="Username" value="<?php echo $result['Username']; ?>">

        </div>
        </div>
        </div>
        <div class="col-sm-4" align="left"> passwoed</div>
        <div class="col-sm-3" align="left">
            <input class="form-control" type="text" name="m_pass" value="<?php echo $result['m_pass']; ?>">

        </div>
        </div>
          <div class="form-group">
            <div class="col-sm-4" align="left"> ที่อยู่	 </div>
            <div class="col-sm-3" align="left">
              <input class="form-control" type="text" name="m_address" value="<?php echo $result['m_address']; ?>">

            </div>
          </div>

          <div class="form-group">
          <div class="col-sm-4" align="left"> โทรศัพท์	 </div>
          <div class="col-sm-3" align="left">
            <input class="form-control" type="text" name="m_phone" value="<?php echo $result['m_phone']; ?>">

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
    <form action="Show_admin.php" method="post">
    <div class="form-group">
      <div class="col-sm-4" align="left"> ชื่อ-นามสกุล	 </div>
      <div class="col-sm-3" align="left">
        <input type="text" name="m_name"  class="form-control">
      </div>
    </div>
    <div class="col-sm-4" align="left"> Email	 </div>
    <div class="col-sm-3" align="left">
      <input type="text" name="m_email"  class="form-control">
    </div>
  </div>
  </div>
<div class="col-sm-4" align="left">Username</div>
<div class="col-sm-3" align="left">
  <input type="text" name="Username"  class="form-control">
</div>
</div>
</div>
<div class="col-sm-4" align="left"> passwoed</div>
<div class="col-sm-3" align="left">
  <input type="text" name="m_pass"  class="form-control">
</div>
</div>
  <div class="form-group">
    <div class="col-sm-4" align="left"> ที่อยู่	 </div>
    <div class="col-sm-3" align="left">
      <input type="text" name="m_address"  class="form-control">
    </div>
  </div>

  <div class="form-group">
  <div class="col-sm-4" align="left"> โทรศัพท์	 </div>
  <div class="col-sm-3" align="left">
    <input type="text" name="m_phone"  class="form-control">
  <div align='right'; >
  </div>
</div>
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
