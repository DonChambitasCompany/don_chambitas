<header id="header_prin">
            <nav>
                <div class="logo">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <a href="../index.php"><img src="../assets/logo_principal.png" alt="LogoPrincipal" id="logo-principal"></a>
                            </div>
                            <div class="col">
                                <h2 style="color: black;">Don Chambitas</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav-links">
                    <li><a href="#trabajo">Top trabajadores</a></li>
                    <li><a href="../index.php">Categorías</a></li>
                   <li><a href="../register/inf_trabajador.html">¡Quiero trabajar!</a></li>
                
                   <?php
                    if (isset($_SESSION['usuario'])){
                        $trabajar = '';
                        $perfil = '<a href="../profiles/usuario.php">Mi perfil</a>';
                        $btn_trabajador = '';
                        $usuario = '<a href="../cerrar.php">Cerrar Sesión</a>';
                        
                    }
                    else{
                        $trabajador = 'Sesión Trabajador';
                        $trabajar = '<a href="register/register_trabajador.php">¡Quiero trabajar!</a>';
                        $perfil = '';
                        $btn_trabajador = '<button class="btn" style="background: #000; color:white;" id="boton"><a href="../register/login_trabajador.php">Socio Don Chambitas </button></a>';
                        $usuario = '<a href="../register/login.php">Sesión Usuario</a>';
                    }?>
                <li><a href="../register/register_trabajador.php"><?php echo $trabajar; ?>
                <li><a href="../profiles/usuario.php"><?php echo $perfil; ?> </li>
                </ul>
                <li>
                <?php echo $btn_trabajador?>
                <button class="btn" id="boton"><?php echo $usuario; ?></button>
                </li>
            </nav>
</header>
