<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
			<title>LSPD ~ AÑADIR REGISTRO</title>
			<!-- BOOTSTRAP CORE STYLE  -->
			<link href="assets/css/bootstrap.css" rel="stylesheet" />
			<!-- FONT AWESOME STYLE  -->
			<link href="assets/css/font-awesome.css" rel="stylesheet" />
			<!-- CUSTOM STYLE  -->
			<link href="assets/css/style.css" rel="stylesheet" />
			<!-- GOOGLE FONT -->
			<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		</head>
		<?php include( "config.php"); session_start(); if (isset($_SESSION[ 'id'])) { echo '

<body>
<div class="navbar navbar-inverse set-radius-zero" >
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">
				<img src="assets/img/lspdlogo.png" width=80 height=80/>
			</a>
		</div>
		<div class="right-div">
			<a href="logout.php" class="btn btn-danger pull-right">CERRAR SESIÓN</a>
		</div>
	</div>
</div>
			<section class="menu-section">
				<div class="container">
					<div class="row ">
						<div class="col-md-12">
							<div class="navbar-collapse collapse ">
								<ul id="menu-top" class="nav navbar-nav navbar-right">
									<li>
										<a href="index.php">INICIO</a>
									</li>
									<li>
										<a href="add_criminal.php" class="menu-top-active">NUEVO REGISTRO</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			"Nada por aquí... ¿Seguro que estás haciendo bien tu trabajo?"center>
			<div class="panel panel-info">
				<div class="panel-heading">
					<p></p>
					<p></p>NUEVO REGISTRO
					<p></p>
					<p></p>
				</div>
				<div class="panel-body">
					<form action="add_criminal_post.php" method="post">
						<p>
							<div class="form-group">
								<label for="nom">NOMBRE Y APELLIDOS</label> :
								<p class="help-block">EJEMPLO: CHRISTIAN JEFFERSON</p>
								<input type="text" name="nombre" id="nombre" class="form-control"/>
								<br />
							</div>
							<div class="form-group">
								<label for="message">CRIMEN</label> :
								<p class="help-block">EJEMPLO: ROBO / ATENTADO / INTENTO DE HOMICIDIO</p>
								<input type="text" name="crimen" id="crimen" class="form-control"/>
								<br />
							</div>
							<div class="form-group">
								<label for="message">SANCIÓN</label> :
								<p class="help-block">EJEMPLO: 9.000$ + 6 MESES DE CARCEL</p>
								<input type="text" name="sancion" id="sancion" class="form-control" />
								<br />
							</div>
							<input type="submit" value="ENVIAR" class="btn btn-info />
						</p>
					</form>
					<p></p>
					<img src="https://image.noelshack.com/fichiers/2015/40/1443969486-lspd-logo-modern-2.png" align="center">
					</div>
				</center>
				</div>
				<section class="footer-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
                   &copy; <a href="https://.truelife.es" target="_blank"  > TRUELIFE</a>
							</div>
						</div>
					</div>
				</section>
				<script src="assets/js/jquery-1.10.2.js"></script>
				<script src="assets/js/bootstrap.js"></script>
			</body>'; } else { header( "Location: login.php"); } ?>
		</html>
