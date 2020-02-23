<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body align="center">
		<label for="st">Время на сервере: </label>
		<input id="st" type="text" placeholder="Server Time" readonly>
		<script>
		setInterval(serverTime, 1000);
		function serverTime()
		{
		  var xhr = new XMLHttpRequest();
		  xhr.onload = function()
			{
		    var field = document.getElementById("st");
		    field.value = this.responseText;
		  };
		  xhr.open("GET", "serverTime.php");
		  xhr.send();
		}
		</script>
	</body>
</html>
