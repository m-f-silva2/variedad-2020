<aside class="main">
	<section class="sidebar" id="sect-main">
	        <ul class="sidebar-menu">
                        <li>
                                <a href="inicio" id="a-blanco"><h5>Inicio</h5></a>
                        </li>
                        <li>
                                <a href="nosotros" id="a-blanco"><h5>Nosotros</h5></a>
                                <ul>
                                        <li>Link1</li>
                                        <li>Link2</li>
                                        <li>Link3</li>
                                </ul>
                        </li>
                        <li>
                                <a href="contactenos" id="a-blanco"><h5>Contactenos</h5></a>
                        </li>
                        <li>             
                                <div class="login" align="center">
                                        <div >
                                                <div >
                                                        <img src="app_client/images/user-black2.png" class="img-responsive img-circle" alt="User Image" style="width:80px; background-color: #fff;">
                                                </div>
                                                <div >
                                                        <h3 id="menuILP">Ingresar al sistema</h3>
                                                </div>
                                        </div>
                                        <div>
                                                <form method="post" class="sidebar-form">
                                                        <div class="input-group" >
                                                                <input type="text" class="form-control" placeholder="Correo" name="correo" id="frmCorreo" required>
                                                                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                                        </div>
                                                        <div class="input-group" >
                                                                <input type="password" class="form-control" placeholder="Contraseña" name="password" id="frmContrasena" required>
                                                                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                                        </div>
                                                        <div class="input-group" >
                                                                <span class="input-group">
                                                                <button type="submit" class="btn btn-primary btn-block btn-flat" >Ingresar
                                                                </button>
                                                        </span>
                                                        </div>
                                                        <?php $ctrLogin = new Clas\Login();?>
                                                </form>
                                        </div>
                                </div>
                        </li>
                </ul>
        </section>
</aside>

<!--<aside class="main-sidebar">
			<section class="sidebar">
				<ul class="sidebar-menu">
					<li class="disable">
						<a href="contenido">
						<i class="fa fa-home"></i>
						<span>Inicio</span>
						</a>
					</li>
					<li class="disable">
						<a href="frmPrevalidador">
						<i class="fa fa-pencil-square-o"></i>
						<span>Prevalidador</span>
						</a>
					</li>
					<li class="disable">
						<a href="usuarios">
						<i class="fa fa-user"></i>
						<span>Usuarios</span>
						</a>
					</li>
				</ul>
			</section>
                </aside>
-->