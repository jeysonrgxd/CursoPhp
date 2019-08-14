<style>
	p.validado{
		color:#22DA3C;
		font-size: 18px;
		font-weight: bold;

	}

	p.no_validado{
		color:red;
		font-size:18px;/*es para el tamaño*/
		font-weight: bold;/*es para negria*/

	}

</style>
<?php 
function dame1(){
//isset funcion de multiples uso que en esta forma nos dice si apretamos el boton p no
	if(isset($_POST["enviando"])){
		$usuario = $_POST["nombre_usuario"];
		$password = $_POST["pass_usuario"];

		if ($usuario=="jeyson"&& $password=="1234") {
			echo "<p class='validado'> Bienvenido </p>";

		} else {
			echo "<p class='no_validado'> Usuario y/o password incorrecta </p>";
		}
		

	}
}
 ?>