<!DOCTYPE HTML>
<html>
<head>
	<style type="text/css">
		body {
			background-color: red;
			transition: background-color 7s;
		}
		
	

	</style>
	<title> BestSongAI</title>
</head>
<body>
	<script type="text/javascript">
		var colors = ["red", "orange", "yellow", "green", "blue", "indigo", "violet"];

		var i = 1;

		window.setInterval(function(){
			document.body.style.backgroundColor = colors[i];
			i++;
			if (i === colors.length){
				i=0;
			}
		}, 5000);
		
		
	</script>

</body>
</html>