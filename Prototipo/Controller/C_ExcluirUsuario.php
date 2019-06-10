<?php include_once("Usuario.php"); include_once("Connection.php"); include_once("usuarioDAO.php");
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$apelido = $_POST['user'];
	$nasc = $_POST['nasc'];
	$senha = $_POST['senha'];
	$Usuario = new Usuario($nome, $sobrenome, $apelido, $nasc, $senha);
	
	$connect = new Connection("localhost", "root", "", "usuario");
	$connect->conectar();
	
$usuarioDAO = new UsuarioDAO();
	$usuarioDAO->excluir($Usuario, $connect->getLink());


?>