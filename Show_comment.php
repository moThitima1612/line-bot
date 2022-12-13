<?php include 'connect.php'; ?>

<?php
  //อัพโหลรูปภาพ
  if($_POST){

}

$strCustomerID = $_GET["CustomerID"];
  $sql = "DELETE FROM `item_rating` WHERE `ratingId`= '".$strCustomerID."' ";

  $query = mysqli_query($conn,$sql);

  if(mysqli_affected_rows($conn)) {
     echo "<script>
         window.location = 'comment.php';
    </script>";
  }

//  ?>
