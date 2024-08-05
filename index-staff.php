<?php session_start();

if(!isset($_SESSION['rol'])){
        header('location: index.php');
}else{
    if($_SESSION['rol'] != 2){
        header('location: index.php');
    }
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Agencia Multimedial NOISER</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="styles.css">
        <link href="estilos.css" rel="stylesheet" />
    </head>

    <body id="page-top">
        <!-- Barra de Navegación -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">NOISER</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                 aria-expanded="false" aria-label="Toggle navigation">Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php">Cuenta</a></li>
                        <?php if(!isset($_SESSION['username'])): ?>
                        <li class="nav-item"><a class="nav-link" href="index.php">Iniciar Sesión</a></li>
                        <?php else: ?>                      
                        <li class="nav-item"><a class="nav-link" href="logout.php">Salir</a></li>
                        <li class="nav-item"><a class="btn btn-warning" href="" disabled><?=$_SESSION['username'];?></a></li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- Banner Principal -->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Estás logueado con tu cuenta principal</div>
                <div class="masthead-heading text-uppercase" style="font-size: 40px">¡Bienvenido!</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#portfolio">Administrar</a>
            </div>
        </header>

        <!-- Sección de Servicios -->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Aquí vas a encontrar los servicios que te ofrecemos</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">E-Commerce</h4>
                        <p class="text-muted">Te vamos a ayudar a crear y diseñar tus páginas web centradas en la venta de productos online.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Diseño Responsive</h4>
                        <p class="text-muted">Te ofrecemos con ellas un diseño totalmente responsive, para que vos y tus clientes puedan acceder a ella desde cualquier dispositivo.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Seguridad Virtual</h4>
                        <p class="text-muted">Tus páginas van a contar con un sistema el cual las hará 100% seguras libres de cualquier intento de hack.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de Portfolio -->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Aquí te mostramos nuestros proyectos más destacados.</h3>
                </div>                	
			</div>


                <div class="row">
                    <!-- Proyecto número 1 -->
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" href="proyecto-1.php">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-comment fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/1.jpg" alt="..." />
                            </a>
                        </div>
                    </div>
        </section>

        <!-- Sección Team -->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Nuestro equipo</h2>
                    <h3 class="section-subheading text-muted">¡Hola! Estos somos nosotros</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/Frare.png" alt="..." />
                            <h4>Matías Frare</h4>
                            <p class="text-muted">CEO & Owner</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.behance.net/matiasfr_" aria-label="Frare Behance Profile"><i class="fab fa-behance"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com" aria-label="Frare Instagram Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/ricky.jpg" alt="..." />
                            <h4>Lautaro Scheyer</h4>
                            <p class="text-muted">CEO & Owner</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.behance.net" aria-label="Ricardo Heredia"><i class="fab fa-behance"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com" aria-label="Heredia Instagram Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/nico.jpg" alt="..." />
                            <h4>Julian Puccerelli</h4>
                            <p class="text-muted">CEO & Owner</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.behance.net" aria-label="Nicolas Gentile"><i class="fab fa-behance"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com" aria-label="Gentile Instagram Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/renzo.jpg" alt="..." />
                            <h4>Julian Puccerelli</h4>
                            <p class="text-muted">CEO & Owner</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.behance.net" aria-label="Renzo Paolino"><i class="fab fa-behance"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com" aria-label="Paolino Instagram Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       

        <!-- Sección de Footer -->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Frascherelli 2022</div>
                    <div class="col-lg-4 fs-9">matias.frare@davinci.edu.ar lautaro.scheyer@davinci.edu.ar julian.puccerelli@davinci.edu.ar</div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>

        <nav class="botonera" style="display: block;
        position: fixed;
        bottom: 0px; width: 100%; background-color: black;">
        <ul style="display: flex; justify-content: space-between; align-items: center; color: white; list-item: none;  height: 45px; margin: auto; text-align: center; padding-right: 50px; ">
           <li style="list-style: none;"><a href="#services" style="text-decoration: none;">Servicios</a></li>
           <li style="list-style: none;"><a href="#portfolio" style="text-decoration: none;">Portfolio</a></li>
           <li style="list-style: none;"><a href="#team" style="text-decoration: none;">Team</a></li>
        </ul>
    </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
