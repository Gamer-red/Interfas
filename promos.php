<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/promos.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
   
    <?php include 'Componentes/header.php'; ?>
    <div class="contenedor">
        <div class="fondo">
            <p>Promociones</p>
        </div>
        <div class="frase">
            Diviertete al maximo con todas las opciones que tenemos para ti: 
         </div>
         <div class="cards">
             <div class="card">
                 <img src="Imagenes/Promos/fandestacado.avif" alt="">
                 <h1>Dia del Fan Destacado</h1>
                 <p>
                    El primer jueves de cada mes ENTRAS GRATIS siempre y cuando seas Fan Destacado 
                    en Facebook, así que dale like, comenta y comparte para ser parte de esta promo.
                </p>
             </div>
             <div class="card">
                 <img src="Imagenes/Promos/jueves-de-chicas.avif" alt="">
                 <h1>Jueves de Chicas</h1>
                 <p>
                    Todos los jueves las chicas pagan la mitad para su brazalete ilimitado, solo 
                    menciona esta promo antes de pagar
                </p>
             </div>
             <div class="card">
                 <img src="Imagenes/Promos/tigres-rayados.avif" alt="">
                 <h1>Tigres/Rayados</h1>
                 <p>
                    Si juega el equipo local y traes tu playera el día del juego, pagas la mitad al 
                    mencionarlo en la entrada.
                </p>
             </div>
             <div class="card">
                 <img src="Imagenes/Promos/domingo-familiar.avif" alt="">
                 <h1>Domingo Familiar</h1>
                 <p>
                    Vente en familia, menciona esta promo y pagas 3 brazaletes y recibes 4.
                </p>
             </div>
             <div class="card">
                 <img src="Imagenes/Promos/mayores.avif" alt="">
                 <h1>Descuento para Mayores</h1>
                 <p>
                    Todos los adultos mayores que muestren su tarjeta del INSEN o INAPAM pagan 
                    la mitad en su brazalete.
                </p>
             </div>
             <div class="card">
                 <img src="Imagenes/Promos/descuento.avif" alt="">
                 <h1>Pago en efectivo</h1>
                 <p>
                    Cupón válido por $50 de descuento.
                </p>
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