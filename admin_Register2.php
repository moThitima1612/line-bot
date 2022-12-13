<?php
header("content-type: text/html; charset=UTF-8");
include('connect.php');
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
//exit;
echo '
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">';

$m_name = $_POST['m_name'];
   $Username = $_POST['Username'];
   $m_email = $_POST['m_email'];
   $m_pass = $_POST['m_pass'];
   $m_address = $_POST['m_address'];
   $member_level = $_POST['member_level'];
   $m_phone =$_POST['m_phone'];



// เช็คข้อมูลซ้ำ
$query ="SELECT Username FROM `tbl_basic` WHERE Username='$Username'";
$result =mysqli_query($conn,$query) or   die("Error in sql :$query".mysqli_error($query ));
  //echo "จำนวนข้อมูลที่พบ query ".mysqli_num_rows($result);
  if (mysqli_num_rows($result)>0){
    //echo "Username มีคนใช้แล้ว";
    echo '<script>
                      setTimeout(function() {
                       swal({
                           title: "Username มีคนใช้แล้ว !! ",
                           text: "กรุณาสมัครใหม่อีกครั้ง",
                           type: "warning"
                       }, function() {
                           window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
                       });
                     }, 1000);
               </script>';
          }else {
            $sql = "INSERT INTO `tbl_basic`
            ( `m_name`
              ,`Username`
              , `m_email`
              , `m_pass`
              ,`m_address`
              ,`member_level`
              , `m_phone`) VALUES
             ('$m_name'
               ,'$Username'
               ,'$m_email'
               ,'$m_pass'
               ,'$m_address'
               ,'$member_level'
               ,'$m_phone')";
            $result = mysqli_query($conn,$sql);
            echo '<script>
                         setTimeout(function() {
                          swal({
                              title: "บันทึกข้อมูลสำเร็จ",
                              text: "กรุณารอระบบ Login ต่อไป",
                              type: "success"
                          }, function() {
                              window.location = "index.php"; //หน้าที่ต้องการให้กระโดดไป
                          });
                        }, 1000);
                    </script>';

        exit;
}
?>
