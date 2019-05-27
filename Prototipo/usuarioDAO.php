<?php
	class UsuarioDAO {
		
		function __construct(){			
		}
		
		function cadastrar($Usuario, $link){
			$query = "INSERT INTO `Usuario`(`Nome`, `Sobrenome`, `Apelido`,
			`dataNasc`, `Senha`) VALUES('
			".$Usuario->getNome()."','
			".$Usuario->getSobrenome()."','
			".$Usuario->getApelido()."','
			".$Usuario->getDataNasc()."',
			".$Usuario->getSenha().")";
			
			echo $query; echo "<br>";
	
			if (!mysqli_query($link,$query)) {
				die ("Não foi possível salvar".mysqli_error($link));
			}
			echo "Salvo com Sucesso";
		}
		
		function alterar($Usuario, $link){
			$query = "UPDATE `usuario` SET `Nome`= '".$Usuario->getNome()."',
			`Sobrenome`= '".$Usuario->getSobrenome()."',
			`dataNasc`= '".$Usuario->getNasc()."',
			`Senha`='".$Usuario->getSenha()."
			WHERE Apelido = '".$Usuario->getApelido()."'";
			echo $query;
			if (!mysqli_query($link,$query)) {
				die ("Não foi possível alterarr".mysqli_error($link));
			}
			echo "<br>"; echo "Alterado com Sucesso";
		}
	}	
	?>