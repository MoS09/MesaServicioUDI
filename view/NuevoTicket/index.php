<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
    <?php require_once("../MainHead/head.php");?>
	<title>Nuevo Ticket</title>
</head>
<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php");?>

    <div class="mobile-menu-left-overlay"></div>

    <?php require_once("../MainNav/nav.php");?>

	<!-- Contenido -->
	<div class="page-content">
		<div class="container-fluid">

			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<h3>Nuevo Ticket</h3>
							<ol class="breadcrumb breadcrumb-simple">
								<li><a href="#">Home</a></li>
								<li class="active">Nuevo Ticket</li>
							</ol>
						</div>
					</div>
				</div>
			</header>

			<div class="box-typical box-typical-padding">
				<p>
					Desde esta ventana podra generar nuevos tickets de HelpDesk.
				</p>

				<h5 class="m-t-lg with-border">Ingresar Información</h5>

				<div class="row">
					<form method="post" id="ticket_form">

						<input type="hidden" id="usu_id" name="usu_id" value="<?php echo $_SESSION["usu_id"] ?>">

						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Extensión</label>
								<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Extensión">
							</fieldset>
						</div>
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Edificio</label>
								<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Edificio">
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Piso</label>
								<select id="cat_id" name="cat_id" class="form-control">

								</select>
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Área</label>
								<select id="cats_id" name="cats_id" class="form-control">

								</select>
							</fieldset>
						</div>
						
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_titulo">Cubículo / Salón </label>
								<input type="text" class="form-control" id="tick_titulo" name="tick_titulo" placeholder="Ingrese Cubículo">
							</fieldset>
						</div>
						
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Área </label>
								<label color="red" for=exampleInput> 
								*seleccione la opción que mejor describa su problema </label>
								<select id="prio_id" name="prio_id" class="form-control">

								</select>
							</fieldset>
						</div>
						
						<div class="col-lg-12">
							<fieldset class="form-group">
								<label class="form-label semibold" for="tick_descrip">Descripción</label>
								<div class="summernote-theme-1">
									<textarea id="tick_descrip" name="tick_descrip" class="summernote" name="name"></textarea>
								</div>
							</fieldset>
						</div>
						
						<div class="col-lg-6">
						    <fieldset class="form-group">
								<label class="form-label semibold"> Horario disponible: </label><br>
								<input type="checkbox" id="vehicle1" name="vehicle1"> Lunes
								&nbsp &nbsp &nbsp
								<input type="checkbox" id="vehicle2" name="vehicle2"> Martes
								&nbsp &nbsp &nbsp
								<input type="checkbox" id="vehicle3" name="vehicle3"> Miércoles
								&nbsp &nbsp &nbsp
								<input type="checkbox" id="vehicle4" name="vehicle4"> Jueves
								&nbsp &nbsp &nbsp
								<input type="checkbox" id="vehicle5" name="vehicle5"> Viernes	
							</fieldset>
						</div>
						
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Documentos Adicionales</label>
								<input type="file" name="fileElem" id="fileElem" class="form-control" multiple>
							</fieldset>
						</div>
						
						
						
						<div class="col-lg-12">
							<br><br>
							<button type="submit" name="action" value="add" class="btn btn-rounded btn-inline btn-primary">Enviar</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
	<!-- Contenido -->

	<?php require_once("../MainJs/js.php");?>

	<script type="text/javascript" src="nuevoticket.js"></script>

	<script type="text/javascript" src="../notificacion.js"></script>

</body>
</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>