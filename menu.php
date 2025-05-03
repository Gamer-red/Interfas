<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php include 'Componentes/header.php'; ?>
    <div class="contenedor">
        <div class="fondo">
            <p>Menu</p>
        </div>
        <div class="opciones-menu">
            <a href="#Entradas">
                <img src="Imagenes/Comida2.PNG" alt="Comidas">
                <p>Comidas</p>
            </a>
            <a href="#Bebidas">
                <img src="Imagenes/Bebidas.png" alt="Bebidas">
                <p>Bebidas</p>
            </a>
        </div>
        <div class="seccion" id="Entradas">
            Entradas
        </div>
        <div class="cards">
            <div class="card">
                <div class="contenido">
                    <h1>Papas La Horda</h1>
                    <p>150gr de nuestra mejor seleccion de papas acompañadas de pollo empanizado y bañadas en 
                        salsa habanera con queso cheddar espolvoreadas con tocino</p>
                    <h1>$95</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/Papas la horda.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Nachos Arcade</h1>
                    <p>Totopos estilo nacho acompañados de frijoles refritos bajo una capa de chili y 
                        bañados con queso cheddar "Un sabor para rescatar a cualquiera"</p>
                    <h1>$95</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/Nachos-Arcade.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Papas Italianas</h1>
                    <p>Sazonadas con finas hierbas y un toque secreto de la casa</p>
                    <h1>$60</h1>
                    <p>Bañalas con salsa de tu eleccion ...$15</p>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/papas-italianas.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Papas Chile y Limon</h1>
                    <p>Espolvoreadas con un toque de lemmon pepper</p>
                    <h1>$60</h1>
                    <p>Bañalas con salsa de tu eleccion ...$15</p>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/pikaburguer.webp" alt="">
                </div>
            </div>
        </div>
        <div class="seccion" id="Platillos">
            Platillos
        </div>
        <div class="cards">
            <div class="card">
                <div class="contenido">
                    <h1>Sampler</h1>
                    <p>6 sticks de queso mozzarella. Papas gajo(150gr). Papas italianas(150gr). Alitas(400gr).
                         Boneless(200gr). Bañados en salsa de tu eleccion y acompañado de un dip de tomate</p>
                    <h1>$260</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/sampler.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>PikaBurger</h1>
                    <p>Pechuga de pollo empanizada, bañada en nuestra picosita salsa buffalo, aderezo de chipotle,
                         queso manchego, sobre pan brionche con un toque de mantequilla, acompañada de 200gr de 
                         papas a la francesa
                    </p>
                    <h1>$150</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/pikaburguer.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Tacos de Sirlon</h1>
                    <p>4 deliciosos tacos con 150gr de carne sobre tortilla amarilla, acompañados con 
                        cebolla y cilantro y nuestra inigualable salsa verde</p>
                    <h1>$160</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/tacos-sirlon.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Hamburguesa</h1>
                    <p>150gr de jugosa carne de res, acompañada de crujiente tocino, combinado con nuestra
                         salsa BBQ, servida con 150gr de papas a la francesa</p>
                    <h1>$150</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/hamburguesa.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Boneless</h1>
                    <p>300gr de trocitos de pechuga de pollo bañados en salsa de tu preferencia, 
                        acompañados de 200gr de papas a la francesa</p>
                    <h1>$120</h1>
                    <p>Naturales, BBQ, Bufalo, Habanero</p>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/boneless.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Alitas</h1>
                    <p>500gr de alitas de pollo</p>
                    <h1>$120</h1>
                    <p>750gr de alitas de pollo</p>
                    <h1>$150</h1>
                    <p>BBQ, Bufalo, Mango Habanero</p>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/alitas.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Dedos de queso</h1>
                    <p>6 sticks de queso mozarella y 200gr de papas a la francesa, acompañados 
                        de nuestro delicioso dip de tomate</p>
                    <h1>$80</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/dedos-queso.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Yoshi Salad</h1>
                    <p>Nuestra deliciosa ensalada, elaborada con una mezcla de lechugas mixtas y zanahoria 
                        rallada con vinagreta. acompañada de pechuga de pollo empanizada bañada en adereso 
                        ranch, espolvoreada con queso parmesano y crujientes crotones</p>
                    <h1>$110</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/yoshi-salad.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Alitas Veganas</h1>
                    <p>Delicioso platillo hecho a base de coliflor al estilo tempura, espolvoreados de paprika  
                        acompañadas de adereso de chipotle</p>
                    <h1>$85</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/alitas-veganas.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Cajita Kids</h1>
                    <p>150gr de boneless acompañados de papas a la fancesa, agua de jamaica y bebida a 
                        elegir(ICE infantil o Bomba de chicle) + juguete de temporada. Solo disponible 
                        para menores de 10 años</p>
                    <h1>$150</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/cajita-kids.webp" alt="">
                </div>
            </div>
        </div>
        <div class="seccion" id="Bebidas">
            Bebidas
        </div>
        <div class="cards">
            <div class="card">
                <div class="contenido">
                    <h1>Kirby</h1>
                    <p>Mix colada, bacardi raspberry, tajin, licor de fresa y granadina</p>
                    <h1>$80</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/bebida-kirby.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Pickachu</h1>
                    <p>Bacardi mango chile, licor de durazno, mango natural, tajin, jugo de mango</p>
                    <h1>$80</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/bebida-pikachu.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Blanka</h1>
                    <p>Licor de melon, crema de coco, jugo durazno, licor de fresa</p>
                    <h1>$80</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/bebida-blanka.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Major Bison</h1>
                    <p>Vodka, licor de fresa, pucker de sandia y fresca</p>
                    <h1>$80</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/bebida-major-bison.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Chamoi Iori</h1>
                    <p>Tequila, licor de fresa, chamoy artesanal, tamarindo y jugo de uva</p>
                    <h1>$80</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/bebida-chamoi-lori.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Princess Peach</h1>
                    <p>Vodka, pucker durazno, tasty sandia y cereza</p>
                    <h1>$80</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/bebida-princess-peach.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Mega Man</h1>
                    <p>Stolichnaya blueberry, pucker fruit punch y sprite</p>
                    <h1>$80</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/bebida-megaman.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Zelda</h1>
                    <p>Vodka, tasty manzana verde, licor de melón y sprite</p>
                    <h1>$80</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/bebida-zelda.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Yoshi Land</h1>
                    <p>Licor de melon, pucker de manzana, acompañado con bolitas de manzana</p>
                    <h1>$80</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/bebida-yoshi.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Donkey Kong</h1>
                    <p>vodka, jugo uva, licor de platano, jarabe y agua mineral</p>
                    <h1>$80</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/bebida-dk.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Goomba</h1>
                    <p>Smirnoff tamarindo, jugo de piña, sprite y tamarindo</p>
                    <h1>$80</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/bebida-goomba.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Jigglypuff</h1>
                    <p>Absolut, extracto de chicle, crema de coco</p>
                    <h1>$80</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/bebida-jigglypuff.png" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Pac Man</h1>
                    <p>melon, pucker de manzana, acompañado con bolitas de manzana. vodka, jugo de piña, 
                        curazao, mix colada, licor de fresa y granadina</p>
                    <h1>$80</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/bebida-pacman.png" alt="">
                </div>
            </div>
        </div>
        <div class="seccion" id="Shots">
            Shots
        </div>
        <div class="cards">
            <div class="card">
                <div class="contenido">
                    <h1>Alucard</h1>
                    <p>vodka, licor de fresa, pucker de sandia y fresca</p>
                    <h1>$50</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/shot-alucard.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>Fatality</h1>
                    <p>Absolut raspberry, curazao, pucker fruit punch y sprite</p>
                    <h1>$50</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/shot-fatality.webp" alt="">
                </div>
            </div>
            <div class="card">
                <div class="contenido">
                    <h1>SubZero</h1>
                    <p>Absolut raspberry, curazao, pucker fruit punch y sprite</p>
                    <h1>$50</h1>
                </div>
                <div class="imagen">
                    <img src="Imagenes/Menu/shot-subzero.webp" alt="">
                </div>
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