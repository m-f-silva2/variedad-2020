<?php namespace Clas;
/*
 * Clase login
 */

 Class Login{
    //Atributos	
    private $v_usuario;
    private $connect;
	private $consulta;

	//Constructor donde recibe los datos del formulario como el usuario y la contraseña
	public function __construct(){
		if($_POST && $_POST["correo"] != null && $_POST["password"] != null){
			require_once "app_server/class/usuario.php";
			//Metodos de Usuario
			$this->v_usuario = new Usuario();
			$this->v_usuario->setCorreo($_POST["correo"]);
			$this->v_usuario->setPassword($_POST["password"]);

			//Aqui si se puede acceder a esta funcion de tipo private.
			$this->validarLogin();
		}
    }
    
    //Validar datos enviados del formulario.
    public function validarLogin(){
		if(($this->v_usuario->getCorreo()) != null && ($this->v_usuario->getPassword()) != null){
			$respuesta = $this->validarUsuario();

			//validar array
			if($respuesta){
				$this->v_usuario->setIdUsuario($respuesta["IdUsuario"]);
				$this->v_usuario->setIdTipoUsuario($respuesta["IdTipoUsuario"]);
				$this->v_usuario->setTipoUsuario($respuesta["Descripcion"]);
				switch ($this->v_usuario->getIdTipoUsuario()) {
					case 1:
						$_SESSION["rol"] = $this->v_usuario->getTipoUsuario();
						$_SESSION["idUsuario"] = $this->v_usuario->getIdTipoUsuario();
						echo "<script>window.location.replace('inicio');</script>";
						break;
					case 2:
						$_SESSION["rol"] = $this->v_usuario->getTipoUsuario();
						$_SESSION["idUsuario"] = $this->v_usuario->getIdTipoUsuario();
						echo "<script>window.location.replace('inicio');</script>";
						break;
					case 3:
						$_SESSION["rol"] = $this->v_usuario->getTipoUsuario();
						$_SESSION["idUsuario"] = $this->v_usuario->getIdTipoUsuario();
						echo "<script>window.location.replace('inicio');</script>";
						break;
				}
			}else{
				$connect = new \Inc\Tools();
				$title = "Error";
            	$message = "Correo/contraseña incorrecta";
            	$connect->displayError($title,$message);;
			}
		}
    }
    
    //Validar datos enviados del formulario con los de la base de datos.
	public function validarUsuario(){
        if(($this->v_usuario->getCorreo()) != null && ($this->v_usuario->getPassword()) != null){
            //Consulta
			$sql = "SELECT u.IdUsuario,u.UsuNombres,u.UsuApellidos,u.UsuSexo,u.UsuCorreo,t.IdTipoUsuario,t.Descripcion FROM usuarios u inner join tipousuario t on u.UsuTipo = t.idTipoUsuario WHERE u.UsuCorreo = :item1 AND u.UsuContrasena = :item2";
			$this->consulta[0] = ["sql" => $sql];
			$this->consulta[1] = [":item1" => $this->v_usuario->getCorreo(),":item2" => $this->v_usuario->getPassword()];
            //Crear objeto tools
            $connect = new \Inc\Tools();
            //Ejecutar consulta sql.
            $array = $connect->getArraySQL($this->consulta);
            return $array;
		}
	}
}
?>