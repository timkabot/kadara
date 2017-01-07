var counter = 1;
	function qwe()
	{
		counter = counter % 16;
		counter = counter + 1;
		 document.getElementById('image').src = "src/" + counter.toString() + ".jpg";
	}
var d = window.setInterval(qwe, 3000);
