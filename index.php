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
<!---->            <img src="assets/loguito.png" alt="Logo de la marca">
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Acerca de</a></li>
           </ul>            
        </nav>
        <a class="btn" href="#"><button>Iniciar Sesión</button></a>

<!---->        <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>

<!---->        <div id="mobile-menu" class="overlay">
<!---->            <a onclick="closeNav()" href="" class="close">&times;</a>
<!---->            <div class="overlay-content">
<!---->                <a href="#">Inicio</a>
<!---->                <a href="#">Productos</a>
<!---->                <a href="#">Acerca de</a>
<!---->                <a href="#">Iniciar Sesión</a>
<!---->            </div>
<!---->        </div>

    </header>


<!---->    <script type="text/javascript" src="js/nav.js"></script>

</body>
</html>