<?php namespace Clas;
/*
 * Clase usuario
 */
include "app_server/class/tipoUsuario.php";
class Usuario extends TipoUsuario{
    //Atributos
    private $idUsuario;
    private $tipoDocumento;
    private $identificacion;
    private $nombres;
    private $apellidos;
    private $fechaNacimiento;
    private $sexo;
    private $correo;
    private $password;
    private $tipoUsuario;

    //constructor
    public function __construct(){
        
    }

    //getter y setter
	public function setIdUsuario($idUsuario){
		$this->idUsuario = $idUsuario;
	}
	public function getIdUsuario(){
		return $this->idUsuario;
    }
    public function setTipoDocumento($tipoDocumento){
		$this->tipoDocumento = $tipoDocumento;
	}
	public function getTipoDocumento(){
		return $this->tipoDocumento;
    }
    public function setIdentificacion($identificacion){
		$this->identificacion = $identificacion;
	}
	public function getIdentificacion(){
		return $this->identificacion;
    }
    public function setNombres($nombres){
		$this->nombres = $nombres;
	}
	public function getNombres(){
		return $this->nombres;
    }
    public function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}
	public function getApellidos(){
		return $this->apellidos;
    }
    public function setFechaNacimiento($fechaNacimiento){
		$this->fechaNacimiento = $fechaNacimiento;
	}
	public function getFechaNacimiento(){
		return $this->fechaNacimiento;
    }
    public function setSexo($sexo){
		$this->sexo = $sexo;
	}
	public function getSexo(){
		return $this->sexo;
    }
    public function setCorreo($correo){
		$this->correo = $correo;
	}
	public function getCorreo(){
		return $this->correo;
    }
    public function setPassword($password){
		$this->password = $password;
	}
	public function getPassword(){
		return $this->password;
    }
    public function setTipoUsuario($tipoUsuario){
		$this->tipoUsuario = $tipoUsuario;
	}
	public function getTipoUsuario(){
		return $this->tipoUsuario;
	}
}

?>