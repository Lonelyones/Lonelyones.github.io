<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>12. rel="import"</title>
</head>
<body>

	<h1>Далеко-далеко за.</h1>
   <?php include "header.php" ?>
 
   Content
 
   <?php include "./header.php" ?>
...
	<script>

		var link = document.querySelector('link[rel=import]');
		var content = link.import.querySelector('#sky');
		document.body.appendChild(content.cloneNode(true));
	
	</script>

</body>
</html>