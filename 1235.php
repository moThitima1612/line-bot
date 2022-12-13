<?php
	session_start();
    include("connect.php");
    echo '<pre>';
    print_r($_SESSION);

    echo '</pre>';
    echo "<hr>";
    echo '<pre>';
    print_r($_POST);
    ?>
<?php
$o_id=$_POST['o_id'];


$sql="UPDATE `order_head` SET
o_status=2  WHERE o_id= $o_id;
}
?>
