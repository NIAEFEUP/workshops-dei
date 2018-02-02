<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Workshop Scheduler</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_bloginfo('template_directory'); ?>/style.css" />
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
</head>

<body>
	<header>
		<img alt="Logo" src="<?php echo get_bloginfo('template_directory'); ?>/assets/logo.png">
		<nav>
			<a class="title" href="estudantes.html">Estudantes</a>
			<a class="title" href="docentes.html">Docentes</a>
			<a class="title" href="palestrantes.html">Palestrantes</a>
		</nav>
	</header>

	<main>
		<div>
			<article>
				<div class="info">
					<h3>uc</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec gravida enim ut porttitor maximus. Nullam hendrerit,
						quam at porttitor vulputate.</p>
					<section>
						<span>
							<i class="far fa-calendar-alt"></i>00/00/0000</span>
						<span>
							<i class="far fa-clock"></i>00h00</span>
						<span>
							<i class="fas fa-user"></i>John Doe</span>

					</section>
				</div>
				<input type="button" value="Select">
			</article>
		</div>
	</main>

	<footer>
		<span>© 2018 Departamento de Informática</span>
		<img id="logo_ni" alt="NIAEFEUP" src="<?php echo get_bloginfo('template_directory'); ?>/assets/niaefeup.png">
		<img id="logo_ieee" alt="IEEE" src="<?php echo get_bloginfo('template_directory'); ?>/assets/ieee.png">
	</footer>

</body>

</html>