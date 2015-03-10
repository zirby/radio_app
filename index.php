<?php  ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>index</title>
		<meta name="description" content="">
		<meta name="author" content="Christian ZIRBES">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<style>
		* { margin:0; padding:0; }
		#container { width:600px; height:400px; margin:100px auto; }
		.damier { width:10px; height:10px; float:left;  }		
		</style>
		<script type="text/javascript" src="damier.js"></script>
	</head>

	<body>
		<div>
			<header>
				<h1>index</h1>
			</header>
			<div id= "container" >
				
			<?
				for ($i=0;$i <= 2399;$i++) {
					echo "<div class='damier' id='$i' onclick='myFunction($i)'></div>";
				}
			?>
			</div>

			<footer>
				<p>
					&copy; Copyright  by Christian ZIRBES
				</p>
			</footer>
		</div>
	</body>
</html>
