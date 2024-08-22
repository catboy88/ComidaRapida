<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/Inicio.css">
    <title>Eat it now Eat it fast - Inicio</title>
</head>
<body>
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
                            <a class="nav-link" href="Menu.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Acerca de Nosotros.php">Acerca de Nosotro</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Extra
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="Contacto.php">Contacto</a>
                                <a class="dropdown-item" href="Acerca de Nosotros.php">Acerca de nosotros</a>
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
        
        <div class="jumbotron text-center">
            <h1 style="color: white;">¡Bienvenidos a Eat it now Eat it fast!</h1>
            <h2><span style="color: white;">Disfruta de la mejor comida rápida, fresca y deliciosa.</span></h2>
        </div>

        <section class="container my-5">
            <h2 style="font-weight: 400;"><span style="color: white;">En Eat it now Eat it fast, nos especializamos en ofrecer comida rápida de alta calidad. Nuestra misión es proporcionar una experiencia gastronómica rápida sin sacrificar el sabor ni la frescura de los ingredientes.</span></h2>
        </section>

        <img src="IMG/LOGO2.jpg" alt="Logo de Eat it now Eat it fast" width="500">

        <section class="container my-5">
    <h2 style="font-weight: 800;"><span style="color: white;">PROMOCIONES</span></h2>
    <div class="row">
        <!-- Promociones Semanales -->
        <div class="col-md-6">
            <h3 style="color: gold;">Promociones Semanales</h3>
            <div class="promo">
                <img src="IMG/tacos.jpg" alt="Tacos de Eat it now Eat it fast" width="500">
                <h4 style="color: gold;">Tacos</h4>
                <p style="color: white;">Esta semana, disfruta de 3 tacos por $50. Hechos con ingredientes frescos y auténticos.</p>
            </div>
            <div class="promo">
                <img src="IMG/Drink.jpg" alt="Bebidas de Eat it now Eat it fast" width="500">
                <h4 style="color: gold;">Bebidas</h4>
                <p style="color: white;">Compra cualquier taco y recibe una bebida gratis. Refresca tu paladar con nuestras bebidas frías.</p>
            </div>
        </div>
        <!-- Promociones por Temporada -->
        <div class="col-md-6">
            <h3 style="color: gold;">Promociones por Temporada</h3>
            <div class="promo">
                <img src="IMG/Postres.jpg" alt="Postres de Eat it now Eat it fast" width="500">
                <h4 style="color: gold;">Postres de Verano</h4>
                <p style="color: white;">Durante el verano, nuestros postres de frutas están a un 20% de descuento. Endulza tu día con nuestros deliciosos postres caseros.</p>
            </div>
            <div class="promo">
                <img src="IMG/Invierno.jpg" alt="Especial de Temporada" width="500">
                <h4 style="color: gold;">Especial de Temporada de Invierno</h4>
                <p style="color: white;">En estas fiestas, disfruta de un 25% de descuento en todos los pasteles y tartas. Celebra con dulzura.</p>
            </div>
        </div>
    </div>
    </div>
    <script src="../JS/script.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>