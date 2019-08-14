	<h2>INTRODUCE TUS DATOS</h2>
	<!-- $_SERVER["PHP_SELF"] me trae el del fichero donde nos encontramo y este formulario esta siendo
		llamado con include php por eso este formulario le pertenece a login.php-->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<table class="tabla1">
			<tr>
				<th>Login:</th>
				<td><input type="text" name="usu"></td>
			</tr>
			<tr>
				<th>Password:</th>
				<td><input type="text" name="cont"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" id="boton" name="boton" value="LOGIN"></td>
			</tr>
		</table>
	</form>
