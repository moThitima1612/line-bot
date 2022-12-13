<!DOCTYPE html>
<html>
	<head>
		<meta charset='UTF-8'>
		
		<title>Simple Loader</title>
		
		<style>
		.content {display:none;}
		.preload { width:100px;
			height: 200px;
			position: fixed;
			top: 30%;
			left: 45%;
		}
		</style>
		<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		<script>
		$(function() {
			$(".preload").fadeOut(2000, 
		function() {
			$(".content").fadeIn(1000);
		});
		});
		</script>
		 
	</head>
	<body>
		<div class="preload"><img src="images/loader-128x/Preloader_3.gif"></div>
		<div class="content">
			Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	</div>
	</body>
</html>

<!-- ref : SmallEnvelop.com -->
<!-- https://smallenvelop.com/display-loading-icon-page-loads-completely/ -->


