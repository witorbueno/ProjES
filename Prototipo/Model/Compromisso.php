<?php
	class Compromisso {
		var $nome;
		var $data;
		var $pet;
		var $local;
		
		function __construct($_nome, $_data, $_pet, $_local){
			$this->nome = $_nome;
			$this->data = $_data;
			$this->pet = $_pet;
			$this->local = $_local;
		}
		
		function setNome($nome) { $this->nome = $nome; }
		function getNome() { return $this->nome; }
		function setData($data) { $this->data = $data; }
		function getData() { return $this->data; }
		function getPet() { return $this->pet; }
		function getLocal() { return $this->local; }
		function setPet($pet) { $this->pet = $pet; }
		function setLocal($local) { $this->local = $local; }		
	}