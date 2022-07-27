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

    <main class="productos grid">
        <div class="productos__field sombra">
            <h1>Harinas Tres Estellas</h1>
            <p> Al estar fabricada de acuerdo a las especificaciones precisas del cliente, BakeryMix permite ahorrar en azúcar, grases, saborizantes
                y emulsificantes, pues evitan los desperdicios y sobrantes que se generan en el proceso de mezcla de estos igredientes </p>
            <p>Surtir tu panadería con BakeryMix es esencial para lograr recetas saludables. Lo fabricamos con ingredientes de la mejor calidad,
             porque creemos que comer rico también es comer sano. </p>
            <br>
            <h2>Nuestros Productos</h2>
            <div class="grid subproductos">
                <?php
                    include 'utilerias.php';
                    $cs=conecta();
                    $query="SELECT * FROM productos, tipos WHERE tipo_prod='2' and cve_tipo='2' ORDER BY nom_prod";
                    $sql=mysqli_query($cs,$query);
                    while ($reg=mysqli_fetch_object($sql)) {
                        echo "
                            <div class = 'subproductos__field grid'>
                                <img src = 'images/$reg->img_prod'>
                                <div class = 'flex center'>
                                    <p><span>$reg->nom_prod</span> <br> <br> $reg->des_prod </p>
                                </div>
                                <div class = 'flex center'>
                                    <h3> Presentaciones <br> <br> $reg->presenta_prod </h3>
                                </div>
                            </div>
                        ";
                    }
                ?>
            </div>
        </div>
        <br>
        <aside class="productos__field flex sombra">
            <div>
                <h3>Descarga el PDF de Harinas Tres Estrellas</h2>
                <a href="pdfs/00Catálogo_HPI_3E_ld.pdf" download="HarinasTresEstrellas">
                    <p>Descarga</p>
                </a>
            </div>
            <div>
                <h3>Conóce nuestras recetas</h3>
                <a href="recetario.php">
                    <p>Recetario</p>
                </a>
            </div>
        </aside>
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