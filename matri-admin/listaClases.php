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
              <h1 class="all-tittles">Sistema de matrícula <small>   Administración de Secciones</small></h1>
            </div>
        </div>
        
		<div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../matri-landingpage/assets/img/section.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    En este apartado se podrá ver el listado de secciones por facultad 
                </div>
            </div>
		</div>
		<div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                      <li><a  href="section.html" >Nueva sección</a></li>
                      <li class="active">Listado de Secciones</li>
                    </ol>
                </div>
            </div>
        </div>
		<div class="container-fluid" style="margin: 0 0 50px 0;">
                <form class="pull-right" style="width: 30% !important;" autocomplete="off">
                    <div class="group-material">
                        <input type="search" style="display: inline-block !important; width: 70%;" class="material-control tooltips-general" placeholder="Buscar sección" required="" pattern="[a-zA-ZáéíóúÁÉÍÓÚ ]{1,50}" maxlength="50" data-toggle="tooltip" data-placement="top" title="Escribe los nombres, sin los apellidos">
                        <button class="btn" style="margin: 0; height: 43px; background-color: transparent !important;">
                            <i class="zmdi zmdi-search" style="font-size: 25px;"></i>
                        </button>
                    </div>
                </form>
                <h2 class="text-center all-tittles" style="margin: 25px 0; clear: both;">Facultades</h2>
                <ul class="list-unstyled text-center list-catalog-container">
                    <li class="list-catalog">Ingeniería</li>
                    <li class="list-catalog">Ciencias</li>
                    <li class="list-catalog">Ciencias Económicas</li>
                    <!--<li class="list-catalog"></li>-->
                </ul>
            </div>
            <div class="container-fluid">
                <h2 class="text-center all-tittles">Listado de Secciones</h2>
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list" style="background-color:#DFF0D8; font-weight:bold;">
                                <div class="div-table-cell" style="width: 9%;">Código</div>
                                <div class="div-table-cell" style="width: 10%;">Hora inicio</div>
                                <div class="div-table-cell" style="width: 10%;">Hora final</div>
                                <div class="div-table-cell" style="width: 13%;">Días</div>
                                <div class="div-table-cell" style="width: 9%;">Cupos</div>
                                <div class="div-table-cell" style="width: 9%;">Aula</div>
                                <div class="div-table-cell" style="width: 15%;">Asignatura</div>
                                <div class="div-table-cell" style="width: 15%;">Maestro</div>
                                <div class="div-table-cell" style="width: 8%;">Eliminar</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <div class="div-table" style="margin:0 !important;">
                        <div class="div-table-row div-table-row-list">
                            <div class="div-table-cell" style="width: 9%;">Código</div>
                            <div class="div-table-cell" style="width: 10%;">Hora inicio</div>
                            <div class="div-table-cell" style="width: 10%;">Hora final</div>
                            <div class="div-table-cell" style="width: 13%;">Días</div>
                            <div class="div-table-cell" style="width: 9%;">Cupos</div>
                            <div class="div-table-cell" style="width: 9%;">Aula</div>
                            <div class="div-table-cell" style="width: 15%;">Asignatura</div>
                            <div class="div-table-cell" style="width: 15%;">Maestro</div>
                            <div class="div-table-cell" style="width: 8%;">
                                <button class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pagination pagination-sm">
                    <li class="disabled"><a href="#!">«</a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li><a href="#!">2</a></li>
                    <li><a href="#!">3</a></li>
                    <li><a href="#!">4</a></li>
                    <li><a href="#!">5</a></li>
                    <li><a href="#!">»</a></li>
              </ul>
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