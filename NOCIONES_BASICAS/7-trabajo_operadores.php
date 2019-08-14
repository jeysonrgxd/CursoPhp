<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}

	.error{
		
		color: red;
		font-size: 20px;
		font-weight: bold;
	}


</style>
</head>

<body>
<h1>USANDO OPERADORES COMPARACIÓN</h1>

<form action="" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>USUARIO:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>CONTRASEÑA:</td>
      <td><label for="edad_usuario"></label>
      <input type="password" name="pass_usuario" id="pass_usuario"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>

<!-- esta es una forma llamando al archivo php q esta e otro fichero recordar que
el formulario etiqueta creado en acion puede ir el nombre del archivo adonde enviara los datos de las cajas de texto y el boton al archivo php
<?php 
//include("7-Validacion.php");
//dame1();
 ?>
 -->

 <?php 
 ////isset funcion de multiples uso que en esta forma nos dice si apretamos el boton o no
 	if (isset($_POST["enviando"])) {
 		//si apretamos el boton en tonces almacenamos en dos variables el contenido de la caja de texto y el de password poniendo el id respectivo que pusimos en sus eiquetas con el metodo $_POST["id"]
 		$usuario = $_POST["nombre_usuario"];
 		$password = $_POST["pass_usuario"];

 		if ($usuario == "jeyson"&& $password =="123") {
 			echo "<p class ='validado'> BIENVENIDO </p>";
 		} else {
 			echo "<p class='no_validado'> USUARIO Y/O CONTRASEÑA INCORRECTA</p>";
 		}
 		
 	} 


  ?>


</body>
</html>