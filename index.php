<!DOCTYPE html >
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ACTIVIDAD 2</title>
	<link href="https://fonts.googleapis.com/css2?family=Tiro+Devanagari+Hindi&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="img/icon_pag.png">
	<link href="/path/print.css" media="print" rel="stylesheet" />
	<link rel="stylesheet" href="css/diseño1.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
	integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min,js"></script>
	

	<br>

	<style>
		body {
			background-image: url(img/fondo1.png);
			background-size: cover;
		}
	</style>

</head>

<body>
	<font color="white">
		<div class="container" >
			<div class="row">
				<div class="col-8">
					<h6>UNIVERSIDAD DE NARIÑO EXTENSIÓN IPIALES</h6>
					<h6>DESARROLLADO POR:</h6>
					<h6>IVAN CAMILO MEJIA PARRA</h6>
					<h6>JESUS DAVID ERAZO REINA</h6>
				</div>
				<div class="col-4">
					<img heigth="100" width="100"src="img\udenar.png" alt="No hay imagen" >
				</div>
			</div>
		</div>
		<br>
	</font>		
	<div class="divisor"></div>

	<div id="contenedorp" class="container, col-12" ><!--inicio contenedor principal class="d-flex align-items-center"-->
		<div class="row">
			<center>
				<div id="contenedor2"class="col-8">
					<div class="card border-info" >
						<div class="card-body" >
							<ul class="list-group list-group-light">
								<li class="list-group-item">	
									<div class="container">
										<div class="row">
											<div class="col-12">
												<h5>Datos Personales</h5>
												<center>
													<table border="5"bgcolor="#E0F1F3" width="600" class="clase_table">
														<tr>
															<td align="center">
																<div class="container">
																	<br>
																	<div for="txt_nombre"><b>Primer Nombre:</b>
																		<input type="text" name="txt_nombre" id="txt_nombre" >
																	</div>

																	<br>

																	<div for="txt_nombre"><b>Segundo Nombre:</b>
																		<input type="text" name="txt_nombre" id="txt_nombre" >
																	</div>

																	<br>

																	<div for="txt_nombre"><b>Primer Apellido:</b>
																		<input type="text" name="txt_nombre" id="txt_nombre" >
																	</div>

																	<br>

																	<div for="txt_apellido"><b>Segundo Apellido:</b>
																		<input type="text" name="txt_apellido" id="txt_apellido" >
																	</div>

																	<br>

																	<div for="txt_nombre"><b>Edad:</b> <br>
																		<input type="number" name="txt_nombre" id="txt_nombre" >
																	</div>

																	<br>

																	<div for="txt_nombre"><b>Ciudad:</b>
																		<input type="text" name="txt_nombre" id="txt_nombre" >
																	</div>

																	<br>
																	<br>
																</div>
															</td>
															<td>
																<button data-mdb-ripple-duration="10s" type="button" class="btn btn-primary btn-lg">Añadir </button>

															</td>
															<td >
																<button data-mdb-ripple-duration="10s" type="button" class="btn btn-primary btn-lg">Modificar </button>
															</td>
															<td >
																<button data-mdb-ripple-duration="10s" type="button" class="btn btn-primary btn-lg">Eliminar </button>
															</td>
														</tr>
													</table>
												</center>
											</div>	
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</center>
		</div>

	</div>	<!--fin contenedor principal-->
<!--hola-->
	<script type="text/javascript" src="js/functions.js"></script>
</body>
</html>