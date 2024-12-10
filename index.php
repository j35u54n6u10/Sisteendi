<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sisteendi</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <!-- FIXME Responsive general de todo el index -->
    <header class="header">
        <div class="logo">
            <img src="assets/loguito.png" alt="Logo de la marca">
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="views/products.php">Productos</a></li>
                <li><a href="#about-scroll">Acerca de</a></li>
           </ul>            
        </nav>
        <a class="btn" href="views/login.php"><button>Iniciar Sesión</button></a>

        <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>

        <div id="mobile-menu" class="overlay">
            <a onclick="closeNav()" href="" class="close">&times;</a>
            <div class="overlay-content">
                <a href="#">Inicio</a>
                <a href="views/products.php">Productos</a>
                <a href="about-scroll">Acerca de</a>
                <a href="views/login.php">Iniciar Sesión</a>
            </div>
        </div>

    </header>

    <section class="banner">
        <div class="content-banner">
            <img src="assets/log-c.jpeg" alt="logo completo" >
            <!-- <h1>Dale un gustico</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere molestiae, 
                repellendus quasi assumenda cumque harum. Quis sapiente hic dicta laboriosam!
            </p> -->
            
        </div>
    </section>
    <!-- TODO Agregar botón para acceder a todos los productos -->
    <!-- TODO Agregar mismo botón del products -->
    <section class="products-popular">
        <h1>Productos más vendidos</h1>
        <div class="pp-container">
            <div class="product-card">
                <img src="assets/vasos-donas.webp" alt="Donas dentro de vasos">
                <h3>VasoKids</h3>
                <p>3$</p>
                <button class="button-38">Ordenar ahora</button>
            </div>
            <div class="product-card">
                <img src="assets/seis-donas.webp" alt="Seis donas dentro de una caja">
                <h3>Mini donas X6</h3>
                <p>2$</p>
                <button class="button-38">Ordenar ahora</button>
            </div>
            <div class="product-card">
                <img src="assets/doce-donas.webp" alt="Doce donas dentro de una caja">
                <h3>Mini donas X12</h3>
                <p>4$</p>
                <button class="button-38">Ordenar ahora</button>
            </div>
        </div>
    </section>

    <section class="about" id="about-scroll">
        <div class="about-container">
           <h1>¿Quienes somos?</h1>
            <p>
                En Dale un Gustico somos más que una simple tienda de mini donas. 
                Somos un pedacito de Maracay en cada bocado, llevando la alegría y el sabor dulce a tu día.
                Nacimos con la pasión de compartir contigo la felicidad que se siente al disfrutar de una mini dona recién hecha, 
                con ingredientes de primera calidad y una variedad de sabores que te harán la boca agua.
            </p>
        </div>
    </section>

    <footer class="footer">
        <ul class="social-icon">
            <li class="icon-elem">
                <a href="https://www.instagram.com/daleungustico.ve/" class="icon">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>
            <li class="icon-elem">
                <a href="wa.me/584121471391" class="icon">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </a>
            </li>

        </ul>
        <ul class="footer-menu">
            <li class="menu-elem">
                <a href="" class="menu-icon"> Inicio </a>
            </li>
            <li class="menu-elem">
                <a href="" class="menu-icon"> Productos </a>
            </li>
            <li class="menu-elem">
                <a href="" class="menu-icon"> Acerca de </a>
            </li>
        </ul>
        <p class="text">@2024 | Todos los derechos reservados</p>
    </footer>

    <script type="text/javascript" src="js/nav.js"></script>
    <script src="js/move-page.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>