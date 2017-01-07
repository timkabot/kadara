<!DOCTYPE html>
<html>
<head>
	<?php include 'bootstrap.php';  ?>
	<link rel = "stylesheet" type = "text/css" href = "css/styles.css">	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="JS/myjs.js"></script>

	<title> Kadara  </title>
</head>
<body>
	
	<div class = "logo">
		<a href="index.php">
			<img src="Img/logo5.png" style = "width: 100%;" onmouseover="this.style.opacity='0.5';" onmouseout="this.style.opacity='1' " id = "logotype">
		</a>
	</div>

	<div style = "position: absolute; width: 608px; left: 335px;z-index: 20">
		<div style = "position: absolute; height: 12px;  left: 0px; top: 12px;">
				<div class = "link" onclick="location.href='about_me.php';"> About and Prices </div>
		</div>

		<div style = "position: absolute;   height: 12px; left: 229px; transition: all 0.35s; top: 12px;">
				<div class = "link" > Clients </div>
		</div>

		<div style = "position: absolute;   height: 12px; left: 356px; transition: all 0.35s; top: 12px;">
				<div class = "link" > Contacts </div>
		</div>

	</div>

	<div style = "position: absolute;width: 100%;z-index: -1;">
		<img src="src/1.jpg" id = 'image' class = "img-responsive center-block" style = "margin-bottom: 1000px;">
	</div>
	
	<div class = "header"></div>

</body>

</html