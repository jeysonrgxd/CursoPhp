<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>pagina de idima</title>
</head>
<body>
	<?php 
		if(isset($_COOKIE["idiomas"])){
			$idioma =$_COOKIE["idiomas"];
			if($idioma == "es"){
				header("location:index_spanish.php");
			}else if($idioma=="in"){
				header("location:index_inglish.php");
			}
		}else{?> 
		<table align="center">
			<tr>
				<th align="center" colspan="2"><h2>IDIOMA DE PAGINA</h2></th>
			</tr>
			<tr>
				<td><a href="validacion_cookie.php?idioma=es"><img src="imagenes/español.jpg" alt="" width="250px" height="210px"></a></td>
				<td><a href="validacion_cookie.php?idioma=in"><img src="imagenes/bandera-estados-unidos-1-6712.jpg" alt="" width="250px" height="150px"></a></td>
			</tr>
		</table>
	<?php } ?>
</body>
</html>