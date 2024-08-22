<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <title>Contacto</title>
</head>
<body>
<style>
        .contact-section {
            background-color: #343a40;
            color: #ffffff;
            padding: 40px 20px;
            text-align: center;
            border-radius: 8px;
        }

        .contact-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            animation: slideIn 1s ease-out;
        }

        .contact-section p {
            font-size: 1.2rem;
            margin: 10px 0;
        }

        .contact-section a {
            color: #17a2b8;
            text-decoration: none;
        }

        .contact-section a:hover {
            text-decoration: underline;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-100%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>

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
<hr>
<div class="container">
        <div class="row">
            <div class="col-md-12 contact-section">
                <h2>Contáctanos</h2>
                <p>Correo: <a href="mailto:eatitnoweatitfast@gmail.com">eatitnoweatitfast@gmail.com</a></p>
                <p>Instagram: <a href="https://www.instagram.com/eatitnoweatitfast" target="_blank">@eatitnoweatitfast</a></p>
                <p>Número de teléfono: <a href="tel:+7121581603">712-158-1603</a></p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>