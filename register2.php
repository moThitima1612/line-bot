<?php
header("content-type: text/html; charset=UTF-8");
include('connect.php');




$sql = "INSERT INTO `tbl_member`( `m_name`, `m_email`, `member_username`, `m_pass`, `m_address`, `m_phone`, `LINE_id`, `member_level`) VALUES
 ('".$_POST["m_name"]."','".$_POST["m_email"]."','".$_POST["member_username"]."','".$_POST["m_pass"]."','".$_POST["m_address"]."','".$_POST["m_phone"]."','".$_POST["LINE_id"]."','".$_POST["member_level"]."')";
$result = mysqli_query($conn,$sql);
 if($result){
	 echo "<script>";
	 echo "window.location=\"index.php\"";
	 echo "</script>";

 }else{
	 echo "ผิดพลาด $sql";
 }



 ?>
