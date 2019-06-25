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
				<h3>Bienvenido Administrador del Sistema: <?php echo $_SESSION['user']; ?>@grupak.com.mx</h3>
			</div>
			<div class="bor"></div>
			<div class="col-md-12">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link active" href="index.php?controller=Login&action=readLoad">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?controller=sala&action=index">Registro de Salas del Grupo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?controller=sala&action=asignar">Asignar Salas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="index.php?controller=main&action=index">Salir</a>
					</li>
				</ul>
			</div>
			<!--.\ col-md-12-->
		</div>
		<!-- Registro de Responsables -->
		<div class="bor"></div>
		<div class="row">
			<div class="col-md-12">
				<h3>Registro de Responsables de Sala</h3>
				<form action="index.php?controller=Login&action=registro" method="post">
					<div class="form-row">
						<!-- Usuario -->
						<div class="form-group col-md-4">
							<label for="Usuario"><strong>Usuario</strong></label>
							<input type="text" name="usuario" class="form-control" class="form-control">
						</div>
						<!-- Puesto -->
						<div class="form-group col-md-4">
							<label for="Puesto"><strong>Email</strong></label>
							<input type="text" name="email" class="form-control">
						</div>
						<!-- Departamento -->
						<div class="form-group col-md-4">
							<label for="Departamento"><strong>Password</strong></label>
							<input type="text" name="password" class="form-control">
						</div>
						<!-- Boton de Guardar -->
						<div class="form-group col-md-12 ">
							<button type="submit" class="btn btn-warning btn-lg btn-block">Guardar Registro</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!--\row-->
		<div class="bor"></div>
		<!-- Registro de Salas -->
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped" id="myTable">
					<thead>
						<th scope="col">Item</th>
						<th scope="col">Usuario</th>
						<th scope="col">Email</th>
						<th scope="col">Password</th>
						<th scope="col">Fecha de Registro</th>
						<th scope="col">Estado</th>
					</thead>
					<a href=""></a>
					<tbody>
						<?php
							if(is_array($arrayUsuarios)){
									foreach ($arrayUsuarios as $usuario) {
									echo "<tr>";
									echo "<th>".$usuario->idAcceso."</th>";
									echo "<th>".$usuario->usuario."</th>";
									echo "<th>".$usuario->email."</th>";
									echo "<th>".$usuario->password."</th>";
									echo "<th>".$usuario->fechaRegistro."</th>";
									if($usuario->estado == 1){
										echo '<th><a href="">Activo</a></th>';
									}else{
										echo '<th><a href="">Baja</a></th>';
									}
									echo "</tr>";
								}
							}
						?>
					</tbody>
				</table>
				<!--End Table-->
			</div>
		</div>
		<!--\row-->
	</div>
	

	<div class="bor"></div>
	<?php include('footer.php'); ?>

	<!-- jQuery -->
	<script type="text/javascript" src="view/js/query/jquery-min.js"></script>
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="view/js/bootstrap/bootstrap.min.js"></script>
	<!-- DATA TABLES -->
	<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
            $(document).ready( function () {
                $('#myTable').DataTable();
            } );
    </script>
</body>
</html>