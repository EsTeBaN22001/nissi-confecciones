<!DOCTYPE html>
<html lang="es">
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

	<?php isset($_SERVER['PATH_INFO']) ? $pathInfo = $_SERVER['PATH_INFO'] : $pathInfo = ''; ?>

	<?php if($pathInfo == "/galery"): ?>
		<link rel="stylesheet" href="build/css/lightbox.css">
	<?php endif; ?>
</head>
<body>

	<header class="header">
		<a href="/" class="logo"><span>Carlos-</span>Guerra</a>
		<div class="menu-icon">
			<i class="fas fa-bars"></i>
		</div>
		<nav class="navbar active">
				<a href="/products" class="navbar-link">Productos</a>
				<a href="/about-us" class="navbar-link">Nosotros</a>
				<a href="/galery" class="navbar-link">Galeria</a>
				<a href="/contact-us" class="navbar-link">Contáctanos</a>
		</nav>
	</header>

	<?php echo $contenido; ?>

	<footer class="footer">
		<div class="footer-container container">
			<div class="contact">
				<h3 class="titleSeparator">Enlaces de contacto</h3>
				<div class="contact-group">
					<a href="">
						<i class="fas fa-map-marker-alt"></i>
						<p>Dirección</p>
					</a>
				</div>
				<div class="contact-group">
					<a href="">
						<i class="fas fa-phone-square-alt"></i>
						<p>Teléfono</p>
					</a>
				</div>
				<div class="contact-group">
					<a href="">
						<i class="fas fa-envelope"></i>
						<p>Email</p>
					</a>
				</div>
				<div class="contact-group">
					<a href="">
						<i class="fab fa-instagram"></i>
						<p>Instagram</p>
					</a>
				</div>
				<div class="contact-group">
					<a href="">
						<i class="fab fa-facebook-square"></i>
						<p>Facebook</p>
					</a>
				</div>
			</div>
			<div class="other-pages">
				<h3 class="titleSeparator">Otras páginas</h3>
				<ul>
					<li><a href="/">Inicio</a></li>
					<li><a href="/products">Productos</a></li>
					<li><a href="/about-us">Sobre nosotros</a></li>
					<li><a href="/galery">Galería</a></li>
					<li><a href="/contact-us">Contáctanos</a></li>
				</ul>
			</div>
		</div>
		<div class="copyright">
			<p>&copy; Todos los derechos reservados por Carlos Guerra web 2021</p>
		</div>
	</footer>

	<!-- Font Awesome -->
	<script src="build/js/fontawesome.min.js"></script>
	
	<?php if( $pathInfo == "/galery"): ?>
		<!-- LightBox -->
		<script src="build/js/lightbox-plus-jquery.min.js"></script>
	<?php endif; ?>
		
	<?php if( $pathInfo == "/products"): ?>
		<script src="build/js/jquery.js"></script>
	<?php endif; ?>
		
	<!-- Principal scipt -->
	<script src="build/js/app.js"></script>
	</body>
</html>