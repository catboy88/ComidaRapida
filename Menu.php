<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/CSS/bootstrap.min.css">
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
      
    <h1 class="#comida"><marquee behavior="left" direction=""><p style="color: gold;">Menu Comida</p></marquee></h1>

    <div class="container">
      
        <div class="row">
          <div class="col">
            <img src="IMG/tamales y mole.jpeg" alt="TAMALES Y MOLE" width="390">
            <H2 style="color: gold;">TAMALES Y MOLE</H2>
            <p><strong>Descripción:</strong> Deliciosos tamales rellenos de mole con carne de cerdo o pollo.</p>
                <p><strong>Sabores:</strong> Mole con cerdo, Mole con pollo.</p>
                <p><strong>Precio:</strong> $150</p></div>
          </div>
          <div class="col">
            <img src="IMG/burritos_mexicanos.jpg" alt="BURRITOS" width="390">
            <H2 style="color: gold;">BURRITOS</H2>
            <p><strong>Descripción:</strong> Burritos rellenos de carne, frijoles y queso, envueltos en una tortilla de harina.</p>
                <p><strong>Sabores:</strong> Carne asada, Pollo, Vegetariano.</p>
                <p><strong>Precio:</strong> $120</p>
          </div>
          <div class="col">
            <img src="IMG/sopes.jpg" alt="SOPES" width="390">
            <H2 style="color: gold;">SOPES</H2>
            <p><strong>Descripción:</strong> Pequeñas tortillas gruesas con frijoles, carne, lechuga, crema y queso.</p>
                <p><strong>Sabores:</strong> Carne, Pollo, Vegetariano.</p>
                <p><strong>Precio:</strong> $90</p>
          </div>
      </div>

      <div class="row">
        <div class="col">
          <img src="IMG/images.jpeg" alt="TACOS" width="400">
          <H2 style="color: gold;">TACOS</H2>
          <p><strong>Descripción:</strong> Tacos tradicionales con una variedad de rellenos y guarniciones.</p>
                <p><strong>Sabores:</strong> Carne asada, Pastor, Carnitas.</p>
                <p><strong>Precio:</strong> $80</p>
        </div>
        <div class="col">
          <img src="IMG/840_560.jpg" alt="ENCHILADAS ROJAS Y VERDES" width="400">
          <H2 style="color: gold;">ENCHILADAS</H2>
          <p><strong>Descripción:</strong> Tortillas de maíz rellenas de carne o pollo, bañadas en salsa roja o verde.</p>
                <p><strong>Sabores:</strong> Salsa roja, Salsa verde.</p>
                <p><strong>Precio:</strong> $140</p>
        </div>
        <div class="col">
          <img src="IMG/taquitos dorados.jpg" alt="TACOS DORADOS" width="400">
          <h2 style="color: gold;">Tacos Dorados</h2>
          <p><strong>Descripción:</strong> Tacos crujientes rellenos de carne o pollo, acompañados de guarniciones.</p>
                <p><strong>Sabores:</strong> Carne, Pollo.</p>
                <p><strong>Precio:</strong> $100</p>
        </div>
    </div>

    <div class="row">
        <div class="col">
         <img src="IMG/gorditas.jpg" alt=" GORDITAS" width="400">
            <H2 style="color: gold;">GORDITAS</H2>
            <p><strong>Descripción:</strong> Tortillas gruesas rellenas de carne, frijoles y otros ingredientes.</p>
                <p><strong>Sabores:</strong> Carne, Pollo, Vegetariano.</p>
                <p><strong>Precio:</strong> $110</p>
        </div>
        <div class="col">
          <img src="IMG/chiles rellenos.jpg" alt="CHILES RELLENOS" width="400">
          <H2 style="color: gold;">CHILES RELLENOS</H2>
          <p><strong>Descripción:</strong> Chiles poblanos rellenos de queso o carne, empanizados y fritos.</p>
                <p><strong>Sabores:</strong> Queso, Carne.</p>
                <p><strong>Precio:</strong> $130</p>
        </div>
        <div class="col">
          <img src="IMG/totopos.jpg" alt="TATOPOS" width="400">
          <h2 style="color: gold;">TOTOPOS</h2>
          <p><strong>Descripción:</strong> Chips de tortilla de maíz, ideales para acompañar salsas y guacamole.</p>
                <p><strong>Sabores:</strong> Original, Sal.</p>
                <p><strong>Precio:</strong> $70</p>
        </div>
    </div>
    </div>
    <h1 class="#bebidas"><marquee behavior="left" direction=""><p style="color: gold;">Menu Bebidas para Llevar</p></marquee></h1>

<div class="container">
    <div class="row">
        <div class="col">
            <img src="IMG/cafe.jpg" alt="Café" width="400">
            <h2 style="color: gold;">Café</h2>
            <p><strong>Descripción:</strong> Café recién molido y preparado con el método de tu elección.</p>
                <p><strong>Sabores:</strong> Espresso, Americano, Capuchino, Latte.</p>
                <p><strong>Precio:</strong> $50</p>
        </div>
        <div class="col">
            <img src="IMG/JugoNatural.jpg" alt="Jugo Natural" width="400">
            <h2 style="color: gold;">Jugo Natural</h2>
            <p><strong>Descripción:</strong> Jugo recién exprimido de frutas naturales.</p>
                <p><strong>Sabores:</strong> Naranja, Manzana, Piña, Mango.</p>
                <p><strong>Precio:</strong> $60</p>
        </div>
        <div class="col">
            <img src="IMG/smoothies.jpg" alt="Smoothies" width="400">
            <h2 style="color: gold;">Smoothies</h2>
            <p><strong>Descripción:</strong> Batidos cremosos de frutas frescas mezclados con yogur.</p>
                <p><strong>Sabores:</strong> Fresa-Banana, Mango-Pina, Berry Mix.</p>
                <p><strong>Precio:</strong> $70</p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <img src="IMG/te.jpg" alt="Té" width="400">
            <h2 style="color: gold;">Té</h2>
            <p><strong>Descripción:</strong> Té de hojas seleccionadas, preparado a la perfección.</p>
                <p><strong>Sabores:</strong> Verde, Negro, Oolong, Earl Grey.</p>
                <p><strong>Precio:</strong> $40</p>
        </div>
        <div class="col">
            <img src="IMG/refrescos.jpg" alt="Refrescos" width="400">
            <h2 style="color: gold;">Refrescos</h2>
            <p><strong>Descripción:</strong> Bebidas carbonatadas refrescantes en una variedad de sabores.</p>
                <p><strong>Sabores:</strong> Cola, Naranja, Limón, Uva.</p>
                <p><strong>Precio:</strong> $45</p>
        </div>
        <div class="col">
            <img src="IMG/AguaFresca.jpg" alt="Aguas Frescas" width="400">
            <h2 style="color: gold;">Aguas Frescas</h2>
            <p><strong>Descripción:</strong> Bebidas tradicionales a base de agua, frutas y azúcar.</p>
                <p><strong>Sabores:</strong> Horchata, Jamaica, Tamarindo, Pepino-Lima.</p>
                <p><strong>Precio:</strong> $55</p>
        </div>
    </div>
</div>

<h1 class="#postres"><marquee behavior="left" direction=""><p style="color: gold;">Postres Caseros para Llevar</p></marquee></h1>

    <div class="container">
        <div class="row">
            <div class="col">
                <img src="IMG/Pastel.jpg" alt="Pastel de Chocolate" width="400">
                <h2 style="color: gold;">Pastel de Chocolate</h2>
                <p><strong>Descripción:</strong> Pastel húmedo y esponjoso con intenso sabor a chocolate.</p>
                <p><strong>Precio:</strong> $80</p>
            </div>
            <div class="col">
                <img src="IMG/cheesecake.jpg" alt="Cheesecake" width="400">
                <h2 style="color: gold;">Cheesecake</h2>
                <p><strong>Descripción:</strong> Tarta de queso suave con base de galleta crujiente.</p>
                <p><strong>Precio:</strong> $85</p>
            </div>
            <div class="col">
                <img src="IMG/PaiLimon.jpg" alt="Pay de Limón" width="400">
                <h2 style="color: gold;">Pay de Limón</h2>
                <p><strong>Descripción:</strong> Tarta fresca con relleno de limón y base de galleta.</p>
                <p><strong>Precio:</strong> $70</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <img src="IMG/tiramisu.jpg" alt="Tiramisú" width="400">
                <h2 style="color: gold;">Tiramisú</h2>
                <p><strong>Descripción:</strong> Postre italiano con capas de café y mascarpone.</p>
                <p><strong>Precio:</strong> $90</p>
            </div>
            <div class="col">
                <img src="IMG/flan.jpg" alt="Flan" width="400">
                <h2 style="color: gold;">Flan</h2>
                <p><strong>Descripción:</strong> Flan cremoso con caramelo dulce.</p>
                <p><strong>Precio:</strong> $65</p>
            </div>
            <div class="col">
                <img src="IMG/gelatina.jpg" alt="Gelatina" width="400">
                <h2 style="color: gold;">Gelatina</h2>
                <p><strong>Descripción:</strong> Gelatina fresca con frutas y sabor a tu elección.</p>
                <p><strong>Precio:</strong> $50</p>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <img src="IMG/churros.jpg" alt="Churros" width="400">
                <h2 style="color: gold;">Churros</h2>
                <p><strong>Descripción:</strong> Churros recién fritos espolvoreados con azúcar y canela.</p>
                <p><strong>Precio:</strong> $60</p>
            </div>
            <div class="col">
                <img src="IMG/PanDulce.jpg" alt="Pan Dulce" width="400">
                <h2 style="color: gold;">Pan Dulce</h2>
                <p><strong>Descripción:</strong> Panes dulces tradicionales, perfectos para acompañar un café.</p>
                <p><strong>Precio:</strong> $45</p>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-4oQGC/X7RSZ3Ih0+10H9KmNX44hmX0FepFi50KJ5Li8T4pbR2zv+U5kMKtII6OWO" crossorigin="anonymous"></script>
    <script src="../JS/script.js"></script>
</body>
</html>
