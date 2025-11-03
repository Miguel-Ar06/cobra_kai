<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php require 'templates/navbar.html.php'; ?>

    <div class="row">
        <div class="col">
            <img src="media/icono_usuario.png" alt="pepe" style="width: 60%; height: 60%; margin-top: 10%; margin-left: 70%;">
        </div>
        <div class="col">
            <p class="text-center text-white dead-stock titulo mb-5 fs-2" style="margin-top: 9%;">Dojo</p>
            <img src="media/doj.png" alt="pepe" style="width: 35%; height: 35%; margin-top: -6%; margin-left: 40%;">
        </div>
    </div>
    <div class="row">
        <h1 class="text-center text-white dead-stock titulo mb-5" style="margin-top: -6%;">Sr LaRusso</h1>
    </div>
    <div class="row">
        <h1 class="text-center text-white bahnschrift titulo mb-5 fs-2" style="margin-top: -3%;">@sr.DLaRuss</h1>
    </div>

    <div class="row" style="margin-top: 5%;">
    <div class="col">
        <h1 class="text-center text-white dead-stock titulo mb-5 fs-1" style="margin-top: -6%;">Rango Rojo</h1>
    </div>
    <div class="col">
        <h1 class="text-center text-white dead-stock titulo mb-5 fs-2" style="margin-top: -6%;">Puntos Necesarios Para Subir de Rango</h1>
    </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="media/rr.png" alt="" style="margin-top: 4%; margin-left: 36%;">
        </div>
        <div class="col">
            <img src="media/exp.png" alt="" style="margin-right: 4%;">
        </div>
    </div>
    <div class="row" style="margin-top: 9%;">
        <h1 class="text-center text-white dead-stock titulo mb-5 fs-2" style="margin-top: -6%;">Siguiente Rango Cinta Negra</h1>
    </div>

    <h1  class="text-center text-white dead-stock titulo mb-5 fs-2" style="margin-top: 4%; margin-bottom: 4%;">Como Obtener Mas Puntos</h1>

    <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/autistasa.png); height: 130px; background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center;">
    </div>

    <h1 class="text-left text-white dead-stock titulo mb-5 fs-2" style="margin-top: 4%; margin-bottom: 4%; margin-left: 15%;">Publicaciones</h1> 
    <div class="row">
        <img src="media/publicos.png" alt="pepe" style="width: 100%; height: 100%;">
    </div>

    <h1 class="text-left text-white dead-stock titulo mb-5 fs-2" style="margin-top: 4%; margin-bottom: 4%; margin-left: 15%;">Foros</h1>    
    <div class="row" style="margin-left: 15%; margin-right: 15%;">
        <img src="media/foraneos.png" alt="pepe" style="width: 100%; height: 100%;">
    </div>

    <h1 class="text-left text-white dead-stock titulo mb-5 fs-2" style="margin-top: 4%; margin-bottom: 4%; margin-left: 15%;">Favoritos</h1>    
    <div class="row" style="margin-bottom: 15%;">
        <img src="media/fav.png" alt="pepe" style="width: 100%; height: 100%;">
    </div>



    <?php include 'templates/footer.html.php'; ?>
</body>
</html>