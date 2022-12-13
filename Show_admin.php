<?php include 'connect.php'; ?>

<?php
  //เพื่มข้อมูลห้องพักลงฐานข้อมูล
  if (isset($_POST['save'])) {
    $m_name =$_POST['m_name'];
    $m_email =$_POST['m_email'];
    $Username =$_POST['Username'];
    $m_pass=$_POST['m_pass'];
    $m_address=$_POST['m_address'];
    $m_phone=$_POST['m_phone'];

     $sql = "INSERT INTO `tbl_basic`( `m_name`, `m_email`, `m_address`, `Username`, `m_pass`, `m_phone`)
     VALUES ('$m_name', '$m_email', '$m_address','$Username',  '$m_pass', '$m_phone')";


         $resual = mysqli_query($conn, $sql);
         if ($resual) {
           echo "
           <script>
               window.location = 'Basic_information.php';
          </script>";
         }else {
           echo "error $sql";
         }
}
//แก้ไขข้อมูล
if (isset($_POST['update'])) {
  $id =$_POST['b_id'];
  $m_name =$_POST['m_name'];
  $m_email =$_POST['m_email'];
  $Username =$_POST['Username'];
  $m_pass=$_POST['m_pass'];
  $m_address=$_POST['m_address'];
  $m_phone=$_POST['m_phone'];

   $sql = "UPDATE `tbl_basic` SET `m_name`='$m_name',`m_email`='$m_email',`Username`='$Username',`m_pass`='$m_pass',`m_address`='$m_address',`m_phone`='$m_phone' WHERE `b_id`='".$id."'";

  $resual = mysqli_query($conn, $sql);
  if ($resual) {
    echo "
    <script>
             window.location = 'Basic_information.php';
   </script>";
  }else {
    echo "error $sql";
  }
}
//ลบข้อมูล
$strCustomerID = $_GET["CustomerID"];
$sql = "DELETE FROM `tbl_basic` WHERE `b_id`= '".$strCustomerID."' ";

$query = mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn)) {
   echo "<script>
       window.location = 'Basic_information.php';
  </script>";
}

 ?>
