<?php
    require 'conexion.php';
    
    $id=$_GET['id'];
    
    
    $sql="DELETE FROM datos_recoleccion WHERE id='$id'";
// Check connection
if (!$conn) {
    echo("Connection failed: " . mysqli_connect_error());
}else{
    if (mysqli_query($conn, $sql)) {
        

    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
}
mysqli_close($conn);
?>

<html lang="es">
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	</head>
<div class="container">
<div class="row">
<div class="row" style="text-align:center">
<h3>REGISTRO ELIMINADO</H3><br>
<div>

</div>
</div>
</div>
</div>
<div style="text-align:center" >
<a href="index.php"class="btn btn-primary" >REGRESAR</a>
</div>
    </body>
    </html>