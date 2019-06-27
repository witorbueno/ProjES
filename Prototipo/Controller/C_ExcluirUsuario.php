<?php include_once("../Model/Usuario.php"); include_once("../Persistence/Connection.php"); include_once("../Persistence/usuarioDAO.php");
	$apelido = $_POST['user'];
	$Usuario = new Usuario("", "", $apelido, "", "");
	
	$connect = new Connection("localhost", "root", "", "usuario");
	$connect->conectar();
	
$usuarioDAO = new UsuarioDAO();
	$usuarioDAO->excluir($Usuario, $connect->getLink());


?>