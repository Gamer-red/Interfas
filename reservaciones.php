<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/reservaciones.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <?php include 'Componentes/header.php'; ?>
    <div class="contenedor">
        <div class="fondo">
            <p>Reservaciones</p>
        </div>
        <div class="titulo">
            Haz feliz a tu gamer interior y divertete en grande 
         </div>
         <div class="restricciones">
            <div class="columna">
                <p>Antes de reservar una mesa ten en cuenta estos puntos:</p>
                <ul>
                    <li>
                        Todas las maquinas son FREE PLAY (excepto las Pinball).
                    </li>
                    <li>
                        BRAZALETE DE ACCESO $200, puedes jugar todas las arcades de forma ilimitada, 
                        juegos de mesa y maquinas de baile, solamente no incluye los Pinballs.
                    </li>
                    <li>
                        Por seguridad de nuestros clientes - NO SE ADMITE entrar con mochilas, maletas y/o 
                        equipaje. 
                    </li>
                    <li>
                        Acceso a menores de edad cualquier dia hasta las 10:00pm(obligatorio acompañados de 
                        un adulto cada menor), pasadas las 10pm solo debe haber mayores de edad, ultima 
                        hora de acceso a menores es 8:30pm para que puedan disfrutar del lugar SIN EXCEPCION.
                    </li>
                    <li>
                        IMPORTANTE: Mesas en el interior de 1,2,4 y 6 personas. Si es un grupo mayor a 6 
                        personas la mesa EN PATIO.
                    </li>
                </ul>
            </div>
            <div class="columna">
                <p>Si quieres reservar todo el local, la siguiente informacion sobre costos es importante:</p>
                <ul>
                    <li>
                        Lunes a Miercoles $9000 x 5 horas.
                    </li>
                    <li>
                        Jueves a Sabado $13000 x 5 horas, horario máximo permitido 5:00pm (ya que abrimos a 
                        las 6:00pm).
                    </li>
                    <li>
                        Domingo $13000 x 5 horas, horario máximo permitido 2:00pm (ya que abrimos a las 
                        3:00pm).
                    </li>
                    <li>
                        Capacidad 120 personas, no incluye alimentos ni bebidas (puede traerlo usted).
                    </li>
                    <li>
                        Se separa con almenos 15 dias de anticipación pagado al 50%, o con al menos 7 
                        dias de anticipación pagando el 100%.
                    </li>
                </ul>
            </div>
         </div>
         <div class="titulo">
            No esperes mas y haz tu reservación aquí mismo
         </div>
         <div class="formulario">
            <form action="#" id="reserva" name="reserva">
                <Label for="tipo">Tipo de reservación:</Label>
                <select name="tipo" id="tipo" onchange="mostrarCampo()">                    
                    <option value="">--Seleccione una opcion--</option>
                    <option value="mesa">Reservar una mesa</option>
                    <option value="local">Reservar el local</option>
                </select>
                <div class="oculto" id="reserva-mesa">
                    <label for="cantidad">Invitados</label>
                <select name="cantidad" id="cantidad">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="mayor">+6</option>
                </select>
                <label for="dia">Dia</label>
                <select name="dia" id="dia">
                    <option value="jueves">Jueves</option>
                    <option value="viernes">Viernes</option>
                    <option value="sabado">Sabado</option>
                    <option value="domingo">Domingo</option>
                </select>
                <label for="hora">Hora</label>
                <select name="hora" id="hora">
                    <option value="1500">15:00</option>
                    <option value="1530">15:30</option>
                    <option value="1600">16:00</option>
                    <option value="1630">16:30</option>
                    <option value="1700">17:00</option>
                    <option value="1730">17:30</option>
                    <option value="1800">18:00</option>
                    <option value="1830">18:30</option>
                    <option value="1900">19:00</option>
                    <option value="1930">19:30</option>
                    <option value="2000">20:00</option>
                    <option value="2030">20:30</option>
                    <option value="2100">21:00</option>
                    <option value="2130">21:30</option>
                    <option value="2200">22:00</option>
                    <option value="2230">22:30</option>
                    <option value="2300">23:00</option>
                </select>
                </div>

                <div class="oculto" id="reserva-local">
                    <label for="dia">Dia</label>
                <select name="dia" id="dia">
                    <option value="lunes">Lunes</option>
                    <option value="martes">Martes</option>
                    <option value="miercoles">Miercoles</option>
                    <option value="jueves">Jueves</option>
                    <option value="viernes">Viernes</option>
                    <option value="sabado">Sabado</option>
                    <option value="domingo">Domingo</option>
                </select>
                </div>
                
                <label for="nombre">Nombre</label>
                <input type="text">

                <label for="correo">Correo</label>
                <input type="email">

                <label for="telefono">Telefono</label>
                <input type="text">

                <input type="submit">
            </form>
         </div>
    </div>
    <?php include 'Componentes/footer.php'; ?>
    <script src="js/index.js"></script>    
    <script src="js/reservacion.js"></script>
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