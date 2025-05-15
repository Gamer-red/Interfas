<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/juegos.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php include 'Componentes/header.php'; ?>
    <div class="contenedor">
        <div class="fondo">
            <p>Juegos</p>
        </div>
        <div class="frase">
            Diviértete al máximo con todas las opciones que tenemos para ti:
        </div>
        <div class="opciones">
            <a href="#Arcades">
                <img src="Imagenes/Arcade.jpg" alt="">
                <span>Arcades</span>
            </a>
            <a href="#Pinballs">
                <img src="Imagenes/Pinball.png" alt="">
                <span>Pinballs</span>
            </a>
            <a href="#Familiares">
                <img src="Imagenes/familiar.PNG" alt="">
                <span>Familiares</span>
            </a>
        </div>

        <div class="seccion" id="Arcades">
            Arcades
        </div>
        <div class="cards">
            <div class="card">
                <img src="Imagenes/Juegos/arcade-Afterburner.jpg" alt="">
                <p>Afterburner</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/arcade-Arkanoid.jpg" alt="">
                <p>Arkanoid</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/arcade-Capcom vs SNK.jpg" alt="">
                <p>Capcom vs SNK</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/arcade-CHUNITHM.jpg" alt="">
                <p>CHUNITHM</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/arcade-Crazy Taxi.jpg" alt="">
                <p>Crazy Taxi</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/arcade-Dragons Lair.jpg" alt="">
                <p>Dragon's Lair</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/arcade-Guitar Hero.jpg" alt="">
                <p>Guitar Hero Arcade</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/arcade-Marvel vs Street Fighter.jpg" alt="">
                <p>Marvel vs Street Fighter</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/arcade-Mortal Kombat 2.jpg" alt="">
                <p>Mortal Kombat II</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/arcade-Space Invaders.jpg" alt="">
                <p>Space Invaders</p>
            </div>
        </div>

        <div class="seccion" id="Pinballs">
            Pinballs
        </div>
        <div class="cards">
            <div class="card">
                <img src="Imagenes/Juegos/pinball-Elvis.jpg" alt="">
                <p>Elvis</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/pinball-Star Wars.jpg" alt="">
                <p>Star Wars</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/pinball-Batman Forever.jpg" alt="">
                <p>Batman Forever</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/Simpsons Pinball Party.webp" alt="">
                <p>Simpsons Pinball Party</p>
            </div>
        </div>

        <div class="seccion" id="Familiares">
            Juegos familiares
        </div>
        <div class="cards">
            <div class="card">
                <img src="Imagenes/Juegos/Mesa de hockey.jpg" alt="">
                <p>Mesa de hockey</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/Pump it Up Phoenix online.jpg" alt="">
                <p>Pump it Up Phoenix Online</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/Dance Dance Revolution A3 online.jpg" alt="">
                <p>Dance Dance Revolution A3 Online</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/UNO gigante.jpg" alt="">
                <p>UNO gigante</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/Jenga gigante.webp" alt="">
                <p>Jenga gigante</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/Adivina quién.jpg" alt="">
                <p>Adivina quién</p>
            </div>
            <div class="card">
                <img src="Imagenes/Juegos/Conecta 4 gigante.jpg" alt="">
                <p>Conecta 4 gigante</p>
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
