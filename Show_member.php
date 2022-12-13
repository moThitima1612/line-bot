<?php include 'connect.php'; ?>

<?php

  //เพื่มข้อมูลห้องพักลงฐานข้อมูล
  if (isset($_POST['save'])) {
    $m_name =$_POST['m_name'];
    $m_email =$_POST['m_email'];
    $member_username =$_POST['member_username'];
    $m_pass=$_POST['m_pass'];
    $m_address=$_POST['m_address'];
    $m_phone=$_POST['m_phone'];
  $LINE_id=$_POST['LINE_id'];
     $sql = "INSERT INTO `tbl_member`( `m_name`, `member_username`, `m_email`, `m_address`, `m_pass`, `m_phone`, `LINE_id`)
     VALUES ('$m_name', '$m_email', '$m_address', '$member_username', '$m_pass', '$m_phone', '$LINE_id')";


         $resual = mysqli_query($conn, $sql);
         if ($resual) {
           echo "
           <script>
               window.location = 'member.php';
          </script>";
         }else {
           echo "error $sql";
         }
}
//แก้ไขข้อมูล
if (isset($_POST['update'])) {
  $id =$_POST['member_id'];
  $m_name =$_POST['m_name'];
  $member_username =$_POST['member_username'];
  $m_email =$_POST['m_email'];
  $m_pass=$_POST['m_pass'];
  $m_address=$_POST['m_address'];
  $m_phone=$_POST['m_phone'];
  $LINE_id=$_POST['LINE_id'];
   $sql = "UPDATE `tbl_member` SET `m_name`='$m_name',`m_email`='$m_email',`member_username`='$member_username',`m_pass`='$m_pass',`m_address`='$m_address',`m_phone`='$m_phone',`LINE_id`='$LINE_id' WHERE `member_id`='".$id."'";

  $resual = mysqli_query($conn, $sql);
  if ($resual) {
    echo "
    <script>
             window.location = 'member.php';
   </script>";
  }else {
    echo "error $sql";
  }
}
$strCustomerID = $_GET["CustomerID"];
$sql = "DELETE FROM `tbl_member` WHERE `member_id`= '".$strCustomerID."' ";

$query = mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn)) {
   echo "<script>
       window.location = 'member.php';
  </script>";
}

 ?>
