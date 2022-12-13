<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">
<title>jQuery Form Validator - itOffside.com</title>
<!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="theme.css" rel="stylesheet">
<link href="validator.css" rel="stylesheet">
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="jquery.form.validator.min.js"></script>
<script src="security.js"></script>
<script src="file.js"></script>
</head>
<body>
<div class="container">
<div class="header">
<nav>
<ul class="nav nav-pills pull-right">
<li role="presentation" class="active"><a href="index.php">หน้าแรก</a></li>
<li role="presentation"><a href="https://www.itoffside.com/">เกี่ยวกับเรา</a></li>
<li role="presentation"><a href="https://www.itoffside.com/">ติดต่อเรา</a></li>
</ul>
</nav>
<h3 class="text-muted">Demo jQuery Form Validator</h3>
</div>
<div class="row marketing">
<div class="col-lg-12">
<form class="form-horizontal" role="form" action="result.php" method="post" id="form">
<div class="form-group">
<label class="col-sm-3 control-label">อีเมล์</label>
<div class="col-sm-9">
<input type="email" class="form-control" data-validation="email">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">รหัสผ่าน</label>
<div class="col-sm-9">
<input type="password" class="form-control" name="pass_confirmation"
data-validation="strength" data-validation-strength="2">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">รหัสผ่าน อีกครั้ง</label>
<div class="col-sm-9">
<input type="password" class="form-control" data-validation="confirmation" name="pass">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">รูปภาพประจำตัว</label>
<div class="col-sm-9">
<input data-validation="mime size" data-validation-allowing="jpg, png"
data-validation-max-size="512kb" type="file">
</div>
</div>
<div class="form-group">
<label class="col-sm-3 control-label">รายละเอียด</label>
<div class="col-sm-9">
<textarea class="form-control" data-validation="required"></textarea>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-3 col-sm-9">
<div class="checkbox">
<label>
<input type="checkbox" data-validation="required"
data-validation-error-msg="ต้องยอมรับเงื้อนไข"> ยอมรับเงื้อนไข
</label>
</div>
</div>
</div>
<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
</div>
</div>
</form>
</div>
</div>
<footer class="footer">
<p>&copy; itOffside.com 2014</p>
</footer>
</div> <!-- /container -->
<script>
$.validate({
modules: 'security, file',
onModulesLoaded: function () {
$('input[name="pass_confirmation"]').displayPasswordStrength();
}
});
</script>
</body>
</html>
