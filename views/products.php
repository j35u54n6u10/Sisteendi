<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    
    <!-- TODO (Cambiar)Tener todos los documentos con los mismo iconos -->
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../css/products.css">

    <script src="../js/choose-product.js" defer></script>

</head>
<body>
     <header class="header">
        <div class="logo">
            <a href="../index.php"><img src="../assets/loguito.png" alt="Logo de la marca"></a>
        </div>
        <nav>
           <ul class="nav-links">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#about-scroll">Acerca de</a></li>
           </ul>            
        </nav>
        <a class="btn" href="../views/login.php"><button>Iniciar Sesión</button></a>

        <a onclick="openNav()" class="menu" href="#"><button>Menu</button></a>

        <div id="mobile-menu" class="overlay">
            <a onclick="closeNav()" href="" class="close">&times;</a>
            <div class="overlay-content">
                <a href="../index.php">Inicio</a>
                <a href="#">Productos</a>
                <a href="about-scroll">Acerca de</a>
                <a href="views/login.php">Iniciar Sesión</a>
            </div>
        </div>

    </header>


    <div class="container">

        <h3 class="title"> Productos disponibles </h3>

        <div class="products-container">

            <div class="product" data-name="p-1">
                <img src="../assets/baby-pan-jamon.webp" alt="">
                <h3>Baby Pan Jamón</h3>
                <div class="price">$4.00</div>
            </div>

            <div class="product" data-name="p-2">
                <img src="../assets/vasos-donas.webp" alt="">
                <h3>Vaso Kids</h3>
                <div class="price">$3.00</div>
            </div>

            <div class="product" data-name="p-3">
                <img src="../assets/donas-con-glass.webp" alt="">
                <h3>Mini donas X3</h3>
                <div class="price">$1.50</div>
            </div>

            <div class="product" data-name="p-4">
                <img src="../assets/seis-donas.webp" alt="">
                <h3>Mini donas X6</h3>
                <div class="price">$2.00</div>
            </div>

            <div class="product" data-name="p-5">
                <img src="../assets/doce-donas.webp" alt="">
                <h3>Mini donas X12</h3>
                <div class="price">$2.50</div>
            </div>

            <div class="product" data-name="p-6">
                <img src="../assets/carrusel-dona-tres.webp" alt="">
                <h3>Mini donas X25</h3>
                <div class="price">$6.00</div>
            </div>
        </div>        
    </div>

    <div class="products-preview">

        <div class="preview" data-target="p-1">
            <i class="fas fa-times"></i>
            <img src="../assets/baby-pan-jamon.webp" alt="">
            <h3>Baby Pan Jamón</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span>( 250 )</span>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
            <div class="price">$4.00</div>
            <div class="buttons">
                <a href="#" class="buy">Ordenar ahora</a>
            </div>
        </div>

    <div class="preview" data-target="p-2">
    <i class="fas fa-times"></i>
    <img src="../assets/vasos-donas.webp" alt="">
    <h3>Vaso Kids</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <span>( 250 )</span>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
    <div class="price">$3.00</div>
    <div class="buttons">
        <a href="#" class="buy">Ordenar ahora</a>
    </div>
    </div>

    <div class="preview" data-target="p-3">
    <i class="fas fa-times"></i>
    <img src="../assets/donas-con-glass.webp" alt="">
    <h3>Mini donas X3</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <span>( 250 )</span>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
    <div class="price">$1.50</div>
    <div class="buttons">
        <a href="#" class="buy">Ordenar ahora</a>
    </div>
    </div>

    <div class="preview" data-target="p-4">
    <i class="fas fa-times"></i>
    <img src="../assets/seis-donas.webp" alt="">
    <h3>Mini donas X6</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <span>( 250 )</span>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
    <div class="price">$2.00</div>
    <div class="buttons">
        <a href="#" class="buy">Ordenar ahora</a>
    </div>
    </div>

    <div class="preview" data-target="p-5">
    <i class="fas fa-times"></i>
    <img src="../assets/doce-donas.webp" alt="">
    <h3>Mini donas X12</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <span>( 250 )</span>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
    <div class="price">$2.50.00</div>
    <div class="buttons">
        <a href="#" class="buy">Ordenar ahora</a>
    </div>
    </div>

    <div class="preview" data-target="p-6">
    <i class="fas fa-times"></i>
    <img src="../assets/carrusel-dona-tres.webp" alt="">
    <h3>Mini donas X25</h3>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
        <span>( 250 )</span>
    </div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, dolorem.</p>
    <div class="price">$6.00</div>
    <div class="buttons">
        <a href="#" class="buy">OrdenOrdenar ahoraa</a
    </div>
    </div>

    </div>



</body>
</html>