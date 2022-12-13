<?php
//ลบเธอออกจากใจ เอ้ย ลบ session ครับ 5555
session_start();
session_destroy();

//เรียกใช้งาน sweetalert
echo '
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  	';


  	echo '
					<script>
				       setTimeout(function() {
				        swal({
				            title: "Logout สำเร็จ !!",
				            text: "ออกจากระบบแล้ว",
				            type: "success"
				        }, function() {
				            window.location = "index.php";
				        });
				    }, 1000);
				</script>
				';


//echo '<a href="session.php"> back to login </a> ';
?>
