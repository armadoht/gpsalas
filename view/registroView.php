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
					<a href="#"><img src="view/img/grupak.png" alt="Grupak Operaciones"></a>
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
				<h3>Bienvenido al Formulario de Registro: <?php echo $_SESSION['user']; ?>@grupak.com.mx</h3>
			</div>
			<div class="col-md-12">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link active" href="index.php?controller=Login&action=readLoad">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?controller=main&action=index">Salir de la pagina</a>
					</li>
				</ul>
			</div>
			<!--.\ col-md-12-->
			<div class="col-md-12">
				<div class="form">
					<form action="index.php?controller=Login&action=registroPropio" method="post" class="form-horizontal">
						<div class="form-row">
							<!-- Tema -->
							<div class="form-group col-md-6">
								<label for="Tema"><strong>Tema:</strong></label>
								<input type="text" name="tema" class="form-control" class="form-control">
							</div>
							<!-- Puesto -->
							<div class="form-group col-md-6">
								<label for="localidad"><strong>Sala Responsable:</strong></label>
								<select class="form-control" name="sala">
						      <?php
						      	if(is_array($datosSalas)){
						      		foreach ($datosSalas as  $value) {
						      			echo "<option value='".$value[0]."'>".$value[1]."</option>";
						      		}
						      	}
						      ?>
					    	</select>
							</div>
							<!-- Departamento -->
							<div class="form-group col-md-4">
								<label for="Sala"><strong>Localidad:</strong></label>
								<select class="form-control" name="localidad">
						      <?php
						      	if(is_array($datosSalas)){
						      		foreach ($datosSalas as  $value) {
						      			echo "<option value='".$value[2]."'>".utf8_encode($value[3])."</option>";
						      		}
						      	}else{
						      			echo "<option>Error</option>";
						      	}
						      ?>
					    	</select>
							</div>
							<!-- Marca -->
							<div class="form-group col-md-4">
								<label for="Marca"><strong>Fecha:</strong></label>
								<input type="date" name="fecha" class="form-control" placeholder="YYY-MM-DD">
							</div>
							<!-- Modelo -->
							<div class="form-group col-md-4">
								<label for="Modelo"><strong>Hora Inicio</strong></label>
								<input type="time" name="horaInicio" class="form-control" placeholder="24 hrs 15:00">
							</div>
							<!-- Service Tag-->
							<div class="form-group col-md-4">
								<label for="numeroSerie"><strong>Hora Fin</strong></label>
								<input type="time" name="horaFin" class="form-control" placeholder="24 hrs 15:00">
							</div>
							<!-- Tipo Equipo -->
							<div class="form-group col-md-8">
								<label for="TipoEquipo"><strong>Solicitante</strong></label>
								<input type="text" name="tipoEquipo" class="form-control">
							</div>
							
							<div class="form-group col-md-12 ">
								<button type="submit" class="btn btn-warning btn-lg btn-block">Guardar Registro</button>
							</div>
							
						</div>

					</form>
				</div>
			</div>

		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
					<thead>
						<th>Item</th>
						<th>Tema</th>
						<th>Lugar</th>
						<th>Sala</th>
						<th>Fecha</th>
						<th>Reservado por</th>
						<th>Estatus</th>
						<th>Eliminar</th>
					</thead>
					<tbody>
						<?php
							if(is_array($datosRegistros)){
								$cont = 1;
									foreach ($datosRegistros as $valor) {
									echo "<tr>";
									//echo "<th>".$valor[0]."</th>";
									echo "<th>".$cont."</th>";
									echo "<th>".$valor[1]."</th>";
									echo "<th>".$valor[2]."</th>";
									echo "<th>".$valor[3]."</th>";
									echo "<th>Fecha: ".$valor[4]." De ".$valor[5]." a ".$valor[6]."</th>";
									echo "<th>".$valor[7]."</th>";
									if($valor[8] == 1){
										echo "<th>Activo</th>";
									}else{
										echo "<th>Baja</th>";
									}
									/**Desarrollando 
									echo "<th>";
									echo "<a href='index.php?controller=Login&action=update&valor=".$valor[0]."'><i class='fas fa-pen'></i></a>";
									echo "</th>";
									**/
									echo "<th>";
									echo "<a href='index.php?controller=Login&action=delet&valor=".$valor[0]."''><i class='far fa-trash-alt'></i></a>";
									echo "</th>";
		
									echo "</tr>";
									$cont++;
								}
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	

	<div class="bor"></div>
	<!-- Start Footer -->
	<?php include('footer.php');?>
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