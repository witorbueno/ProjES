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
		<meta charset = "utf-8">
</head>
<body>
<div id="container">
<center>
<h2>alterar evento</h2>

<form class = "pure-form" action= "../Controller/C_AlterarCompromisso.php" method="post">
Pet:<br>
 <select name="Pet">
  <option>Selecione</option>
  <?php
	$connect = new Connection("localhost", "root", "", "usuario");
	$connect->conectar();
	$result_pet = "SELECT * FROM pet";
	$resultNome = mysqli_query($connect->getLink(), $result_pet);
	while(	$row_pet = mysqli_fetch_assoc($resultNome)){ ?>
		<option value = "<?php echo $row_pet['Nome']; ?>" selected><?php echo $row_pet['Nome']; ?>
		</option> 
		<?php
	}
	?>
</select> <br>
  <br>
  Local:<br>
 <select name="Local">
  <option>Selecione</option>
  <?php
	$connect = new Connection("localhost", "root", "", "usuario");
	$connect->conectar();
	$result_local = "SELECT * FROM local";
	$resultNome = mysqli_query($connect->getLink(), $result_local);
	while(	$row_local = mysqli_fetch_assoc($resultNome)){ ?>
		<option value = "<?php echo $row_local['Nome']; ?>" selected><?php echo $row_local['Nome']; ?>
		</option> 
		<?php
	}
	?>
</select> <br>

<?php
	
?>

<br>
<?php

	
	$result_local = "SELECT * FROM `agenda` WHERE Pet='".$_POST['pet']."'";
	//echo $result_local;
	$resultNome = mysqli_query($connect->getLink(), $result_local);
	$row_local = mysqli_fetch_assoc($resultNome);
	?>
  Evento:<br>
  <input type="text" name="Nome" value="<?php echo $row_local['Nome'];?>"><br>
  <br>
    Data:<br>
  <input type="date" name="Data" value="<?php echo $row_local['Data'];?>"><br>
  <br><br>
  
 <div id="botao">
	<input class="pure-button" type="submit" value="Salvar">
	<br><br>
	<a class="pure-button" href="agenda.php"> Voltar </a>
 </div>
</form> 

</center>
</div>
</body>
</html>