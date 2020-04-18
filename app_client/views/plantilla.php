<!DOCTYPE html>
<html>
<head>
    <meta content="text/html" charset="utf-8"/>
    <meta name="keywords" content="Variedad"/>
    <meta name="description" content="Variedad"/>
    <!-- Bootstrap 3.3.7 -->
    <link type="text/css" rel="stylesheet" href="app_client/css/bootstrap/dist/css/bootstrap.min.css"/>
    <!-- Boostrap theme -->
    <link type="text/css" rel="stylesheet" href="app_client/css/bootstrap/dist/css/bootstrap-theme.min.css"/>
    <!-- Ionicons -->
    <link type="text/css" rel="stylesheet" href="app_client/css/Ionicons/css/ionicons.min.css"/>
    <!-- Font Awesome -->
    <link type="text/css" rel="stylesheet" href="app_client/css/font-awesome/css/font-awesome.css"/>
    <!-- JQUERY 1.11.1 JS -->
    <script src="app_client/js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <!-- JQUERY 3 -->
    <script src="app_client/js/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <!-- Bootstrap -->
    <script src="app_client/css/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE JS -->
    <script src="app_client/js/adminlte.min.js" type="text/javascript"></script>
    <!-- Normalize JS -->
    <link type="text/css" rel="stylesheet" href="app_client/css/normalize.css"/>
    <!-- Plantilla JS -->
    <link type="text/css" rel="stylesheet" href="app_client/css/plantilla.css"/>

    <title>Variedad</title>
</head>
<body>
    <?php if(isset($_SESSION["rol"])){?>
        <div class="wrapper" style="background-color: #4468aa;">
    <?php }else{?>
        <div class="wrapper">
    <?php };?>
        <!--Cabecera------------->
        <?php include_once "mod/header.php";?>
        <!--Contenido y Menu------------->
        <!--Menu Client-->
        <?php include "mod/main.php";?>
        <!--content Client-->
        <div class="content-wrapper">
            <div class="container">
                <div class="col-md-9" id="content">
                    <!-- Main content -->
                    <section class="content">
                        <!-- Default box -->
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Title</h3>
                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <!---Contenido del pagina ---->
                                <?php
                                //array de las vistas disponibles
                                $pages = array("inicio");
                                switch(@$_SESSION["rol"]){
                                    case 'Administrador':
                                        //Si existe el get[] en el array
                                        if (isset($_GET["ruta"]) and in_array($_GET["ruta"], $pages)) {
                                            include $_SESSION["rol"]."/".$_GET["ruta"].".php";
                                        }
                                        //Si el get es igual a salir, se destruye la sesion creada
                                        else if(isset($_GET["ruta"]) and $_GET["ruta"] == "salir"){
                                            session_destroy();
                                            echo "<script>window.location.replace('inicio');</script>";
                                        }else{
                                            $_GET["ruta"] = 'inicio';
                                            include $_SESSION["rol"]."/".$_GET["ruta"].".php";
                                        }
                                        break;
                                    case 'Paciente':
                                        //Si existe el get[] en el array
                                        if (isset($_GET["ruta"]) and in_array($_GET["ruta"], $pages)) {
                                            include $_SESSION["rol"]."/".$_GET["ruta"].".php";
                                        }
                                        //Si el get es igual a salir, se destruye la sesion creada
                                        else if(isset($_GET["ruta"]) and $_GET["ruta"] == "salir"){
                                            session_destroy();
                                            echo "<script>window.location.replace('inicio');</script>";
                                        }else{
                                            $_GET["ruta"] = 'inicio';
                                            include $_SESSION["rol"]."/".$_GET["ruta"].".php";
                                        }
                                        break;
                                    case 'Medico':
                                        //Si existe el get[] en el array
                                        if (isset($_GET["ruta"]) and in_array($_GET["ruta"], $pages)) {
                                            include $_SESSION["rol"]."/".$_GET["ruta"].".php";
                                        }
                                        //Si el get es igual a salir, se destruye la sesion creada
                                        else if(isset($_GET["ruta"]) and $_GET["ruta"] == "salir"){
                                            session_destroy();
                                            echo "<script>window.location.replace('inicio');</script>";
                                        }else{
                                            $_GET["ruta"] = 'inicio';
                                            include $_SESSION["rol"]."/".$_GET["ruta"].".php";
                                        }
                                        break;
                                    default:
                                        $_GET["ruta"] = 'inicio';
                                        include "client/".$_GET["ruta"].".php";
                                        break;
                                }
                                ?>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <p class="navbar-text ">© 2019 - Facultad de ingeniería. 
                                    <a href="http://www.unimayor.edu.co" >&nbsp INSTITUCIÓN UNIVERSITARIA COLEGIO MAYOR DEL CAUCA</a>
                                </p>
                                <a href="http://" class="navbar-btn btn-danger btn">
                                    <span id="iconosFooter" class="glyphicon glyphicon-home"></span>
                                </a>
                                <a href="http://" class="navbar-btn btn-danger btn">
                                    <span id="iconosFooter" class="glyphicon glyphicon-envelope"></span>
                                </a>
                                <a href="http://" class="navbar-btn btn-danger btn">
                                    <span id="iconosFooter" class="glyphicon glyphicon-phone-alt"></span>
                                </a>
                                </div>
                            <!-- /.box-footer-->
                        </div>
                    </section>
                </div>    
            </div>
        </div>
    </div>
</body>
</html>