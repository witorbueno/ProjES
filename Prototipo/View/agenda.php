 <?php
	include_once("../Persistence/Connection.php");
 ?>
<!DOCTYPE html>

<!-- CR5, CR6-->
<html>
<head>
		<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
		<link href="style.css" rel="stylesheet" type="text/css" media="all">
		<meta charset="UTF-12">
		<title> Smart Pet </title>

</head>
<body>
<div id="container">
<center>
<h2>Agenda</h2>

<table class="pure-table">
<tr>
	<th>Evento</th>
	<th>Data</th>
	<th>Pet</th>
	<th>Local</th>
</tr>


	<?php
	$cont = 1;
	$connect = new Connection("localhost", "root", "", "usuario");
	$connect->conectar();
	$result_agenda = "SELECT * FROM agenda";
	$resultNome = mysqli_query($connect->getLink(), $result_agenda);
	while(	$row_agenda = mysqli_fetch_assoc($resultNome)){ ?>
		<tr>
			<td><?php echo $row_agenda['Nome'];?></td>
			<td><?php echo $row_agenda['Data'];?></td>
			<td><?php echo $row_agenda['Pet'];?></td>
			<td><?php echo $row_agenda['Local'];?></td>
		</tr>
		<?php
		$cont =  $cont +1;
	}
	?>


<tr>

</tr>



<tr>

</table>
<br><br>
<div id="botao">
	<form action="../Persistence/cadastroEvento.php">
		<input class="pure-button" type="submit" value="Cadastrar evento">
	</form>
<br>

		<a class="pure-button" href="inter.html"> Editar </a><br><br>

		<a class="pure-button" href="perfilPet.html"> Voltar </a>
</div>
</center>
</div>
</body>
</html>
