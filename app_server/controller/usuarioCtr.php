<?php namespace Ctr;
/*
 * Controlador Usuario
 */

Class Usuario{
    //Atributos
    private $user;
    private $pass;
    private $conn;

    public function __construct(){
        $this->conn = new Inc\Tools();
    }

    


    //getter y setter
	public function set($atributo,$contenido){
		$this->atributo = $contenido;
	}
	public function get(){
		return $this->atributo;
	}
}
?>