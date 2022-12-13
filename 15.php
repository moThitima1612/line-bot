<?php
session_start();
error_reporting(E_ALL);
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>
<?php
        if(isset($_REQUEST['Username'])){
				//connection

                  include('connect.php');

    		//เรียกใช้งาน sweetalert

                  $Username = $_REQUEST['Username'];
                  $Password = $_REQUEST['Password'];

				//query
                  $sql="SELECT * FROM tbl_member Where member_username='".$Username."' and m_pass='".$Password."' ";

                  $result = mysqli_query($conn,$sql);

                  //เรียกใช้งาน sweetalert
                  echo '
                  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
                  ';
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

              $_SESSION["UserID"] = $row["member_id"];//ประกาศตัวแปรUserIDไว้เพื่อส่งค่า
              $_SESSION["User"] = $row["m_name"];//ประกาศตัวแปรUserไว้เพื่อส่งค่า
              $_SESSION["email"] = $row["m_email"];
              $_SESSION["address"] = $row["m_address"];
              $_SESSION["phone"] = $row["m_phone"];
              $_SESSION["Userlevel"] = $row["member_level"];//ประกาศตัวแปรUserlevelไว้เพื่อส่งค่า

              if($_SESSION["Userlevel"]=="a"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php

                Header("Location: 1.php");

              }

              if ($_SESSION["Userlevel"]=="m"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php

                Header("Location: 0.php");

              }
            }else{
        		echo '
        		<script>
        			setTimeout(function() {
        			swal({
        					title: "Login ผิดพลาด !!",
        					text: "username หรือ password ไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง",
        					type: "warning"
        				}, function() {
        				window.location = "login_form.php";
        			});
            }, 500);
        		</script>
        		';
        		}

        		//member
        		}else{


     Header("Location: login_form.php"); //user & password incorrect back to login again

}
?>
