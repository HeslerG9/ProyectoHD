<!DOCTYPE html>
<html lang="es">
<head>
	<title>Sistema de matrícula</title>
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
              <h1 class="all-tittles">Sistema de matrícula <small>   Administración de docentes</small></h1>
            </div>
        </div>
        <div class="conteiner-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
                <li role="presentation"><a href="admin.html">Administradores</a></li>
                <li role="presentation"><a href="teacher.html">Docentes</a></li>
                <li role="presentation" class="active"><a href="student.html">Estudiantes</a></li>
                <li role="presentation"><a href="personal.html">Personal administrativo</a></li>
            </ul>
        </div>
		<div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../matri-landingpage/assets/img/user.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    En esta sección se podrá registrar a los usuarios con atributos de docentes
                </div>
            </div>
		</div>
		<div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li class="active">Nuevo docente</li>
                      <li><a href="listTeacher.html">Listado de docentes</a></li>
                    </ol>
                </div>
            </div>
        </div>
		<div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Registrar un nuevo docente</div>
                <form autocomplete="off">
                    <div class="row">
                       <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                           <legend>Datos del docente</legend>
                           <br><br>
                           <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Código de persona" pattern="[0-9]{1,10}" required="required" maxlength="10" data-toggle="tooltip" data-placement="top" title="codigo de persona">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>ID</label>
							</div>
						
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Nombres del docente" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Nombres del docente">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Nombres</label>
                            </div>
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Apellidos del docente" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Apellidos del docente">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Apellidos</label>
                            </div>
                           
                            <div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Número de identidad" pattern="^[1|0]\d{12,12}$" required="required" maxlength="13" data-toggle="tooltip" data-placement="top" title="Solamente 13 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Número de identidad</label>
                            </div>
                            <div class="group-material">
                                <input type="email" class="material-control tooltips-general" placeholder="Correo electrónico" required=""  data-toggle="tooltip" data-rule="email" data-placement="top" id="email" data-msg="Ingresar correo electronico valido" title="correo electronico">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Correo electrónico</label>
                            </div>
                            <div class="group-material">
                                <input type="tel" class="material-control tooltips-general" placeholder="Teléfono" pattern="^[9|8|3|2]\d{7,7}$" required="" maxlength="8" data-toggle="tooltip" data-placement="top" title="Solamente 8 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Teléfono</label>
							</div>
							<div class="group-material">
                                <input type="text" class="material-control tooltips-general check-representative" placeholder="Dirección donde vive" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{6,200}" maxlength="200" required="" data-toggle="tooltip" data-placement="top" >
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Dirección</label>
							</div>
							<div class="group-material">
                                <input type="date" class="material-control tooltips-general check-representative" placeholder="Fecha de nacimiento" pattern="[0-9]{10,10}" required="required" maxlength="10" data-toggle="tooltip" data-placement="top" >
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Fecha de nacimieto</label>
							</div>
							<div class="group-material">
                                <input type="text" class="material-control tooltips-general" placeholder="Número de empleado" pattern="^[2|1]\d{2,2}$" required="required" maxlength="3" data-toggle="tooltip" data-placement="top" title="Solamente 11 números">
                                <span class="highlight"></span>
                                <span class="bar"></span>
								<label>Número de empleado</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Contraseña" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{6,20}" maxlength="20" required="required" data-toggle="tooltip" data-placement="top" title="Solamente 20 caracteres">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Contraseña</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Campus" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{6,20}" maxlength="20" required="required" data-toggle="tooltip" data-placement="top" title="Solamente 20 caracteres">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Campus</label>
							</div>
							<div class="group-material">
								<input type="text" class="material-control tooltips-general" placeholder="Especialización" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{6,20}" maxlength="60" required="required" data-toggle="tooltip" data-placement="top" title="Solamente 60 caracteres">
								<span class="highlight"></span>
								<span class="bar"></span>
								<label>Especialización</label>
							</div>
							<div class="group-material">
									<input type="text" class="material-control tooltips-general" placeholder="Título" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{6,20}" maxlength="60" required="required" data-toggle="tooltip" data-placement="top" title="Solamente 60 caracteres">
									<span class="highlight"></span>
									<span class="bar"></span>
									<label>Título</label>
								</div>
							<div class="group-material">
									<span>Genero</span>
									<select class="material-control tooltips-general" data-toggle="tooltip" required="required" data-placement="top" title="Elige un genero">
										<option value="" disabled="" selected="">Selecciona un genero</option>
										<option value="seccion">Masculino</option>
										<option value="seccion">Femenino</option>
									</select>
							</div>
							<div class="group-material">
								<span>Estado civil</span>
								<select class="material-control tooltips-general" data-toggle="tooltip" required="required" data-placement="top" title="Elige una opción">
									<option value="" disabled="" selected="">Selecciona una opción</option>
									<option value="seccion">Casado</option>
									<option value="seccion">Soltero</option>
								</select>
							</div>
								
							
                            <p class="text-center">
                                <button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
                                <button type="button" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
                            </p> 
                       </div>
                    </div>
                </form>
            </div>
        </div>
	
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notificationes <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			

		</div>
	</section>
	<!--====== Scripts -->
	<script src="../matri-landingpage/js/jquery-3.1.1.min.js"></script>
	<script src="../matri-landingpage/js/sweetalert2.min.js"></script>
	<script src="../matri-landingpage/js/bootstrap.min.js"></script>
	<script src="../matri-landingpage/js/material.min.js"></script>
	<script src="../matri-landingpage/js/ripples.min.js"></script>
	<script src="../matri-landingpage/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="../matri-landingpage/js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>