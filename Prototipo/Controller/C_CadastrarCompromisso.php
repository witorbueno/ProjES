<?php include_once("../Model/Compromisso.php"); include_once("../Persistence/Connection.php"); include_once("../Persistence/agendaDAO.php");
	$nome = $_POST['Nome'];
	$data = $_POST['Data'];
	$pet = $_POST['Pet'];
	$local = $_POST['Local'];

	$Compromisso = new Compromisso($nome, $data, $pet, $local);
	
	$connect = new Connection("localhost", "root", "", "usuario");
	$connect->conectar();
	
	$agendaDAO = new AgendaDAO();
	$agendaDAO->cadastrar($Compromisso, $connect->getLink());

?>