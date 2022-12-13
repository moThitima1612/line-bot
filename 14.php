<?php session_start();?>

<!DOCTYPE html>
<html lang="th" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="theme/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>FoodPos</title>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="theme/css/font-awesome.min.css">
		<link rel="stylesheet" href="theme/css/bootstrap.css">


		<style type="text/css">
		@media print{
			#hd{
				display: none;
				}
			}
		</style>

		<style>

			body {
  margin: 0;
  padding: 0;
  background-image: url("f22.jpg");

  background-repeat: no-repeat;

  background-size: 100% ;
  background-color: #17a2b8;
  height: 100vh;

}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 450px;

  background-color: #EAEAEA;

}


#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;

}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;

}







</style>

	</head>
	<body class="hold-transition login-page">

      <form name="frmlogin"  method="post" action="15.php">
        <p> </p>
        <p><b> Login Form </b></p>
        <p> ชื่อผู้ใช้ :
          <input type="text"   id="Username" required name="Username" placeholder="Username">
        </p>
        <p>รหัสผ่าน :
          <input type="password"   id="Password"required name="Password" placeholder="Password">
        </p>
        <p>
          <button type="submit">Login</button>
          &nbsp;&nbsp;
          <button type="reset">Reset</button>
          <br>
        </p>
      </form>
</body>
</html
