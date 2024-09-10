<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suits</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.materialdesignicons.com/6.4.95/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="assets/css/home.css">

</head>

<body>
            <?php include '../proyecto/includes/logo.php'; ?>
            <?php include 'includes/nav.php'; ?>

            <footer>
                <p class="texto-footer">© 2024 Suits Coder</p>
            </footer>
        </aside>
        
    <main>
        <div class="main-content">
            <div class="pink-section">
                <div class="image-container">
                <img src="https://suitshop.com/static/72592fce5038bec42e6715ddffc40a3f/0cf9e/Team_image_desktop%402x.webp" alt="Grupo de personas">
                </div>
            <div class="content">
                <h4>EMPEZAR</h4>
                <h2>Registrate para navegar</h2>
                <p>¿Quiéres comprar trajes sin limites en nuestra web?
                ¿Necesitas alquilar un vestido para el fin de semana?
                ¿Estas buscando la ropa más elegante para tu próximo evento?</p> 
                <button class="cta-button" onclick="location.href='presentacion/login.php'">REGÍSTRATE AHORA</button>
            </div>
        </div>
    </div>
    <div class="brand-section">
    <h2 class="section-title">Marcas con las que trabajamos</h2>
    <div class="brand-cards">
        <div class="brand-card">
            <div class="imagen-marca"><img src="https://www.santiagoelegante.cl/uploads/1/3/3/0/13300631/editor/hugo-boss-campa-a-ss-18-30x22-5-cm-aviso-de-prensa.jpeg?1516202958" alt="Hugo Boss"></div>
            <div class="brand-info">
                <h3>HUGO BOSS</h3>
                <p>Hugo Boss es una de las marcas de diseño en trajes y vestidos más importantes del mundo, reconocida por su vestimenta de alto nivel y cálidad.</p>
            </div>
        </div>
        <div class="brand-card">
        <div class="imagen-marca"><img src="https://images.midilibre.fr/api/v1/images/view/5c373b463e45466dfa52b9fd/large/image.jpg" alt="Prada"></div>
            <div class="brand-info">
                <h3>PRADA</h3>
                <p>Sinónimo de glamour, esta marca de lujo te proporcionará los accesorios de más alto nivel que podrías encontrar en una tienda de moda. </p>
            </div>
        </div>
    </div>
</div>

<br>

<div class="carousel-section">
    <div class="carousel-container">
    <div class="carousel-header">
        <h2>Estilos usados ahora.</h2>
        <p>Obten la última moda.</p>
        <br>
    </div>
    <div class="carousel-wrapper">
        <button class="carousel-btn prev-btn">&#10094;</button>
        <div class="carousel-track">
            <div class="carousel-item">
                <img src="https://cdn.shopify.com/s/files/1/1025/3059/products/NAVY_BLUE_SUIT__075_0ba78598-6c22-4024-820e-019a5fdb109a_900x1250_crop_center.jpg.webp?v=1643118883" alt="Traje azul brillante para hombre">
                <p>Traje azul marino $6.890</p>
            </div>
            <div class="carousel-item">
                <img src="https://i.ibb.co/Fx5Hgwt/rojo-1.jpg" alt="rojo">
                <p>Vestido Rojo sin mangas $5.400</p>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.shopify.com/s/files/1/1025/3059/products/LOOK_9_020_2c3f48c4-e652-4678-9b8f-e1229600a8c6_900x1250_crop_center.jpg.webp?v=1674584166" alt="Traje verde oscuro para hombre">
                <p>Smoking negro $8.890</p>
            </div>
            <div class="carousel-item">
                <img src="https://i.ibb.co/bBK3SJY/blanco2-2.jpg" alt="Otro">
                <p>Vestido corto blanco $4.850</p>
            </div>
            <div class="carousel-item">
                <img src="https://cdn.shopify.com/s/files/1/1025/3059/products/MENS_TAN_EDITED_900x1250_crop_center.jpg.webp?v=1658282172" alt="Otro">
                <p>Traje color Canela $7.490</p>
            </div>
            <div class="carousel-item">
                <img src="https://i.ibb.co/TBGsRCs/vest-2.jpg" alt="Otro">
                <p>Vestido Negro escotado $4.300</p>
            </div>
        </div>
        </div>
        <button class="carousel-btn next-btn">&#10095;</button>
    </div>
</div>
<br>


        </main>   
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="assets/js/home.js"></script>
</body>

</html>