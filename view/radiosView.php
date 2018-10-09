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
	<title>Inventario de Equipo de Computo</title>
</head>
<body>
	<!-- My Header Start-->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<!-- Logo Grupak -->
					<a href="index.php"><img src="view/img/grupak.png" alt="Grupak Operaciones"></a>
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
							<i class="fa fa-home"></i>Dirección: Av. Atlacomulco No. 117 -A
							Col. Chapultepec. Cuernavaca, Morelos. C.P. 62450
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
					<h3 class="text-center"><span>Inventario de Radios 2018!</span></h3>
				</div>
			</div>
		</div>
	</div>

	<!-- Tabla de Radios-->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
					<thead>
						<th scope="col">Item</th>
						<th scope="col">Usuario</th>
						<th scope="col">Puesto</th>
						<th scope="col">Departamento</th>
						<th scope="col">Marca</th>
						<th scope="col">Modelo</th>
						<th scope="col">Service Tag</th>
						<th scope="col">Tipo de Equipo</th>
						<th scope="col">No Factura</th>
						<th scope="col">No Activo Fijo</th>
					</thead>
					<tbody>
						<?php
							if(is_array($allRadios)){
									foreach ($allRadios as $radio) {
									echo "<tr>";
									echo "<th>".$radio->idRadio."</th>";
									echo "<th>".$radio->usuario."</th>";
									echo "<th>".$radio->puesto."</th>";
									echo "<th>".$radio->departamento."</th>";
									echo "<th>".$radio->marca."</th>";
									echo "<th>".$radio->modelo."</th>";
									echo "<th>".$radio->numeroSerie."</th>";
									echo "<th>".$radio->tipoEquipo."</th>";
									echo "<th>".$radio->numeroFactura."</th>";
									echo "<th>".$radio->numeroActivo."</th>";
									echo "</tr>";
								}
							}
						?>
					</tbody>
				</table>
				<!--End Table-->
			</div>
		</div>
	</div>

	<!--Formulario de Alta-->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero">
					<h3><span>Formulario Radios</span></h3>
				</div>
			</div>
			<div class="col-md-12">
				<form action="<?php echo $helper->url("radios","crear"); ?>" method="post">
					<div class="form-row">
						<!-- Usuario -->
						<div class="form-group col-md-4">
							<label for="Usuario"><strong>Nombre Completo:</strong></label>
							<input type="text" name="usuario" class="form-control" class="form-control">
						</div>
						<!-- Puesto -->
						<div class="form-group col-md-4">
							<label for="Puesto"><strong>Puesto Actual:</strong></label>
							<input type="text" name="puesto" class="form-control">
						</div>
						<!-- Departamento -->
						<div class="form-group col-md-4">
							<label for="Departamento"><strong>Departamento:</strong></label>
							<input type="text" name="departamento" class="form-control">
						</div>
						<!-- Marca -->
						<div class="form-group col-md-4">
							<label for="Marca"><strong>Marca:</strong></label>
							<input type="text" name="marca" class="form-control">
						</div>
						<!-- Modelo -->
						<div class="form-group col-md-4">
							<label for="Modelo"><strong>Modelo:</strong></label>
							<input type="text" name="modelo" class="form-control">
						</div>
						<!-- Service Tag-->
						<div class="form-group col-md-4">
							<label for="numeroSerie"><strong>N/Serie:</strong></label>
							<input type="text" name="numeroSerie" class="form-control">
						</div>
						<!-- Tipo Equipo -->
						<div class="form-group col-md-4">
							<label for="TipoEquipo"><strong>Tipo de Equipo:</strong></label>
							<input type="text" name="tipoEquipo" class="form-control">
						</div>
						<!-- Factura -->
						<div class="form-group col-md-4">
							<label for="Factrua"><strong>Numero de Factura</strong></label>
							<input type="text" name="factura" class="form-control">
						</div>
						<!-- No Activo Fijo -->
						<div class="form-group col-md-4">
							<label for="Activo"><strong>Numero de Activo Fijo</strong></label>
							<input type="text" name="activo" class="form-control">
						</div>
						<!--  No Activo Fijo 
						<div class="form-group col-md-6">
							<label for="Activo"><strong>Numero de Activo Fijo</strong></label>
							<input type="text" name="Activo Fijo" class="form-control">
						</div> -->
						<div class="form-group col-md-12 ">
							<button type="submit" class="btn btn-warning btn-lg btn-block">Guardar Registro</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
	<!-- Start Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<!-- Widget 1 -->
					<div class="widget">
						<h4>Acerca de nosotros</h4>
						<p></p>
						<ul>
							<li><i class="fa fa-angle-right"></i> <a href="#">Ing. Ricardo Rodriguez.</a></li>
							<li><i class="fa fa-angle-right"></i> <a href="#">Ing. Armando Huerta</a></li>
						</ul>
					</div>
				</div>
				<!-- .\end col-md-4 -->
			</div>

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
	<script>
		$(document).ready(function() {
		  $('#dataTables-example').DataTable({
		    responsive: true
		  });
		});
  </script>

</body>
</html>