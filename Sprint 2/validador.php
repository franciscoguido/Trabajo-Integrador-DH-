<?php
	require_once("repositorio.php");
	
	abstract class Validador {
		abstract public function validar(Array $datos, Repositorio $repo);

		public function estaEnFormulario($campo) {
	        return isset($_POST[$campo]);
	    }
	}