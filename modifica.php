<?php
require 'conexion.php';
$id=$_GET['id'];
$sql="SELECT * FROM datos_recoleccion WHERE id='$id'";
$resultado=mysqli_query($conn, $sql);
$row=$resultado->fetch_assoc();

?>
<html lang="es">
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



	</head>

    <body>   
    <div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">

            <div class="form-group">
					<label for="peso" class="col-sm-2 control-label">peso</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="peso" name="peso"
                         placeholder="peso" value="<?php echo $row['peso']; ?>" required>
					</div>
				</div>
			
                <input type="hidden" id="id" name="id"value="<?php echo $row['id']; ?>" />      
                
				
				<div class="form-group	">
	   <label for="tipo" class="col-sm-2 control-label">tipo</label>
	   <div class="col-sm-10">
	   <select  class="form-control" id="tipo" name="tipo" placeholder="tipo" value="<?php echo $row['tipo']; ?>" required>
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
	   <select  class="form-control" id="facultad" name="facultad" placeholder="facultad" value="<?php echo $row['facultad']; ?>" required>
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