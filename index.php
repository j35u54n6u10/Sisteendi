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
    <header class="header">
        <div class="logo">
            <img src="assets/loguito.png" alt="Logo de la marca">
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Acerca de</a></li>
           </ul>            
        </nav>
        <a class="btn" href="#"><button>Iniciar Sesión</button></a>

        <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>

        <div id="mobile-menu" class="overlay">
            <a onclick="closeNav()" href="" class="close">&times;</a>
            <div class="overlay-content">
                <a href="#">Inicio</a>
                <a href="#">Productos</a>
                <a href="#">Acerca de</a>
                <a href="#">Iniciar Sesión</a>
            </div>
        </div>

    </header>

    <section class="banner">
        <div class="content-banner">
            <img src="assets/log.jpeg" alt="logo completo" >
            <!-- <h1>Dale un gustico</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere molestiae, 
                repellendus quasi assumenda cumque harum. Quis sapiente hic dicta laboriosam!
            </p> -->
            
        </div>
    </section>

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


    <script type="text/javascript" src="js/nav.js"></script>

</body>
</html>