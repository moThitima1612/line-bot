<?php session_start(); ?>
<!doctype html>
<html lang="en">
	<head>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
		<title>Basic Login PHP, SESSION and condition</title>

	</head>
	<style>
	body {
		background: url(https://media3.giphy.com/media/1iUZct1cqCG16XsI/giphy.gif?cid=ecf05e47t1d07f2vrtun7re27eab0aherqpgkapfqokhl154&rid=giphy.gif&ct=g) no-repeat center;
		background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100% 100%;

}

.btn-facebook {
	background-color: #405D9D;
	color: #fff;
}
.btn-twitter {
	background-color: #42AEEC;
	color: #fff;
}
		</style>
	<body>
		<div class="container" style="margin-top: 200px;">
			<div class="row">
				<div class="col-sm-8"></div>
				<div class="col-sm-4">
					<h4> Login</h4>
					<form action="" method="post">
						username
						<input type="text" name="username" class="form-control" required placeholder="username">

						password
						<input type="password" name="password" class="form-control" required placeholder="password">

						<input type="radio" name="level" value="admin" required> admin
						<input type="radio" name="level" value="member"> member

						<br>
						<button type="submit" class="btn btn-success">Login</button>
						<a class="btn btn-primary" href="register.php" role="button">สมัคสมาชิก</a>


					</form>
				</div>
				</div>
			</div>
		</div>

		<?php
		//เรียกใช้งาน sweetalert
		echo '
		<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
		';
		//print_r($_POST);
		//isset ใช้เช็คว่ามีการส่ง method post ชื่อ username and password มาในหน้านี้หรือไม่
		if ( isset($_POST['username']) && isset($_POST['password'])  ) {
		//สร้างตัวแปร session username
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['level'] = $_POST['level'];
		// print_r($_SESSION);
		// echo '<br>';
		// echo 'session = '.$_SESSION['username'];
		// echo '<br>';
		// echo 'Your level = '.$_SESSION['level'];
		// echo '<br>';

		//สร้างเงื่อนไขตรวจสอบว่าเป็น admin or member
		if ( $_SESSION['level'] == 'admin' ) {
		//admin
		$username = $_POST['username'];
		$password = $_POST['password'];

		//admin : username & password
		if ($username == 'admin' && $password == '1234') {
			Header("Location: 1.php");
		}else{
		echo '
		<script>
			setTimeout(function() {
			swal({
					title: "Login ผิดพลาด !!",
					text: "username หรือ password ไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง",
					type: "warning"
				}, function() {
				window.location = "index.php";
			});
			}, 1000);
		</script>
		';
		}

		//member
		}else{

		$username = $_POST['username'];
		$password = $_POST['password'];

		//member :  : username & password
		if ($username == 'member' && $password == '1234') {
			Header("Location: 0.php");
		}else{
		echo '
		<script>
			setTimeout(function() {
				swal({
					title: "username หรือ password ไม่ถูกต้อง",
					text: "กรุณาลองใหม่อีกครั้ง",
					type: "warning"
				}, function() {
				window.location = "index.php";
				});
			}, 1000);
		</script>
		';
		}


		}

		}else{

		}
		?>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	</body>

</html>
