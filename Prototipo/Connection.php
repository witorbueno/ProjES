<?php
	class Connection {
		var $server;
		var $user;
		var $pwd;
		var $bd;
		var $link;
		
		
		function __construct($server, $user, $pwd, $bd){
			$this->server = $server;
			$this->user = $user;
			$this->pwd = $pwd;
			$this->bd = $bd;
		}		
		
		function conectar(){
			$this->link = mysqli_connect($this->server, $this->user, $this->pwd, $this->bd);
			if (!$this->link) {
				die ("Não foi possível conectar".mysqli_error($this->link));
			}
			return $this->link;
		}
		
		function getLink(){
			return $this->link;
		}
	}
?>