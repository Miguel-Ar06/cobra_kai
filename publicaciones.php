<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicaciones</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <img class="position-absolute img-fluid" style="width: 100%;  z-index: -1';" src="media/FondoRojoOk.png" alt="banner">
    <?php require 'templates/navbar.html.php' ;?>
    <h1 class="text-center text-warning dead-stock titulo mb-5 position-relative" style="z-index: 10;">Publicaciones</h1>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" style="">
        <p class="text-white bahnschrift h4 fs-1" style="margin-right: 15%; margin-left: 15%; width: 80%; margin-top: 20%; margin-bottom: 10%; padding-left:5% ; padding-right:5%; text-align: center;">
            Ponte al día con las últimas actualizaciones de los usuarios y comparte contenido para la comunidad.
        </p>
        <div class = "row" style="width: 24%; margin-left:-40%; margin-bottom: 1%;">
            <div class="col">
                <img src="media/FotoPerfil1.png" alt="">
            </div>
            <div class="col" style="padding-top: 8%">
                <h1 class="text-white dead-stock titulo position-relative fs-2" style=" z-index: 10; width: 100%">Sr LaRusso</h1>
            </div>
        </div>
        <div class="row">
            <img src="media/panas.png" alt="">
        </div>
        <div class="row gx-0">
            <div class="col" style="">
                <img src="media/punio.png" alt="">
            </div>
            <div class="col">
                <p class="text-white bahnschrift h4 fs-1" style="margin-right: 15%; margin-left: 15%; width: 80%; margin-top: 20%; margin-bottom: 10%; padding-left:5% ; padding-right:5%; text-align: center;">
                    3,015 Puntos
                </p>
            </div>
        </div>
    </div>
</body>
</html>