<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de nosotros - Eat it now Eat it fast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css"> <!-- Tu archivo CSS personalizado -->
</head>
<body>
<section class="container my-5">
    <div class="jumbotron text-center">
        <h1><marquee behavior="left" direction=""><span style="color: gold;">Eat it now Eat it fast</span></marquee></h1>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="Bienvenida.php">Bienvenida</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Menu.php">Menú</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Acerca de Nosotros.php">Acerca de Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Extra
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="Contacto.php">Contacto</a>
                                <a class="dropdown-item" href="Acerca de Nosotros.php">Acerca de Nosotros</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="Mensaje.php">Quejas y Sugerencias</a>
                            </div>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-register" type="button" onclick="window.location.href='/ComidaParaLlevar/RegistroCliente.php';">
                            Registrarse
                        </button>
                        <button class="btn btn-login" type="button" onclick="window.location.href='/ComidaParaLlevar/Login.php';">
                            Iniciar Sesión
                        </button>
                    </form>
                    <div class="profile-container">
                        <div class="profile-card">
                            <a href="cerrar.php" class="btn btn-logout">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="container">
        <!-- Sección Acerca de Nosotros -->
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 style="color: white;">Acerca de Nosotros</h3>
                <h2 style="color: white;">¿Quiénes somos?</h2>
                <p style="color: white;">Somos una cadena de restaurantes con 2 sucursales que ofrece la mejor calidad en productos. Contamos con chefs y personal capacitado para preparar pedidos rápidamente, cumpliendo con todas las normas de salubridad.</p>
                <hr>
            </div>
        </div>

        <div class="row">
            <!-- Sucursales -->
            <div class="col-sm-4 text-center">
                <img src="IMG/Sucursal1.jpg" class="rounded-circle" alt="Sucursal 1" width="150">
                <p style="color: white;">Sucursal 1</p>
                <img src="IMG/Sucursal2.jpg" class="rounded-circle" alt="Sucursal 2" width="150">
                <p style="color: white;">Sucursal 2</p>
                <p style="color: white;">Nuestras sucursales</p>
                <p style="color: white;">Contamos con 2 sucursales, ambas con la más alta calidad en nuestros productos. Conoce nuestro menú y ordena en línea.</p>
            </div>

            <!-- Variedad de Platillos -->
            <div class="col-sm-4 text-center">
                <h1><p style="color: white;">Variedad de Platillos</p></h1>
                <h2><p style="color: white;">Tenemos una amplia variedad de platillos deliciosos en nuestras sucursales. Descubre nuestros guisados y cortes de alta calidad.</p></h2>
            </div>
        </div>

        <!-- Misión, Visión y Valores Organizacionales -->
        <div class="row">
            <div class="col-md-8">
                <h3 style="background-color: black; color: gold;">Misión</h3>
                <p style="color: white;">Proporcionar a nuestros clientes una experiencia gastronómica rápida, deliciosa y de alta calidad, utilizando ingredientes frescos y de primera, y ofreciendo un servicio eficiente y amigable en un ambiente acogedor.</p>
            </div>

            <div class="col-md-8">
                <h3 style="background-color: black; color: gold;">Visión</h3>
                <p style="color: white;">Convertirnos en la cadena de comida rápida líder en el mercado local, reconocida por la calidad de nuestros productos, la excelencia en el servicio y nuestro compromiso con la satisfacción del cliente.</p>
            </div>

            <div class="col-md-8">
                <h3 style="background-color: black; color: gold;">Valores Organizacionales</h3>
                <p style="color: white;">Calidad: Nos comprometemos a utilizar solo los mejores ingredientes y a mantener altos estándares de preparación y presentación en cada uno de nuestros productos.</p>
                <p style="color: white;">Servicio al Cliente: Valoramos a nuestros clientes y nos esforzamos por brindarles un servicio amable, rápido y eficiente en cada visita.</p>
                <p style="color: white;">Innovación: Estamos continuamente buscando nuevas formas de mejorar nuestra oferta de productos y la experiencia del cliente.</p>
                <p style="color: white;">Integridad: Operamos con transparencia y honestidad en todas nuestras actividades comerciales y relaciones.</p>
                <p style="color: white;">Responsabilidad: Nos preocupamos por la comunidad y el medio ambiente, y nos esforzamos por operar de manera sostenible y responsable.</p>
            </div>
        </div>

        <!-- Política de Calidad -->
        <div class="row">
            <div class="col-md-6">
                <h3 style="background-color: black; color: gold;">Política de Calidad</h3>
                <p style="color: white;">En "Eat it now Eat it fast", estamos dedicados a ofrecer productos de comida rápida que cumplan con los más altos estándares de calidad. Nuestra política de calidad se centra en la selección cuidadosa de ingredientes, procesos de preparación estrictamente controlados y un servicio al cliente excepcional. Nos comprometemos a la mejora continua y a escuchar las necesidades y comentarios de nuestros clientes para asegurar su satisfacción y lealtad a largo plazo.</p>
            </div>
        </div>
    </div>
</section>

    <script src="js/script.js"></script> <!-- Tu archivo JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
