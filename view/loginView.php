<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Descripcion, Palabras Claves y Autor -->
	<meta name="description" content="Inventarios de Equipo de Computo">
	<meta name="keywords" content="Inventarios Grupak">
	<meta name="author" content="Armando Huerta Tolentino">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Styles -->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="view/css/bootstrap/bootstrap.min.css">
	<!-- Tabla bootstrap -->
	<link rel="stylesheet" type="text/css" href="view/plug/datatables-plugins/dataTables.bootstrap.css">
	<!-- Tabla bootstrap -->
	<link rel="stylesheet" type="text/css" href="view/plug/datatables-responsive/dataTables.responsive.css">
	<!-- Font awesome CSS -->
	<link rel="stylesheet" type="text/css" href="view/fontawesome-free/css/all.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="view/css/grupak/style.css">
	<!-- Grupak-Blue -->
	<link rel="stylesheet" type="text/css" href="view/css/grupak/grupak-blue.css">
	<!--Favicon Grupak-->
	<link rel="shortcut icon" href="view/img/favicon/grupak-favicon.ico">
	<title>GPSALAS || Salas Grupak</title>
</head>
<body>
	<!-- My Header Start-->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<!-- Logo Grupak -->
					<a href=""><img src="view/img/grupak.png" alt="Grupak Operaciones"></a>
				</div>

				<div class="col-md-4 offset-md-4">
					<div class="list">
						<!--Telefono-->
						<div class="phone">
							<i class="fa fa-phone"></i>Telefono:55 4124- ext.7310
						</div>
						<hr/>
						<!--Email-->
						<div class="email">
							<i class="fa fa-envelope-o"></i>Email: ahuerta@grupak.com.mx
						</div>
						<hr/>
						<!--Direccion-->
						<div class="address">
							<i class="fa fa-home"></i>Carretera Federal Pachuca – Ciudad Sahagun , Tramo Ciudad Sahagun – Emiliano Zapata KM 20 , Municipio Emiliano Zapata, Hidalgo, C.P. 43960
						</div>
					</div>
				</div>

			</div>
		</div>
	</header>
	<!-- .\ End -->

	<div class="bor"></div>
	<!-- Pagina en blanco -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="logreg">
					<div class="row">
						<div class="col-md-12">
							<div class="logreg-page">
								<h3>Iniciar <span class="color">Sesión</span></h3>
								<hr>
								<div class="form">
									<form action="index.php?controller=Login&action=validar" method="post" class="form-horizontal">
										<!-- Usuario -->
										<div class="form-group">
											<label class="control-label col-md-3" for="usuario"><strong>Usuario</strong></label>
											<div class="col-md-9">
												<input type="text" name="usuario" class="form-control">
											</div>
										</div>

										<!--Contraseña -->
										<div class="form-group">
											<label class="control-label col-md-3" for="password"><strong>Contraseña</strong></label>
											<div class="col-md-9">
												<input type="password" name="password" class="form-control">
											</div>
										</div>

										<!--Botones-->
										<div class="form-group">
											<div class="col-md-9 col-md-offset-3">
												<button type="submit" class="btn btn-primary">Iniciar Sesión</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--.\ col-md-12-->
		</div>
	</div>
	

	<div class="bor"></div>
	<!-- Start Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="widget">
						<h4>Responsables de Salas Corporativo</h4>
						<p></p>
						<ul>
							<li><i class="fa fa-angle-right"></i> <a href="#">Araceli Rosas(Sala Oeste)</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="#">Diana Sanchez(Sala Oeste)</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="#">Luana Ursidio(Sala Oeste)</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="#">Nancy Bacao(Sala Tic)</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="#">Oscar Petlacalco(Sala de Capacitación)</a></li>
						</ul>
					</div>
				</div>
				<!-- .\end col-md-4 -->
				<div class="col-md-4">
					<div class="widget">
						<h4>Responsables de Salas Cuernavaca</h4>
						<p></p>
						<ul>
							<li><i class="fa fa-angle-right"></i> <a href="mailto:ifigueroa@grupak.com.mx">Irma Figueroa(Sala de Juntas Direccion Papel)</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="mailto:mnavad@grupak.com.mx">Miguel Angel Nava(Sala de Juntas Papel)</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="mailto:tpm.cuernavaca@grupak.com.mx">Juan Jose Flores(Dominik Tatarka)</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="mailto:mnava@grupak.com.mx">Myra Nava(Sala de Corrugado)</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="mailto:olopez@grupak.com.mx">Oscar Omar López(Sala Jose Gomez)</a></li>
						</ul>
					</div>
				</div>
				<!-- .\end col-md-4 -->
				<div class="col-md-4">
						<div class="widget">
							<h4>Responsables de Salas Toluca</h4>
							<p></p>
							<ul>
								<li><i class="fa fa-angle-right"></i> <a href="#">Benjamin Torres(Sala de Capacitación)</a></li>
								<li><i class="fa fa-angle-right"></i> <a href="#">Dora Benjume(Sala de Juntas Corrugado)</a></li>
								<li><i class="fa fa-angle-right"></i> <a href="#">Dora Benjume(Sala de Dirección Corrugado)</a></li>
								<li><i class="fa fa-angle-right"></i> <a href="#">Daniel Delgado(Sala de Tic)</a></li>
							</ul>
						</div>
				</div>
				<!-- .\end col-md-4 -->
				<div class="col-md-4">
						<div class="widget">
							<h4>Responsables de Salas Hidalgo</h4>
							<p></p>
							<ul>
								<li><i class="fa fa-angle-right"></i> <a href="mailto:arivera@grupak.com.mx">Ariana Rivera (Sala de Juntas)</a></li>
								<li><i class="fa fa-angle-right"></i> <a href="mailto:ysalazar@grupak.com.mx?cc=ddominguez@grupak.com.mx;lrojas@grupak.com.mx">Yessica Salazar (Sala de Capacitación)</a></li>
								<li><i class="fa fa-angle-right"></i> <a href="mailto:ualonso@grupak.com.mx">Ulises Alonso (Sala Tic)</a></li>
								<li><i class="fa fa-angle-right"></i> <a href="mailto:elopez@grupak.com.mx">Edith Lopez (Sala Webex)</a></li>
							</ul>
						</div>
				</div>
				<!-- .\end col-md-4 -->
			</div>
			<!-- .\ row -->

			<div class="row">
				<hr/>
				<div class="col-md-12">
					<div class="copy pull-left">
						<p> Copyright &copy; <a href="#">www.grupak.com.mx</a> | Designed by <a href="#"></a>Ing. Armando Huerta Tolentino</a></p>
					</div>
				</div>
			</div>

		</div>
	</footer>
	<!-- .\ End -->


	<!-- jQuery -->
	<script type="text/javascript" src="view/js/query/jquery-min.js"></script>
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="view/js/bootstrap/bootstrap.min.js"></script>
	<!-- DATA TABLES -->
	<script type="text/javascript" src="view/plug/datatables/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="view/plug/datatables-plugins/dataTables.bootstrap.js"></script>
	<script type="text/javascript" src="view/plug/datatables-responsive/dataTables.responsive.js"></script>
</body>
</html>