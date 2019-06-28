<?php include_once("../Model/Compromisso.php"); include_once("../Persistence/Connection.php"); include_once("../Persistence/agendaDAO.php");
	$pet = $_POST['Pet'];
	$local = $_POST['Local'];

	$Compromisso = new Compromisso("", "", $pet, $local);
	
	$connect = new Connection("localhost", "root", "", "usuario");
	$connect->conectar();
	
	$agendaDAO = new agendaDAO();
	$row = $agendaDAO->consultar($Compromisso, $connect->getLink());
	echo "<!DOCTYPE html>
				<html lang = \"pt-br\">

		<header>
			<meta charset = \"UTF-8\">
			<title> Consultar Compromisso </title>

		</header>

		<body>
			<h2> Compromissos Encontrados </h2>
			<form action = \"#\" method = \"post\">
				Nome: <input type = \"text\" name = \"nome\" value = ".$row['Nome']."><br>
				Data: <input type = \"date\" name = \"data\" value = ".$row['Data']."><br>
				pet: <input type = \"text\" name = \"pet\" value = ".$row['Pet']."><br>
				local: <input type = \"text\" name = \"local\" value = ".$row['Local']."><br>		

			</form>
			
		</body>


		</html>";


?>