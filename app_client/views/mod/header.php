<header class="main-header">
    <a href="#" class="sidebar-toggle fa fa-fw fa-bars" data-toggle="push-menu" id="a-menuButton"><span id="a-menuSpan">Menú</span></a>
    <nav class="navbar">
        <div class="row">
            <div class="col-md-9">
                <span class="logo-lg">
                    <img src="app_client/images/logo-medicenter.png" alt="logo Medicenter" id="imgMedicenter" class="img-responsive">
                </span>
            </div>
            <div class="col-md-1">
                <?php if(isset($_SESSION["rol"])){?>
                    <a href="salir" class="fa fa-fw fa-sign-outx" id="a-salirButton"><span id="a-menuSpan">Salir</span></a>
                <?php };?>
            </div>
        </div>
    </nav>
</header>