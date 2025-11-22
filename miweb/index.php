<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Metadatos básicos y configuración de la página -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Landing page personal">
    <meta name="author" content="Tu Nombre">
    <title>Mi Landing Page</title>
    <!-- Iconos de fuente (Themify Icons) -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Estilos principales y Bootstrap -->
    <link rel="stylesheet" href="assets/css/johndoe.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- ======= Encabezado principal con redes sociales y presentación ======= -->
    <header class="header">
        <div class="container">
            <!-- Iconos de redes sociales -->
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>  
            <div class="header-content">
                <!-- Presentación personal -->
                <h4 class="header-subtitle">Hola, soy</h4>
                <h1 class="header-title">Jonathan C.</h1>
                <h6 class="header-mono">Estudiante de Ingenierìa</h6>
                <!-- Botón para descargar CV (opcional, actualmente comentado) -->
                <!-- <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Imprimir CV</button> -->
            </div>
        </div>
    </header>
    <!-- ======= Barra de navegación principal ======= -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <!-- Botón para menú colapsable en móviles -->
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <!-- Enlaces de navegación a secciones -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#about" class="nav-link">Sobre mí</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <!-- Imagen de perfil y nombre -->
                    <img src="imgs/mi_foto.jpg" alt="Foto de perfil" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">[TU NOMBRE]</h5>
                        <div class="brand-subtitle">[TU PROFESIÓN O ESPECIALIDAD]</div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item last-item">
                        <a href="#contact" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ======= Sección principal "Sobre mí" ======= -->
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <!-- Tarjeta: ¿Quién soy? -->
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">¿Quién soy?</h3>
                <span class="line mb-5"></span>
                <h5 class="mb-3">Hola, mi nombre es Jonathan Cueva, tengo 32 años y actualmente soy estudiante en la UTPL. Trabajo en Netlife, donde cada día tengo la oportunidad de aprender y crecer profesionalmente. Me apasiona la tecnología y siempre busco nuevas formas de ampliar mis conocimientos, ya sea a través de cursos, talleres o simplemente investigando por mi cuenta. Disfruto mucho descubrir las últimas tendencias tecnológicas y aplicarlas tanto en mi vida personal como en mi trabajo. Mi objetivo es seguir desarrollándome en este campo y aportar soluciones innovadoras en el mundo digital.</h5>
                <p class="mt-20">♧</p>
                <!-- Botón para descargar CV (opcional, actualmente comentado) -->
                <!-- <a href="assets/docs/mi_cv.pdf" class="btn btn-outline-danger"><i class="icon-down-circled2"></i> Descargar mi CV</a> -->
            </div>
            <!-- Tarjeta: Información Personal -->
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Información Personal</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Fecha de nacimiento</span> : 11- jul-1991</li>
                    <li><span>Email</span> : jicueva3@utpl.edu.ec</li>
                    <li><span>Teléfono</span> : 0984659951</li>
                    <li><span>Dirección</span> : Ecuador - Quito</li>
                </ul>
                <!-- Iconos de redes sociales personales -->
                <ul class="social-icons pt-3">
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                    <li class="social-item"><a class="social-link" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                </ul>  
            </div>
            <!-- Tarjeta: Experiencia -->
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Mi Experiencia</h3>
                <span class="line mb-5"></span>
                <!-- Experiencia 1 -->
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-widget icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>Microsoft Office</h6>
                        <p class="subtitle">Cuento con conocimientos avanzados en Microsoft Office, lo que me permite manejar eficientemente herramientas como Excel, Word y PowerPoint para optimizar tareas, analizar datos y crear presentaciones profesionales.</p>
                        <hr>
                    </div>
                </div>
                <!-- Experiencia 2 -->
                <div class="row">
                    <div class="col-1 text-danger pt-1"><i class="ti-paint-bucket icon-lg"></i></div>
                    <div class="col-10 ml-auto mr-3">
                        <h6>páginas web con PHP</h6>
                        <p class="subtitle">Tengo conocimientos básicos en creación de páginas web con PHP, utilizando la estructura fundamental del lenguaje para combinar código PHP y HTML, permitiendo así el desarrollo de sitios web dinámicos y sencillo</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Sección de contacto ======= -->
    <div class="section contact" id="contact">
        <!-- Mapa de ubicación (puedes integrar Google Maps aquí) -->
        <div id="map" class="map"></div>
        <div class="container">
            <div class="row">
                <!-- Formulario de contacto -->
                <div class="col-lg-8">
                    <div class="contact-form-card">
                        <h4 class="contact-title">Envíame un mensaje</h4>
                        <form action="">
                            <div class="form-group">
                                <input  class="form-control" type="text" placeholder="Nombre *" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email *" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Mensaje *" rows="7" required></textarea>
                            </div>
                            <div class="form-group ">
                                <button type="submit" class="form-control btn btn-primary" >Enviar Mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Información de contacto directo -->
                <div class="col-lg-4">
                    <div class="contact-info-card">
                        <h4 class="contact-title">Contacto directo</h4>
                        <!-- Teléfono -->
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-mobile icon-md"></i>
                            </div>
                            <div class="col-10 ">
                                <h6 class="d-inline">Teléfono : <br> <span class="text-muted">0984659951</span></h6>
                            </div>
                        </div>
                        <!-- Dirección -->
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-map-alt icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Dirección :<br> <span class="text-muted">Ecuador - Quito</span></h6>
                            </div>
                        </div>
                        <!-- Email -->
                        <div class="row mb-2">
                            <div class="col-1 pt-1 mr-1">
                                <i class="ti-envelope icon-md"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="d-inline">Email :<br> <span class="text-muted">jicueva3@utpl.edu.ec</span></h6>
                            </div>
                        </div>
                        <!-- Redes sociales de contacto -->
                        <ul class="social-icons pt-4">
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-facebook" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-twitter" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-google" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-instagram" aria-hidden="true"></i></a></li>
                            <li class="social-item"><a class="social-link text-dark" href="#"><i class="ti-github" aria-hidden="true"></i></a></li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Pie de página ======= -->
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script> Creado por Jonathan Cueva
            </p>
        </div>
    </footer>
    <!-- ======= Scripts JS principales ======= -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- Script para el comportamiento "affix" de Bootstrap -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <!-- Script principal personalizado -->
    <script src="assets/js/johndoe.js"></script>
</body>
</html>

