<?php
	class AgendaDAO {
		
		function __construct(){			
		}
		
		function cadastrar($Compromisso, $link){
			$query = "INSERT INTO `agenda`(`Nome`, `Data`, `Pet`, `Local`) VALUES('"
			.$Compromisso->getNome()."','"
			.$Compromisso->getData()."','"
			.$Compromisso->getPet()."','"
			.$Compromisso->getLocal()."')";
			
			echo $query; echo "<br>";
	
			if (!mysqli_query($link,$query)) {
				die ("Não foi possível salvar".mysqli_error($link));
			}
			echo "Salvo com Sucesso";
		}
		
		function alterar($Compromisso, $link){
			$query = "UPDATE `Agenda` SET `Nome`= '".$Compromisso->getNome()."',
			`Data`= '".$Compromisso->getData()."',
			`Pet`= '".$Compromisso->getPet()."',
			`Local`= '".$Compromisso->getLocal()."'
			WHERE Pet = '".$Compromisso->getPet()."'
			AND Local ='".$Compromisso->getLocal()."';";
			echo $query;
			if (!mysqli_query($link,$query)) {
				die ("Não foi possível alterarr".mysqli_error($link));
			}
			echo "<br>"; echo "Alterado com Sucesso";
		}
		function excluir($Compromisso, $link){
				$query = "DELETE FROM `agenda` WHERE Pet = '".$Compromisso->getPet()."'
			AND Local ='".$Compromisso->getLocal()."';";
			echo $query; echo "<br>";
	
			if (!mysqli_query($link,$query)) {
				die ("Não foi possível salvar".mysqli_error($link));
			}
			echo "Salvo com Sucesso";
			
		}
			function consultar($Compromisso, $link){
			$query = "SELECT * FROM `agenda` WHERE Pet = '".$Compromisso->getPet()."'
			AND Local ='".$Compromisso->getLocal()."';";
			$result = mysqli_query($link,$query);
			if (!$result) {
				echo ("Não foi possível encontrar no banco de dados./n Erro no MySQL: ".mysqli_error($link));
				exit;
			}
			return mysqli_fetch_assoc($result);
		}
			
	}	
	?>