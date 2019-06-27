<?php
	class Pet{
		var $nome;
		var $raca;
		var $idade;
		var $peso;
		var $sexo;
		var $especie;
		
		function __construct($_nome, $_endereco){
			$this->nome = $_nome;
			$this->endereco = $_endereco;
		}
		
		function setNome($nome) { $this->nome = $nome; }
		function getNome() { return $this->nome; }
		function setRaca($raca) { $this->raca = $raca; }
		function getRaca() { return $this->raca; }
		function setIdade($idade) { $this->idade = $idade; }
		function getIdade() { return $this->idade; }
		function setPeso($idade) { $this->idade = $idade; }
		function getPeso() { return $this->peso; }
		function setSexo($sexo) { $this->sexo = $sexo; }
		function getSexo() { return $this->sexo; }
		function setEspecie($especie) { $this->especie = $especie; }
		function getEspecie() { return $this->especie; }
	}