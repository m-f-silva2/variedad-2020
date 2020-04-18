<?php namespace Clas;

class Plantilla{
    public function load(){
        require_once "app_server/inc/Tools.php";
        include "app_client/views/plantilla.php";
    }
}
?>