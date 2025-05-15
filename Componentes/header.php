<?php
$current_page = basename($_SERVER['SCRIPT_NAME']);
?>
<header>
        <div class="header-inner">
            <div class="logo-container">
                <a href="index.php" class="logo">
                    <img src="Imagenes/LogoClear.png" alt="Logo">
                    <span>La Horda Bar Arcade</span>
                </a>
                <button class="menu-toggle" aria-label="Abrir menú">&#9776;</button>
            </div>
            <nav class="nav-links">
            <a href="promos.php" class="<?= $current_page == 'promos.php' ? 'active' : '' ?>">Promociones</a>
            <a href="reservaciones.php" class="<?= $current_page == 'reservaciones.php' ? 'active' : '' ?>">Reservaciones</a>
            <a href="menu.php" class="<?= $current_page == 'menu.php' ? 'active' : '' ?>">Menú</a>
            <a href="juegos.php" class="<?= $current_page == 'juegos.php' ? 'active' : '' ?>">Juegos</a>
            <a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Inicio</a>
            </nav>
        </div>
</header>