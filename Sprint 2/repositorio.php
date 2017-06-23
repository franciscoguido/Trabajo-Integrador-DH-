<?php

	abstract Class Repositorio {
		protected $repositorioUsuarios;

		public function getRepositorioUsuarios() {
			return $this->repositorioUsuarios;
		}
	}