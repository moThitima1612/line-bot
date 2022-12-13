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
		background: url(https://d1csarkz8obe9u.cloudfront.net/posterpreviews/summer%2Cspring%2Ctropical%2Cbackgrounds-design-template-8788b515e9cf6561a10aa461d5cf7114.jpg?ts=1597259202) no-repeat center;
		background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100% 100%;
	}

	</style>
  <body>
    <!-- โค้ดแก้ไขข้อมูล -->
    <?php
      $id=isset($_GET['id'])  ?$_GET["id"]:'';

      if($id!='') {
          $sql = "SELECT * FROM `tbl_member` WHERE `member_id`='".$id."'";

                          $query = mysqli_query($conn, $sql);
                          $result = mysqli_fetch_array($query)

    ?>
      <form action="Show_member.php" method="post" value="<?php echo $result['member_id']; ?>">
      <input type="hidden" name="member_id" value="<?php echo $result['member_id']; ?>">
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
  <div class="col-sm-4" align="left"> username</div>
  <div class="col-sm-3" align="left">
      <input class="form-control" type="text" name="member_username" value="<?php echo $result['member_username']; ?>">

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

    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-4" align="left"> LINE_id	 </div>
    <div class="col-sm-3" align="left">
      <input class="form-control" type="text" name="LINE_id" value="<?php echo $result['LINE_id']; ?>">

    <div align='right'; >
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
  <form action="Show_member.php" method="post">
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
  <div class="col-sm-4" align="left"> username</div>
  <div class="col-sm-3" align="left">
    <input type="text" name="member_username"  class="form-control">
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
</div>
</div>
<div class="form-group">
<div class="col-sm-4" align="left"> LINE_id	 </div>
<div class="col-sm-3" align="left">
<input type="text" name="LINE_id"  class="form-control">
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
