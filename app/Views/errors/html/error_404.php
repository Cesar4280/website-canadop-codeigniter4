<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css') ?>">
	<title>404 Page Not Found</title>
	<style>
		body {
			background: url(https://cdn.pixabay.com/photo/2015/03/26/09/43/dog-690176_960_720.jpg) no-repeat;
			background-size: cover;
			background-attachment: fixed;
		}

		.text-404 {
			font-size: 6.5rem;
		}

		.fw-600 {
			font-weight: 600;
		}

		.row>.text-md-end {
			border-right: .18rem solid white;
		}

		@media (max-width: 767px) {
			.row>.text-md-end {
				border: 0 !important;
			}

			body {
				background-position: 50% 100%;
			}
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a href="<?php echo site_url() ?>" class="navbar-brand">EN MANTENIMIENTO...</a>
		</div>
	</nav>

	<div class="position-absolute text-center top-50 start-50 translate-middle">
		<div class="row text-light">
			<div class="col-md-6 align-self-center text-md-end">
				<h1 class="text-404 fw-600">404</h1>
			</div>
			<div class="col-md-6 align-self-center text-md-start">
				<h1 class="fw-600 fs-3">Ups..<br>La página no ha sido encontrada</h1>
			</div>
		</div>
		<div class="container mt-4">
			<a href="<?php echo site_url() ?>" class="text-decoration-none fw-light text-light small">Volver a la página de inicio</a>
		</div>
	</div>
</body>

</html>