<?php
/*
 *Clase index
 */
class Index{
    public static function Client(){
        session_start();
        //Load page
        require_once "app_server/class/plantilla.php";
        require_once "app_server/controller/login.php";
        $plantilla = new Clas\Plantilla();
        $plantilla->load();
    }
}
//Abrir clase
$index = new Index();
$index->Client();
?>