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
	<!-- Table -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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
	
	<!-- Pagina en blanco -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero">
					<h2><span>Reservación de Salas Grupak Operaciones.</span></h2>
					<div class="bor"></div>
					<p></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7">
				<h4>Esta plataforma tiene como objetivo, facilitar el apartado de las salas del Grupo.</h4>
				<div class="button">
					<a href="index.php?controller=Login&action=login"><i class="fa fa-sign-in"></i> Iniciar Sesión</a>
				</div>
			</div>
			<div class="col-md-5">
				<img height="300" width="400" src="view/img/sala/main.jpg">
			</div>
		</div>
	</div>

	<div class="bor"></div>
<h3 class="text-center">Lista de Salas Ocupadas</h3>
	<!-- Table Salas -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped" id="myTable">
					<thead>
						<th>No</th>
						<th>Tema</th>
						<th>Lugar</th>
						<th>Sala</th>
						<th>Fecha</th>
						<th>Reservado por</th>
						<th>Estatus</th>
					</thead>
					<tbody>
						<?php
							if(is_array($datosArray)){
									foreach ($datosArray as $valor) {
									echo "<tr>";
									echo "<th>".$valor[0]."</th>";
									echo "<th>".$valor[1]."</th>";
									echo "<th>".$valor[2]."</th>";
									echo "<th>".$valor[3]."</th>";
									echo "<th>Fecha: ".$valor[4]." De".$valor[5]." a ".$valor[6]."</th>";
									echo "<th>".$valor[7]."</th>";
									if($valor[8] == 1){
										echo "<th>Activo</th>";
									}else{
										echo "<th>Baja</th>";
									}
									echo "</tr>";
								}
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!-- Start Footer -->
	<?php include('footer.php'); ?>
	<!-- .\ End -->

	<!-- jQuery -->
	<script type="text/javascript" src="view/js/query/jquery-min.js"></script>
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="view/js/bootstrap/bootstrap.min.js"></script>
	<!-- DATA TABLES -->
	<!-- DATA TABLES -->
	<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
    </script>
</body>
</html>