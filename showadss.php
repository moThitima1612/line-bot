<?php include 'connect.php'; ?>

<?php

  //เพื่มข้อมูลห้องพักลงฐานข้อมูล
  if (isset($_POST['save'])) {
    $m_name =$_POST['m_name'];
    $cofee_name =$_POST['cofee_name'];
    $m_phone =$_POST['m_phone'];
    $location=$_POST['location'];

     $sql = "INSERT INTO `tbl_adss`( `m_name`, `cofee_name`, `m_phone`, `location`)
     VALUES ('$m_name', '$cofee_name', '$m_phone', '$location')";


         $resual = mysqli_query($conn, $sql);
         if ($resual) {
           echo "
           <script>
               window.location = 'Adss.php';
          </script>";
         }else {
           echo "error $sql";
         }
}
//แก้ไขข้อมูล
if (isset($_POST['update'])) {
  $id_coffee =$_POST['id_coffee'];
  $m_name =$_POST['m_name'];
  $cofee_name =$_POST['cofee_name'];
  $m_phone =$_POST['m_phone'];
  $location=$_POST['location'];
  $sql = "UPDATE `tbl_adss` SET `m_name`='$m_name',`cofee_name`='$cofee_name',`m_phone`='$m_phone',`location`='$location' WHERE `id_coffee`='".$id_coffee."'";

  $resual = mysqli_query($conn, $sql);
  if ($resual) {
    echo "
    <script>
             window.location = 'Adss.php';
   </script>";
  }else {
    echo "error $sql";
  }
}
$strCustomerID = $_GET["CustomerID"];
$sql = "DELETE FROM `tbl_adss` WHERE `id_coffee`= '".$strCustomerID."' ";

$query = mysqli_query($conn,$sql);

if(mysqli_affected_rows($conn)) {
   echo "<script>
         window.location = 'Adss.php';
  </script>";
}

 ?>
