<?php namespace Clas;
/*
 * Clase tipo de usuario
 */

class TipoUsuario{
    //Atributos
    private $idTipoUsuario;
    private $tipoUsuario;

    //constructor
    public function __construct(){
        
    }


    //getter y setter
	public function setIdTipoUsuario($idTipoUsuario){
		$this->idTipoUsuario = $idTipoUsuario;
	}
	public function getIdTipoUsuario(){
		return $this->idTipoUsuario;
    }
    public function setTipoUsuario($tipoUsuario){
		$this->tipoUsuario = $tipoUsuario;
	}
	public function getTipoUsuario(){
		return $this->tipoUsuario;
	}
}

?>