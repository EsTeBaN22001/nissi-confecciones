<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nissi-Confecciones</title>
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

<?php 
	$file = basename($_SERVER['PHP_SELF']);
	$page = str_replace('.php', '', $file);
?>

<body class="<?= $page; ?>">

	<header class="header">
		<a href="/">
			<svg class="logo" version="1.0" xmlns="http://www.w3.org/2000/svg" width="200.000000pt" height="57.000000pt" viewBox="0 0 300.000000 157.000000" preserveAspectRatio="xMidYMid meet">
				<metadata>
				Created by potrace 1.10, written by Peter Selinger 2001-2011
				</metadata>
				<g class="logoG" transform="translate(0.000000,157.000000) scale(0.100000,-0.100000)"
				fill="#000000" stroke="none">
				<path d="M630 953 c-206 -333 -383 -609 -392 -614 -9 -5 -33 -9 -54 -9 -51 0
				-167 -20 -179 -31 -5 -5 35 -9 98 -9 59 0 107 -3 107 -7 0 -5 -38 -69 -84
				-143 -59 -95 -80 -136 -70 -138 8 -2 226 58 486 133 l472 137 615 -11 c339 -6
				656 -13 704 -15 l88 -5 119 180 c66 98 122 179 123 179 3 0 -14 -192 -28 -319
				l-5 -53 122 7 c68 4 124 8 126 10 8 7 101 829 95 840 -15 25 -318 414 -323
				415 -3 0 -68 -85 -144 -190 -75 -104 -141 -190 -145 -190 -4 0 -59 83 -121
				185 -62 102 -116 185 -119 185 -3 0 -87 -122 -185 -270 -99 -149 -181 -270
				-183 -270 -2 0 -1 20 3 45 4 32 3 45 -6 45 -7 0 -25 14 -40 30 l-28 30 -110
				-137 -110 -138 -40 -183 c-22 -101 -42 -186 -45 -189 -6 -5 -1060 -112 -1065
				-107 -7 5 125 188 153 214 15 14 47 54 70 90 23 36 56 82 74 104 l31 39 0 -40
				c0 -23 8 -50 18 -64 10 -13 26 -45 36 -71 37 -101 65 -87 95 47 23 108 46 165
				65 165 8 0 17 -13 21 -29 3 -17 20 -47 36 -67 16 -20 29 -41 29 -45 0 -21 38
				-7 44 16 4 17 12 24 25 22 12 -1 28 11 43 32 33 49 53 59 75 39 10 -10 20 -29
				21 -43 4 -49 27 -62 38 -21 9 39 44 62 126 84 106 28 148 60 255 191 l92 114
				-97 193 c-53 107 -99 194 -102 194 -3 0 -65 -120 -139 -266 -86 -171 -137
				-261 -141 -253 -5 8 -43 133 -85 279 -43 146 -80 270 -84 277 -3 6 -175 -261
				-381 -594z m2169 310 c78 -100 141 -185 141 -190 0 -6 -60 -102 -76 -122 -2
				-2 -53 29 -113 68 -61 39 -113 71 -115 71 -5 0 -236 -297 -236 -303 0 -2 78 7
				173 19 94 13 180 23 190 24 12 0 -36 -80 -169 -279 l-186 -279 -152 4 c-215 7
				-1680 34 -1805 34 -57 0 -102 2 -100 4 2 2 240 27 529 55 693 67 683 66 1075
				106 187 19 345 35 351 35 13 0 168 169 162 176 -3 2 -96 -9 -209 -25 -112 -16
				-205 -28 -206 -27 -2 2 146 206 282 389 28 37 108 148 180 247 71 99 133 179
				137 178 4 -2 70 -85 147 -185z m-567 0 c119 -196 116 -179 54 -256 l-23 -28
				-74 68 c-41 38 -82 74 -91 81 -15 12 -27 -2 -112 -129 -52 -79 -94 -144 -93
				-145 1 -1 65 4 142 11 77 7 142 11 144 9 4 -3 -15 -29 -170 -240 l-97 -131
				-56 -7 c-31 -3 -82 -9 -113 -12 l-58 -7 134 142 c73 77 129 141 125 141 -5 0
				-60 -13 -121 -29 -128 -33 -119 -39 -100 70 11 62 25 86 202 353 105 157 192
				285 195 286 3 0 53 -80 112 -177z m-51 -248 c54 -51 60 -61 51 -80 -11 -24
				-27 -27 -201 -41 l-83 -7 34 54 c99 154 101 158 120 145 10 -7 45 -39 79 -71z
				m-455 -19 c-3 -12 -24 -131 -47 -266 -23 -135 -44 -248 -48 -252 -5 -5 -213
				-29 -218 -24 -1 1 16 82 38 180 l39 178 95 119 96 119 25 -17 c18 -11 24 -22
				20 -37z m1016 -7 c51 -33 94 -64 96 -69 2 -4 -7 -19 -20 -33 -21 -22 -38 -27
				-188 -46 -90 -11 -165 -19 -166 -18 -3 4 171 226 178 227 4 0 49 -27 100 -61z
				m157 -350 c-23 -195 -45 -357 -48 -361 -3 -4 -48 -10 -99 -14 l-92 -7 5 29 c3
				16 12 106 20 199 l16 170 116 173 c64 94 118 170 120 168 2 -2 -15 -163 -38
				-357z m-1118 -18 c-93 -102 -118 -125 -109 -100 3 9 9 41 13 71 4 30 10 60 15
				67 6 10 118 46 154 50 4 1 -28 -39 -73 -88z m579 -21 c-23 -27 -45 -52 -50
				-55 -9 -6 -278 -35 -322 -35 l-29 0 18 31 c10 17 25 37 33 44 13 11 291 59
				373 64 15 1 10 -10 -23 -49z m-1520 -328 c41 -7 20 -14 -344 -120 -214 -62
				-390 -111 -391 -110 -1 2 35 57 80 123 l83 120 263 -3 c145 -2 284 -6 309 -10z"/>
				</g>
			</svg>
		</a>
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
					<a href="#">
						<i class="fas fa-phone-square-alt"></i>
						<p>2664963570</p>
					</a>
				</div>
				<div class="contact-group">
					<a href="#">
						<i class="fas fa-envelope"></i>
						<p>nissi.confecciones.cnc@gmail.com</p>
					</a>
				</div>
				<div class="contact-group">
					<a href="https://www.instagram.com/nissi.confecciones.cnc/" target="_blank">
						<i class="fab fa-instagram"></i>
						<p>Instagram</p>
					</a>
				</div>
			</div>
			<div class="other-pages">
				<h3 class="titleSeparator">Otras páginas</h3>
				<ul class="navFooter">
					<li><a href="/">Inicio</a></li>
					<li><a href="/products">Productos</a></li>
					<li><a href="/about-us">Sobre nosotros</a></li>
					<li><a href="/galery">Galería</a></li>
					<li><a href="/contact-us">Contáctanos</a></li>
				</ul>
			</div>
		</div>
		<div class="copyright">
			<p>&copy; Todos los derechos reservados por Nissi-confecciones 2022</p>
		</div>
	</footer>

	<!-- Font Awesome -->
	<script src="build/js/fontawesome.min.js"></script>
	
	<?php if( $pathInfo == "/galery"): ?>
		<!-- LightBox -->
		<script src="build/js/lightbox-plus-jquery.min.js"></script>
		<!-- Script de configuración -->
		<script>
			lightbox.option({
				'resizeDuration': 400,
				'wrapAround': true,
				'imageFadeDuration': 400,
				'fadeDuration': 400,
				'disableScrolling': true,
				'alwaysShowNavOnTouchDevices': true
			})
		</script>
	<?php endif; ?>
	
	<?php if( $pathInfo == "/products"): ?>
		<script src="build/js/jquery.js"></script>	
	<?php endif; ?>
	<!-- Principal scipt -->
	<script src="build/js/app.js"></script>
	</body>
</html>