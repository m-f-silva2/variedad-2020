<?php namespace Inc;
include_once "functions.php";
/*
* Clase con funciones utiles del programa
*/
class Tools{
    /** 
     * Conexion de la base de datos
     */
    function connectBD(){
        //Conexion con PDO
        $conexion = new \PDO('mysql:host='.SERVER.';dbname='.DB.'',''.USER.'',''.PASS.'');
        return $conexion;
    }
    /** 
     * Desconexion de la base de datos
     */
    function disconnectBD($conexion){
        $close = $conexion->close();
        //Si al cerrar da error
        if(!$close){
            echo 'No se pudo desconectar';
        }
        return $close;
    }
    /**
     * Obtenemos una array multidimensional a partir de una consulta sql
     */
    function getArraySQL($consulta){
        //Crea la conexion
        $conexion = $this->connectBD();
        //Prepara la consulta
        $stmt = $conexion->prepare($consulta[0]["sql"]);
        //Buscar parametros en la consulta(sql)
        for($i=1;$i<=count($consulta[1]);$i++){
            if(is_string($consulta[1][":item".$i])){
                $stmt->bindParam(":item".$i, $consulta[1][":item".$i], \PDO::PARAM_STR);
            }else if(is_in($consulta[1][":item".$i])){
                $stmt->bindParam(":item".$i, $consulta[1][":item".$i], \PDO::PARAM_INT);
            }
        }
        //Ejecuta la consulta
        $stmt->execute();
        //Valida la ejecucion de la consulta
        if ($stmt) {
            return $stmt->fetch();
            $this->disconnectBD($conexion);
        }else{
            $d = "error";
            return $d;
        }			
        
    }
    /* 
     * Crear una tabla del array
     */
    function displayTable($data){
        echo '<table class="table table_striped table_bordered table_condense">';
        $columnas = count($data[0])/2;
        $filas =count($data);

        for($i=1;$i<count(data[0]);$i=$i+2){
            next($data);
            echo "<th>b".key($data[0])."</b></th>";
            next($data[0]);
        }
        for($i=0;$i<$filas;$i++){
            echo "<tr>";
            for($j=0;$j<$columnas;$j++){
                echo "<td>".$data[$i][$j]."</td>";   
            }
            echo "</tr>";
        }       
        echo '</table>';
    }
    /*
     * Mensaje de error
     */
    function displayError($title,$message){
        ?>
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">
                <div class="page-header">
                    <h1><?php echo $title; ?></h1>
                </div>
                <div class="alert alert-info">
                    <?php echo $message; ?>
                </div>
            </div>
            <div class="col-sm-4">

            </div>
        </div>
        <?php
    }
}
?>