<?php include 'connect.php'; ?>

<?php
$strCustomerID = $_GET["CustomerID"];
  $sql = "DELETE FROM `order_head` WHERE `o_id`= '".$strCustomerID."' ";

  $query = mysqli_query($conn,$sql);

  if(mysqli_affected_rows($conn)) {
     echo "<script>
         window.location = 'Delivery.php';
    </script>";
  }

//  ?>
