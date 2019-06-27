<?php
	class Local{
		var $nome;
		var $endereco;
		
		function __construct($_nome, $_endereco){
			$this->nome = $_nome;
			$this->endereco = $_endereco;
		}
		
		function setNome($nome) { $this->nome = $nome; }
		function getNome() { return $this->nome; }
		function setEndereco($data) { $this->endereco = $endereco; }
		function getEndereco() { return $this->endereco; }
	}