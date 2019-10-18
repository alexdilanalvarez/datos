<?php
    require 'conexion.php';
    $peso=$_POST['peso'];
    $tipo=$_POST['tipo'];
    $facultad=$_POST['facultad'];

    $sql="INSERT INTO datos_recoleccion(peso,tipo,facultad) VALUES('$peso','$tipo','$facultad')";


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
<h3>REGISTRO GUARDADO</H3><br>
<div>

</div>
</div>
</div>
</div>
<div style="text-align:center">
<a   href="index.php"class="btn btn-primary" >REGRESAR</a>
</div>
    </body>
    </html>