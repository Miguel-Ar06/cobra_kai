<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streaming</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <img class="position-absolute img-fluid" style="width: 100%; padding: 15% 0 ; z-index: 0;" src="media/banner4.png" alt="banner" >
    <?php require 'templates/navbar.html.php'; ?>

        <!-- Div Para el apartado de temporadas -->
        <div id="espacio_vacio" style="padding-top: 900px; position: relative; z-index: 1;"></div>
            <div class="container-fluid pt-5 pb-5" >
            <h1 class="text-center text-white dead-stock titulo mb-5">Cobra Kai Temporadas</h1>
                <div class="row justify-content-center gx-5">
                    <a href="temporada1.php" class="col-3 Temporada Temporada1 img-fluid m-4" style="z-index: 1;"></a>
                    <div class="col-3 Temporada Temporada2 img-fluid m-4" style="z-index: 1;"></div>
                    <div class="col-3 Temporada Temporada3 img-fluid m-4" style="z-index: 1;"></div>
                    <div class="col-3 Temporada Temporada4 img-fluid m-4" style="z-index: 1;"></div>
                </div>
            </div>
            
        <!-- Div Para el fondo -->
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/pareda1.png); background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center;">
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/pareda2.png); background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center;">

        <!-- Div Para el apartado de peliculas -->
            <div class="container-fluid pt-5 pb-5" >
            <h1 class="text-center text-warning dead-stock titulo mb-5">Karate Kid Peliculas</h1>
                <div class="row justify-content-center gx-5">
                    <a href="pelicula.php" class="col-3 Pelicula Pelicula1 img-fluid m-4" style="z-index: 1;"></a>
                    <div class="col-3 Pelicula Pelicula2 img-fluid m-4" style="z-index: 1;"></div>
                    <div class="col-3 Pelicula Pelicula3 img-fluid m-4" style="z-index: 1;"></div>
                    <div class="col-3 Pelicula Pelicula4 img-fluid m-4" style="z-index: 1;"></div>
                </div>
            </div>
        </div>
    <!-- Div Primera Barra -->
    <div id="espacio_vacio" style="padding-top: 250px; position: relative; z-index: 1;"></div>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/Lineakarate.png); height: 130px; background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center;">
    </div>


    <?php include 'templates/footer.html.php'; ?>
</body>
</html>