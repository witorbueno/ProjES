<?php
	class Usuario {
		var $nome;
		var $sobrenome;
		var $apelido;
		var $dataNasc;
		var $senha;
		
		function __construct($_nome, $_sobrenome, $_apelido, $_dataNasc, $_senha){
			$this->nome = $_nome;
			$this->sobrenome = $_sobrenome;
			$this->apelido = $_apelido;
			$this->dataNasc = $_dataNasc;
			$this->senha = $_senha;
		}
		
		function setNome($nome) { $this->nome = $nome; }
		function getNome() { return $this->nome; }
		function setSobrenome($sobrenome) { $this->sobrenome = $sobrenome; }
		function getSobrenome() { return $this->sobrenome; }
		function setApelido($apelido) { $this->apelido = $apelido; }
		function getApelido() { return $this->apelido; }
		function setDataNasc($dataNasc) { $this->dataNasc = $dataNasc; }
		function getDataNasc() { return $this->dataNasc; }
		function setSenha($senha) { $this->senha = $senha; }
		function getSenha() { return $this->senha; }
		
		
	}