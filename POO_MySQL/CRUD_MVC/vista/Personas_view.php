<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mostrar_prouctos</title>
	<style>
	body{
		background-color: #FFFBC9
	}
	h2{
		text-align: center;
	}
		span{
			font-size: 15px;
		}
		.sin{
			border: none;
			width: 70px;
		}
		table{
			width: 50%;
			
		}
		td{
			border: 1px solid black;
		}
		.texto{
			text-align: center;
			background: #FFC62B;
			font-weight: bold;
			font-size: 19px;
		}
		.inp{
			width: 120px;

		}
		.centro{
			text-align: center;
		}
		.datos{
			text-align: center;

		}


	</style>
</head>
<body>
	<?php    
		require 'modelo/paginacion.php';

	 ?>
	<h2>CRUD<span>create read update delete</span></h2>
	<form action="modelo/Insertar.php" method="post">
		<table border="0" align="center">
			<tr class="texto">
				 <td><u>DNI</u></td>
				 <td><u>Nombre</u></td>
				 <td><u>Apellido</u></td>
				 <td><u>Edad</u></td>

			</tr>
			<!-- esta forma es si utilizamos fetch nesesitamos llamar varias veces la fila ya que esta funcion me trae fila por fila cada vez sea escrita de nuevo o llamada de nuevo  -->
			<!-- <?php 
				//while($registros = $recol->fetch(PDO::FETCH_ASSOC)){?>

				<tr>
					<td><?php //echo $registros["dni"]; ?></td>
					<td><?php //echo $registros["nombre"]; ?></td>
					<td><?php //echo $registros["apellido"]; ?></td>
					<td><?php //echo $registros["edad"]; ?></td>
					<td class="sin"><input type="button" name="borrar" value="Borrar"></td>
					<td class="sin"><input type="button" name="actualizar" value="Actualizar"></td>
				</tr>
				<?php //} ?> -->

				<!-- esta form es usando la funcion php fetchAll la cual nos trae todo la tabla recolset y lo almacena en una variable. accedemos alos atributos del objeto valor que se gana eso cuando utilizamos la funcion fetchAll(PDO::FETCH_OBJ) que nos devuelve un array de objetos-->
				<?php 
					foreach ($registro as $valor):?>
						<tr class="datos">
							<td><?php echo $valor["dni"];?></td>
							<td><?php  echo $valor["nombre"];	?></td>
							<td><?php  echo $valor["apellido"]; ?></td>
							<td><?php  echo $valor["edad"]; ?></td>
							<td class="sin"><a href="modelo/borrar.php?Id=<?php echo $valor["dni"] ?>"><input type="button" name="borrar" value="Borrar"></a></td>
							<td class="sin"><a href="modelo/actualizar.php?Id=<?php echo $valor['dni'] ?> & nom=<?php echo $valor['nombre'] ?> & ape=<?php echo $valor['apellido'] ?> & edad=<?php echo $valor['edad'] ?>"><input type="button" name="actualizar" value="Actualizar"></a></td>
						</tr>
				<?php endforeach; ?>
				 
				
			<tr class="centro">
				<td><input type="text" name="dni" class="inp"></td>
				<td><input type="text" name="nombre" class="inp"></td>
				<td><input type="text" name="apellido" class="inp"></td>
				<td><input type="text" name="edad" class="inp"></td>
				<td class="sin"><input type="submit" name="create" value="Insertar"></td>
			</tr>
		</table>
	</form>
	 <?php 
	 	for($i=1; $i<=$pagina_mostrar; $i++):?>
	 	<a href="index.php?num1=<?php echo $i; ?> & val=pagi"><?php echo $i; ?></a>
	
	<?php endfor ?>
</body>
</html>