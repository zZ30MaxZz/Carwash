<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hola</title>
</head>
<body>
	<h1>Vista del Controlador para carwash</h1>
<table>
<?php  foreach ($model as $data):?>
	<tr>
		<td>
			<h2>
				<?php 
				echo $data->codigo_usuario;
				echo " ";
				echo $data->nombre;
				echo " ";
				echo $data->apellidos;
				echo " ";
				echo $data->cargo;
				?>
			</h2>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</body>
</html>
