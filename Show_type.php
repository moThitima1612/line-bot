<?php include 'connect.php'; ?>

<?php
  //เพื่มข้อมูลห้องพักลงฐานข้อมูล
  if (isset($_POST['save'])) {
    $c_name =$_POST['c_name'];

     $sql = " INSERT INTO `category`(`c_name`)
     VALUES  ('$c_name')";
     $resual = mysqli_query($conn, $sql);
     if ($resual) {
       echo "
       <script>
                window.location =  window.location = 'type.php';
      </script>";
     }else {
       echo "error $sql";
     }
   }
//แก้ไขข้อมูล
if (isset($_POST['update'])) {
  $id =$_POST['c_id'];
  $c_name =$_POST['c_name'];


   $sql = "UPDATE `category` SET `c_name`='$c_name' WHERE `c_id`='".$id."'";

  $resual = mysqli_query($conn, $sql);
  if ($resual) {
    echo "
    <script>
             window.location =  window.location = 'type.php';
   </script>";
  }else {
    echo "error $sql";
  }
}
//
$strCustomerID = $_GET["CustomerID"];
$sql = "DELETE FROM `category` WHERE `c_id`= '".$strCustomerID."' ";

$query = mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn)) {
   echo "<script>
       window.location = 'type.php';
  </script>";
}

 ?>
