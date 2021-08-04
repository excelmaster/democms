<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>OME Cursos</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/fontawesome-free/css/all.min.css'); ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('public/assets/dist/css/adminlte.min.css'); ?>">
	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="layout-top-nav" style="background-image: url('<?php echo base_url('public/img/teens/template/bcg_template.jpg'); ?>');">
	<div class="wrapper">

		<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
			<div class="container">
				<a href="https://mundoeducativodigital.com/" class="navbar-brand" target="_blank">
					<img src="<?php echo base_url('public/img/kids/template/logo.PNG'); ?>" alt="www.mundoeducativodigital.com" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light">mundo educativo digital</span>
				</a>
			</div>
		</nav>

		<!-- Main Sidebar Container -->


		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper bg-transparent">
			<!-- Content Header (Page header) -->
			<div class="content-header">
				<div class="container">
					<div class="row mb-12 bg-white">
						<div class="col-sm-12">
							<h1 class="m-0 text-center"> SITIO DE DEMOSTRACIÓN </h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content-header -->

			<!-- Main content -->
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="card card-primary card-outline">
								<div class="card-body">
									<div class="card-header">
										<h3>ESTOS SON LOS CURSOS QUE TE OFRECEMOS</h3>
									</div>
									<p class="card-text">
										Te invitamos a que ingreses a cualquiera de los cursos y veas lo divertido que es aprender con nosotros. Vamos, no te tardes!
									</p>
									<div class="row">
										<div class="col-md-12 col-lg-6 col-xl-6">
											<div class="card mb-2 bg-gradient-dark">
												<a href="<?php echo base_url('courses/kids'); ?>">
													<img style="height: 400px;" class="card-img-top" src="<?php echo base_url('public/img/kids/template/bcg_template.jpg'); ?>" alt="Dist Photo 1">
													<div class="card-img-overlay d-flex flex-column justify-content-end">
														<h5 class="card-title text-primary text-white bg-gradient-navy text-center">World English For Kids</h5>
														<p class="card-text text-white pb-2 pt-1 bg-gradient-navy text-center">Vamos a aprender inglés en este mundo lleno de juegos y diversión</p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-md-12 col-lg-6 col-xl-6">
											<div class="card mb-2 bg-gradient-dark">
												<a href="<?php echo base_url('courses/kids'); ?>">
													<img style="height: 400px;" class="card-img-top" src="<?php echo base_url('public/img/teens/template/bcg_template.jpg'); ?>" alt="Dist Photo 2">
													<div class="card-img-overlay d-flex flex-column justify-content-end">
														<h5 class="card-title text-primary text-white bg-gradient-navy text-center">World English For Teenagers</h5>
														<p class="card-text text-white pb-2 pt-1 bg-gradient-navy text-center">Un curso muy ameno para jóvenes y adultos</p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div><!-- /.card -->
						</div>
					</div>
					<!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar collapsed control-sidebar-dark" style="display: none;">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->

		<!-- Main Footer -->
		<footer class="main-footer">
			<!-- To the right -->
			<div class="float-right d-none d-sm-inline">
				Tecnología para la educación
			</div>
			<!-- Default to the left -->
			<strong>Copyright © 2020-2021 <a href="https://mundoeducativodigital.com/">Mundo Educativo Digital</a>.</strong> All rights reserved.
		</footer>
		<div id="sidebar-overlay"></div>
	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->

	<!-- jQuery -->
	<script src="<?php echo base_url('public/assets/plugins/jquery/jquery.min.js'); ?>"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('public/assets/dist/js/adminlte.min.js'); ?>"></script>
	<script>
		function updateIframe() {
			alert('boton clickeado');
			var mdlusername = $("#ifrLogin").contents().find('#username');
			console.log(mdlusername);
			var txtUsername = $('#username').val();
			alert(txtUsername);
			mdlusername.text(txtUsername);
		}
	</script>


</body>




</html>