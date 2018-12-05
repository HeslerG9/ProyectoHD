<!DOCTYPE html>
<html lang="es">
<head>
	<title>Carreras</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../matri-landingpage/css/main.css">
	<link href="../matri-landingpage/img/unah10.png" rel="icon">
</head>
<body>
	
	<?php
    include("sidebar.html")
    ?>
		<!-- Content page-->
		<section class="full-box dashboard-contentPage">
			<!-- NavBar -->
			<nav class="full-box dashboard-Navbar">
				<ul class="full-box list-unstyled text-right">
					<li class="pull-left">
						<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
					</li>
					<li>
						<a href="#!" class="btn-Notifications-area">
							<i class="zmdi zmdi-notifications-none"></i>
							<span class="badge">2</span>
						</a>
					</li>
					<li>
						<a href="#!" class="btn-search">
							<i class="zmdi zmdi-search"></i>
						</a>
					</li>
					
				</ul>
			</nav>
		
		<!-- Content page -->
		<div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Sistema de matrícula <small>   Administración de carreras</small></h1>
            </div>
		</div>
		<!--
		<div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nueva sección</li>
                      <li><a href="listsection.html">Listado de secciones</a></li>
                    </ol>
                </div>
            </div>
		</div>
		-->
		<div class="container-fluid"  style="margin: 50px 0;">
				<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-3">
					<img src="../matri-landingpage/assets/img/institution.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
				</div>
					<div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
					Registrar una Nueva Carrera con el siguiente formulario
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 lead">
					<ol class="breadcrumb">
					  <li class="active">Nueva carrera</li>
					  <li><a href="listCareer.html">Listado de carreras</a></li>
					</ol>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="container-flat-form">
				<div class="title-flat-form title-flat-blue">Registrar una nueva carrera</div>
				<form autocomplete="off">
					<div class="row">
					   <div class="col-xs-12 col-sm-8 col-sm-offset-2">
						   <legend>Datos de las carreras</legend>
						   <br><br>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="ID de carrera" id="codigoCarrera" required="required" maxlength="6" data-toggle="tooltip" data-placement="top" title="Id carrera">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>ID</label>
							</div>						
    						<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Código centro de Estudio" id="codigoCentroEstudio" required="required" maxlength="10" data-toggle="tooltip" data-placement="top" title="codigo alterno">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Código centro de Estudio</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Nombre de la carrera" id="nombreCarrera" required="required"  maxlength="50" data-toggle="tooltip" data-placement="top" title="Carrera">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Nombre de la carrera</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Código facultad" id="codigoFacultad" required="required" maxlength="10" data-toggle="tooltip" data-placement="top" title="codigo alterno">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Código facultad</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Código Departamento" id="codigoDepartamento" required="required" maxlength="10" data-toggle="tooltip" data-placement="top" title="codigo alterno">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Código Departamento</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Cantidad de asignaturas" id="CantidadAsignaturas" required="required"  maxlength="3" data-toggle="tooltip" data-placement="top" title="Cantidad de asignaturas">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Cantidad de asignaturas</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Cantidad de UV" id="CantidadUv" required="required"  maxlength="3" data-toggle="tooltip" data-placement="top" title="UV">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Cantidad de unidades valorativas</label>
							</div>
							<div class="group-material">
									<input type="text" class="material-control tooltips-general" placeholder="Grado" required="required" id="Grado" maxlength="50" data-toggle="tooltip" data-placement="top" title="grado">
									<span class="highlight"></span>
									<span class="bar"></span>
									<label>Grado</label>
								</div>
							<p class="text-center">
								<button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> Limpiar</button>
								<button type="button" id="btn-RegistrarCarrera" class="btn btn-primary"><i ></i> Guardar</button>
							</p> 
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

   <script>$("#btn-RegistrarCarrera").click(function(){
	$("#loading").fadeIn(50);
	var parametros =`codigoCarrera=${$("#codigoCarrera").val()}&codigoCentroEstudio=${$("#codigoCentroEstudio").val()}&nombreCarrera=${$("#nombreCarrera").val()}&codigoFacultad=${$("#codigoFacultad").val()}&codigoDepartamento=${$("#codigoDepartamento").val()}&CantidadAsignaturas=${$("#CantidadAsignaturas").val()}&CantidadUv=${$("#CantidadUv").val()}&Grado=${$("#Grado").val()}`;

	console.log("El cliente envía esta información: "+parametros);

	
		}
	);
</script>
	

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notificationes <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
		</div>
	</section>
	<!--====== Scripts -->
	<script src="js/controlador.js"></script>
	<script src="../matri-landingpage/js/jquery-3.1.1.min.js"></script>
	<script src="../matri-landingpage/js/sweetalert2.min.js"></script>
	<script src="../matri-landingpage/js/bootstrap.min.js"></script>
	<script src="../matri-landingpage/js/material.min.js"></script>
	<script src="../matri-landingpage/js/ripples.min.js"></script>
	<script src="../matri-landingpage/js/jquery.mCustomScrollbar.concat.min.js"></script>

	<script>
		$.material.init();
	</script>
</body>
</html>