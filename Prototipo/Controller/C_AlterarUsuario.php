<?php include_once("../Model/Usuario.php"); include_once("../Persistence/Connection.php"); include_once("../Persistence/usuarioDAO.php");
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$apelido = $_POST['user'];
	$nasc = $_POST['nasc'];
	$senha = $_POST['senha'];

	$Usuario = new Usuario($nome, $sobrenome, $apelido, $nasc, $senha);
	
	$connect = new Connection("localhost", "root", "", "usuario");
	$connect->conectar();
	
	$usuarioDAO = new UsuarioDAO();
	$usuarioDAO->alterar($Usuario, $connect->getLink());