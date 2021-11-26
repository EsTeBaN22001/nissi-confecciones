<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Carlos Guerra</title>
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
	<!-- General css styles -->
	<link rel="stylesheet" href="build/css/app.css">
	<link rel="stylesheet" href="build/css/app.css.map">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="FontAwesome/all.css">
	<link rel="stylesheet" href="FontAwesome/all.min.css">
</head>
<body>

	<header class="header">
		<a href="/" class="logo"><span>Carlos-</span>Guerra</a>
		<div class="menu-icon">
			<i class="fas fa-bars"></i>
		</div>
		<nav class="navbar active">
				<a href="#" class="navbar-link">Productos</a>
				<a href="#" class="navbar-link">Nosotros</a>
				<a href="#" class="navbar-link">Galeria</a>
				<a href="#" class="navbar-link">Contáctanos</a>
		</nav>
	</header>

	<?php echo $contenido; ?>

	<!-- Font Awesome -->
	<script src="build/js/fontawesome.min.js"></script>
	<!-- Principal scipt -->
	<script src="build/js/app.js"></script>
</body>
</html>