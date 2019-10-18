<html lang="es">
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


	</head>
<!-- ingreso de datos segun el requerimeinto-->
    <body>   
    <div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">

            <div class="form-group">
					<label for="cedula" class="col-sm-2 control-label">peso</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="peso" name="peso" placeholder="peso" required>
					</div>
				</div>
				<div class="form-group	">
	   <label for="tipo" class="col-sm-2 control-label">tipo</label>
	   <div class="col-sm-10">
	   <select  class="form-control" id="tipo" name="tipo" placeholder="tipo"  required>
	   <option></option>
		 <option>PAPEL</option>
		 <option>PLASTICO</option>
		 <option>VIDRIO</option>
		 <option>CARTON</option>
	   </select>
	   </div>
	 </div>
           
  

	 <div class="form-group	">
	   <label for="apellido" class="col-sm-2 control-label">facultad</label>
	   <div class="col-sm-10">
	   <select  class="form-control" id="facultad" name="facultad" placeholder="facultad" required>
	   <option></option>
		 <option>ciencias</option>
		 <option>informatica</option>
		 <option>mecanica</option>
		 <option>modas</option>
	   </select>
	   </div>
	 </div>
  

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
        </body>
        </html>