<!DOCTYPE html>
<html>
<head>
	<?php include 'bootstrap.php';  ?>
	<link rel = "stylesheet" type = "text/css" href = "css/styles.css">	
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
				<div class = "link" onclick="location.href='about_me.php';"> About me and Prices </div>
		</div>
		<div style = "position: absolute;   height: 12px; left: 229px; transition: all 0.35s; top: 12px;">
				<div class = "link" > Clients </div>
		</div>
		<div style = "position: absolute;   height: 12px; left: 356px; transition: all 0.35s; top: 12px;">
				<div class = "link" > Contacts </div>
		</div>
	</div>
	<div class = "header"></div>
	<div style = "position: absolute;width: 100%;z-index: -1;">
		<img src="src/me2.jpg" id = 'image' class = "img-responsive center-block" style = "margin-bottom: 1000px;">
	</div>
	<div class = "col-md-12" style = "margin-top: 29px;">
		<div class = "col-md-4 col-md-offset-8 description" style = "max-width: 100%;white-space: normal;">
				<h2 STYLE = "font-weight:400; font-family:Bevan; color:rgb(157,71,6); font-size:30px; letter-spacing:0px;">ABOUT KADARA</h2>
				<span>Кадара была создана посредством сбора нескольких творческих людей 1 апреля 2016 года. Творческое объединение Кадара обрело высокую популярность в университетах Астаны а также в самом городе. Мы являемся репортажными универсалами которые освятят ваше мероприятие от начала и до конца
					<br><br>
					Час - 5000тг
					Два фотографа - 9000тг
				</span>
				
		</div>
	</div>
</body>

</html