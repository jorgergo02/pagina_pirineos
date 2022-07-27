<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Harinera los Pirineos</title>
    <title> Harinera Los Pirineos </title>
    <link rel="icon" href="images/Logo.png">
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c1eae85dfa.js" crossorigin="anonymous"></script>
    <script src="js/main.js" defer></script>
</head>
<body>

    

    <header class="top flex">
        <a href="https://www.facebook.com/impulsopirineos">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
            </svg>
        </a>
        <p> Llama ahora: <span> 01 800 464 9600 </span> </p>
    </header>

    <nav class="menu flex">
        <a href="index.html">
            <img class="logoPirineos" src="images/Correo2 H Los Pirineos.png" alt="logo">
        </a>
        <ul class="menu__items flex">
            <li><a href="index.html"> Inicio </a></li>
            <li class="active"><a href="nuestrosProductos.php"> Nuestros productos </a></li>
            <li><a href="recetario.php"> Recetario </a></li>
            <li><a href="servicioTecnico.html"> Servicio Técnico </a></li>
            <li><a href="contacto.html"> Contacto </a></li>
        </ul>
        <span class="btn-menu">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu" width="32" height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="#246541" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <line x1="4" y1="8" x2="20" y2="8" />
                <line x1="4" y1="16" x2="20" y2="16" />
              </svg>
        </span>
    </nav>

    <?php
        function addType($img, $type, $text, $link) {
            echo "
                <div class = ' nuestrosProductos__field grid '>
                    <img src = ' images/$img '>
                    <div class = 'flex center'>
                        <p> <span> $type </span> <br> $text </p>
                    </div>
                    <div class = 'flex center'>
                        <a href = '$link'>
                            <input type = 'button' class = 'boton green-button' value = 'Explora Catálogo'>
                        </a> 
                    </div>
                </div>
            ";
        }
    ?>

    <h1 class="title">NUESTROS PRODUCTOS</h1>

    <main class="nuestrosProductos grid">
        <?php
            addType("Logo_estrella_del_bajio.png", "HARINAS DE TRIGO", "Nos especializamos en Harinas de Trigo para el sector panadero
            tradicional e industrial, por lo que ofrecemos toda una gama de productos específicos para cada
            necesidad, obtenidos de la mezcla y molienda exacta de granos de trigos seleccionados, maduros,
            limpios y sanos.", "harinasTrigo.php");
            addType("Logo_Tres_Estrellas.png", "HARINAS PREPARADAS TRES ESTRELLAS", "Harina preparada con la mezcla exacta de ingredientes
            para la elaboración de especialidades en panificación. Al ser una harina lista para usarse, garantiza ahorro
            en tiempo y recursos.", "harinasTresEstrellas.php");
            addType("Logo_RendiMix.png", "MEJORANTE RENDIMIX", "Mejorante para panificación que refuerza las características de la
            harina, logrando un mayor rendimiento, un mejor volúmen del plan, además alarga la vida útil de cada pieza
            horneada.", "rendimix.php");
            addType("Logo_Tres_Estrellas.png", "POLVO PARA HORNEAR TRES ESTRELLAS", "", "");
            addType("Collage_Tres_Estrellas_Ago_2021.jpg", "HARINA PARA EL HOGAR", "", "https://www.tres-estrellas.com/");
            addType("Logo%20HPI%20contorno_blanco.png", "DERIVADOS DE TRIGO", "Harinera Los Pirineos ofrece un amplio portafolio de derivados de
            trigo con valor agregado para diferentes usos, abarcando desde grado alimenticio para consumo humano
            hasta uso forrajero.", "derivadosTrigo.php");
        ?>
    </main>

    <div class="footer-container">
        <footer class="foot">
            <div class="foot__field">
                <h2> Contacto </h2>
                <p> Tel: 01 (800) 147 4444 </p>
                <p> Carretera Panamericana Km. 11 <br> Tramo Salamanca - Celaya, <br>
                    Col. Emiliano Zapata. C.P. 36770 <br> Salamanca Guanajuato </p>
            </div>
            <div class="foot__field">
                <h2> Boletín </h2>
                <a href="servicioTecnico.html"> <p class="subrayado"> Aviso de privacidad </p> </a>
                <a href="contacto.html"> <p class="subrayado"> Encuentra tu distribuidor </p> </a>
                <a href="servicioTecnico.html"> <p class="subrayado"> FAQ </p> </a>
            </div>
            <div class="foot__field">
                <h2> Bolsa de Trabajo </h2>
                <a href="contacto.html"> <p class="subrayado"> Intégrate a nuestro equipo </p> </a>
            </div>
            <div class="foot__field">
                <h2> Síguenos en: </h2>
                <a href="https://www.facebook.com/impulsopirineos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="36" height="36" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                      </svg>
                </a>
                <br><br>
                <h2> Descargas PDF </h2>
                <a href="recetario.php"> <p class="subrayado"> Descarga nuestras recetas </p> </a>
            </div>
        </footer>
        <div class="foot__line"></div>
        <div class="foot-text">
            <p> Grupo La Moderna -- Todos los derechos reservados </p>
        </div>
    </div>

</body>
</html>