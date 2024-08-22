<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios para Comida para Llevar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/Inicio.css">
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
    <!-- Sección de Servicios para Comida para Llevar -->
    <section id="servicios" class="bg-light py-5">
        <div class="container">
            <h1><marquee behavior="left" direction=""><p style="color: gold;">Servicios para Comida para Llevar</p></marquee></h1>

            <div class="container my-5">
    <div class="row">
        <div class="col-md-4">
            <img src="IMG/Individual.jpg" alt="Servicio Individual" class="img-fluid" style="width: 100%; height: auto;">
            <h2 style="color: gold;">Servicio Individual</h2>
            <p>Disfruta de una experiencia culinaria personalizada con nuestro Servicio Individual. Ideal para quienes desean una comida rápida y deliciosa por sí solos, este servicio incluye una selección de platillos a la carta y bebidas a tu elección. Ya sea que busques un almuerzo rápido o una cena tranquila, nuestro Servicio Individual asegura frescura y calidad en cada bocado.</p>
        </div>
        <div class="col-md-4">
            <img src="IMG/Pareja.jpg" alt="Servicio Pareja" class="img-fluid" style="width: 100%; height: auto;">
            <h2 style="color: gold;">Servicio Pareja</h2>
            <p>Comparte una comida especial con alguien querido a través de nuestro Servicio Pareja. Este servicio está diseñado para ofrecer una experiencia gastronómica perfecta para dos personas, con un menú especialmente seleccionado que incluye una variedad de platillos principales, acompañamientos y bebidas. Ideal para citas, aniversarios o cualquier ocasión especial, garantizando un momento memorable y sabroso.</p>
        </div>
        <div class="col-md-4">
            <img src="IMG/Familiar.jpg" alt="Servicio Familiar" class="img-fluid" style="width: 100%; height: auto;">
            <h2 style="color: gold;">Servicio Familiar</h2>
            <p>Reúne a la familia con nuestro Servicio Familiar, que ofrece una opción conveniente y deliciosa para grupos. Este servicio incluye una amplia gama de platillos diseñados para satisfacer a todos, desde entradas y platos principales hasta postres y bebidas. Perfecto para cenas familiares, celebraciones o reuniones, nuestro Servicio Familiar asegura que cada miembro de la familia disfrute de una comida abundante y deliciosa.</p>
        </div>
    </div>
</div>

            </div>
        </div>
    </section>

    <!-- Bootstrap JS y otros scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-4oQGC/X7RSZ3Ih0+10H9KmNX44hmX0FepFi50KJ5Li8T4pbR2zv+U5kMKtII6OWO" crossorigin="anonymous"></script>
</body>
</html>
