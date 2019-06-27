<?php include_once("../Model/Usuario.php"); include_once("../Persistence/Connection.php"); include_once("../Persistence/usuarioDAO.php");

	$apelido = $_POST['user'];

	$Usuario = new Usuario("", "", $apelido, "", "");
	
	$connect = new Connection("localhost", "root", "", "usuario");
	$connect->conectar();
	
$usuarioDAO = new UsuarioDAO();
	$row = $usuarioDAO->consultar($Usuario, $connect->getLink());
	
	echo "<!DOCTYPE html>
				<html lang = \"pt-br\">

		<header>
			<meta charset = \"UTF-8\">
			<title> Consultar Usuario </title>

		</header>

		<body>
			<h2> Usuario Encontrado </h2>
			<form action = \"#\" method = \"post\">
				Nome: <input type = \"text\" name = \"nome\" value = ".$row['Nome']."><br>
				Sobrenome: <input type = \"text\" name = \"sobrenome\" value = ".$row['Sobrenome']."><br>
				Apelido: <input type = \"text\" name = \"user\" value = ".$row['Apelido']."><br>
				Data de Nasc: <input type = \"date\" name = \"nasc\" value = ".$row['dataNasc']."><br>		
				Senha: <input type = \"text\" name = \"senha\" value = ".$row['Senha']."><br>

			</form>
			
		</body>


		</html>";


?>