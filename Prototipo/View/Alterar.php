<!DOCTYPE html>
<!-- CR1 -->
<?php include_once("../Persistence/Connection.php"); ?>
<html>
	<head>
		<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
		<link href="style.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="UTF-12">
		<title> Smart Pet </title>
	</head>

	<body>
		<div id = "container">
		<center>
		<h3> Bem Vindo a Smart Pet! </h3>
		 <?php $connect = new Connection("localhost", "root", "", "usuario");
			$connect->conectar();
			$result = "SELECT * FROM `usuario` WHERE `Apelido` ='".$_POST['usuario']."';";
			
			$resultado = mysqli_query($connect->getLink(), $result);
			$row_usu = mysqli_fetch_assoc($resultado);
			 ?>
		 <form action="../Controller/C_AlterarUsuario.php" method="post" class ="pure-form">
			
 			Nome:<br>
  			<input type="text" name="nome" value=" <?php echo $row_usu['Nome']?> "><br>
  			Sobrenome:<br>
  			<input type="text" name="sobrenome" value = "<?php echo $row_usu['Sobrenome']?>"><br>
			Apelido (Usuário):<br>
  			<input type="text" name="user" value="<?php echo $row_usu['Apelido']?>"><br>
			Data de Nascimento:<br>
			<input type="date" name="nasc" value="<?php echo $row_usu['dataNasc']?>"><br>
			Senha:<br>
			<input type="password" name="senha"><br>
			Confirme a senha:<br>
			<input type="password" name="senha2"><br>
			
			<br><br>
			<div id ="button">
			<input class = "pure-button" type="submit" value="Editar"><br><br>
			<a class="pure-button" href="../index.html"> Voltar </a><br><br>
			</div>
			<br><br>
			
		</form> 
		</center>
		</div>
	</body>

</html>