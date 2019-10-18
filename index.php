<?php
 require 'conexion.php';


$where="";
if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE facultad LIKE '%$valor%'";
        
        
	}
    }
    
$sql="SELECT * FROM datos_recoleccion $where";
$resultado=mysqli_query($conn, $sql);

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
            <h1 style="text-align:center">Busqueda</h1>
    </div>
            <div class="row" >
                <a href="nuevo.php"class="btn btn-primary">Nuevo Registro</a> <a href="pantalladatos.php"class="btn btn-primary">datos</a><br><br><br>
                <div class="row">
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>BUSQUEDA POR FACULTAD <b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Nueva Busqueda" class="btn btn-info" />
				</form>
            </div>
             </div>  
        <br>
        <div class="row table-responsive">
        <table class="table table-striped">
        <thead>
        <tr>
        <th>ID</th>
        <th>peso</th>
        <th>tipo</th>
        <th>facultad</th>
        
        <th></th>
        <th></th>
     </tr>
       </thead>
       <tbody>
       <?php while ($row=$resultado->fetch_assoc())
       { ?>
       <tr>
       <td><?php echo $row['id']; ?></td>
       <td><?php echo $row['peso']; ?></td>
       <td><?php echo $row['tipo']; ?></td>
       <td><?php echo $row['facultad']; ?></td>
       
       <td><a href="modifica.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil">editar</span></a></td>
								<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash">eliminar</span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
	
</body>
</html>