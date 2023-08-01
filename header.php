<header id="header_prin">
            <nav>
                <div class="logo">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <a href="index.php"><img src="assets/logo_principal.png" alt="LogoPrincipal" id="logo-principal"></a>
                            </div>
                            <div class="col">
                                <h2 style="color: black;">Don Chambitas</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav-links">
                    <li><a href="#trabajo">Top trabajadores</a></li>
                    <li><a href="#categorias">Categorías</a></li>
                    <li><a href="register/inf_trabajador.html">¡Quiero trabajar!</a></li>
                
                <?php
                    if (isset($_SESSION['usuario'])){
                        $perfil = '<a href="profiles/usuario.php">Mi perfil</a>';
                        $boton = '<a href="cerrar.php">Cerrar Sesión</a>';
                    }
                    else{
                        $perfil = '';
                        $boton = '<a href="register/login.php">Iniciar Sesión</a>';
                    }?>
                <li><a href="profiles/usuario.php"><?php echo $perfil; ?> </li>
                </ul>
                <li>
                <button class="btn" id="boton"><a href="register/login.php"><?php echo $boton; ?></button>
                </li>
            </nav>
</header>
