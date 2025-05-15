<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php 
    include 'Componentes/header.php'; ?>
    <div class="contenedor">
        <div class="fondo">
            <p>Revive la diversion de los 80s y 90s</p>
        </div>
        <div class="bloque">
            <div class="imagen">
                <a href="juegos.php">
                    <img src="Imagenes/Inicio-Juegos.jpg" alt="Juegos">
                </a>
            </div>
            <div class="texto">                
                <h1>Juegos</h1>
                <p>Tenemos una gran variedad de arcades, pinballs, consolas, etc. 
                La diversion estará garantizada una vez que cruces esa puerta.</p>
            </div>
        </div>
        <div class="bloque">
            <div class="texto">                
                <h1>Restaurante</h1>
                <p>Ofrecemos una gran variedad de comidas para llenar ese estómago hambriento de tanto
                    jugar. Te ofrecemos una selección de comida temática que te encantará.</p>
            </div>
            <div class="imagen">
                <a href="menu.php">
                    <img src="Imagenes/Pikaburger.jpg" alt="">
                </a>  
            </div>
        </div>
        <div class="bloque">
            <div class="imagen">
                <a href="menu.php">
                   <img src="Imagenes/Bebidas-Inicio.png" alt="">
                </a>
            </div>
            <div class="texto">                
                <h1>Bar</h1>
                <p>Si tienes ganas de beber para pasar el rato con tus amigos, puedes elegir 
                    entre la gran variedad de bebidas temáticas que tenemos disponibles. 
                    Tanto su sabor como su apariencia estarán inspirados en tus personajes favoritos.</p>
            </div>
        </div>
        <div class="bloque">
            <div class="texto">                
                <h1>Celebra tu cumpleaños con nosotros</h1>
                <p>Haz que tu cumpleaños sea una experiencia inolvidable con nosotros, donde 
                    podrás jugar, comer y beber con tus seres queridos.</p>
            </div>
            <div class="imagen">
                <a href="reservaciones.php">
                   <img src="Imagenes/Festejo.jpg" alt="">
                </a>
            </div>
        </div>
        <div class="bloque">
            <div class="imagen">
                <a href="promos.php">
                    <img src="Imagenes/Promo-Inicio.jpg" alt="">
                </a>
            </div>
            <div class="texto">                
                <h1>Promociones increíbles</h1>
                <p>Ofrecemos muchas promociones para que no tengas ninguna excusa para no 
                    venir y pasar un rato divertido.</p>
            </div>
        </div>        
    </div>
    <?php include 'Componentes/footer.php'; ?>
    <script src="js/index.js"></script>
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
</body>
</html>
