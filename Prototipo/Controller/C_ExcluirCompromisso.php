<?php include_once("../Model/Compromisso.php"); include_once("../Persistence/Connection.php"); include_once("../Persistence/agendaDAO.php");

	$pet = $_POST['Pet'];
	$local = $_POST['Local'];

	$Compromisso = new Compromisso("", "", $pet, $local);
	
	$connect = new Connection("localhost", "root", "", "usuario");
	$connect->conectar();
	
	$agendaDAO = new AgendaDAO();
	$agendaDAO->excluir($Compromisso, $connect->getLink());

?>