<?php 
	require_once("usuario.php");
	require_once("repositorioUsuarios.php");
	
	class Auth {

		public static $instancia;

		public static function getInstancia(RepositorioUsuarios $repoUsuarios) {
			if (self::$instancia == null) {
				self::$instancia = new Auth();
				self::$instancia->autologuear($repoUsuarios);
			}

			return self::$instancia;
		}

		private function __construct() {

		}

		public function loguear(Usuario $usuario) {
        	$_SESSION["usuarioLogueado"] = $usuario->getEmail();
    	}

    	public function traerUsuarioLogueado(RepositorioUsuarios $repo) {
	        if (!$this->estaLogueado()) {
	            return null;
	        }
	        $mailLogueado = $_SESSION["usuarioLogueado"];
	        return $repo->traerUsuarioPorEmail($mailLogueado);
	    }

	    public function estaLogueado() {
	        return isset($_SESSION["usuarioLogueado"]);
	    }


	    public function guardarCookie(Usuario $usuario) {
	        setcookie("usuarioLogueado", $usuario->getEmail(), time() + 3600 * 24);
	    }

	    private function autologuear(RepositorioUsuarios $repo) {
	        session_start();
	        if (!$this->estaLogueado()) {
	            if (isset($_COOKIE["usuarioLogueado"])) {
	                $usuario = $repo->traerUsuarioPorEmail($_COOKIE["usuarioLogueado"]);

	                $this->loguear($usuario);
	            }
	        }
    	}

    	 public function logout()
		  {
		      session_destroy();
		      $this->unsetCookie("usuarioLogueado");
		  }

		  private function unsetCookie($nombreCookie)
		  {
		      setcookie($nombreCookie, "", -1);
		  }
	}
?>