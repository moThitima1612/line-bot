<?php include 'connect.php'; ?>
<?php
  //อัพโหลรูปภาพ
  if($_POST){
}
if (isset($_POST['save'])) {
  if(isset($_FILES['fileupload'])){
      $name_file =  $_FILES['fileupload']['name'];
      $tmp_name =  $_FILES['fileupload']['tmp_name'];
      $locate_img ="img/";
      move_uploaded_file($tmp_name,$locate_img.$name_file);
  }
  $sql = "INSERT INTO `product` (`p_name`, `p_detail`, `p_price`, `p_pic`)
            VALUES ('".$_POST['p_name']."','".$_POST['p_detail']."','".$_POST['p_price']."','$name_file')";

  $resual = mysqli_query($conn, $sql);
  if ($resual) {
      echo "
      <script>
        window.location = 'product.php';
      </script>";
  }else {
      echo "error $sql";
    }
  }

  //แก้ไขข้อมูลอาหาร
    if (isset($_POST['update'])) {

            $p_name = $_POST['p_name'];
            $p_detail = $_POST['p_detail'];
            $p_price= $_POST['p_price'];

            if(isset($_FILES['fileupload'])){
              $name_file =  $_FILES['fileupload']['name'];
              $tmp_name =  $_FILES['fileupload']['tmp_name'];
              $locate_img ="img/";
              move_uploaded_file($tmp_name,$locate_img.$name_file);

}          $sql ="UPDATE `product` SET `p_name`='".$_POST['p_name']."',`p_detail`='".$_POST['p_detail']."',`p_price`='".$_POST['p_price']."', `p_pic` = '$name_file' WHERE `p_id`='".$_POST['p_id']."'";

          $resual = mysqli_query($conn, $sql);
          if ($resual) {
              echo "
              <script>
                window.location = 'product.php';
              </script>";
          }else {
              echo "error $sql";
            }
          }
          //ลบข้อมูล

        $strCustomerID = $_GET["CustomerID"];
          $sql = "DELETE FROM `product` WHERE `p_id`= '".$strCustomerID."' ";

          $query = mysqli_query($conn,$sql);

          if(mysqli_affected_rows($conn)) {
             echo "<script>
                 window.location = 'product.php';
            </script>";
          }

//  ?>
