<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelicula</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php require 'templates/navbar.html.php'; ?>
    <?php require 'templates/splash.html.php'; ?>

        <div id="espacio_vacio" style="padding-top: 360px; position: relative; z-index: 1;"></div>

        <!-- Div Para el episodio -->
            <div class="container-fluid pt-5 pb-5">
                <div class="row justify-content-center gx-5">
                    <div class="col-3 EpisodioPlay Play2 img-fluid m-1" style="z-index: 1;"></div>
                </div>
            </div>

        <h1 class="text-center text-white dead-stock titulo mb-5">Karate Kid 1984</h1>

        <!-- Div Para sinopsis -->
        <div class="container-fluid pt-5 pb-5">
            <p class="text-align-left text-white bahnschrift titulo fs-1" style="margin-left: 19%; margin-right: 19%;">
                Daniel LaRusso es un adolescente que acaba de mudarse al valle <br>
                 el cual es víctima de acoso por parte de los miembros del dojo <br>
                 Cobra Kai. El Sr. Miyagi un sabio veterano de guerra japonés se <br>
                  ofrece a entrenarlo para defender su honor en el torneo de karate <br>
                   de All Valey.
            </p>

            <button class="boton-amarillo" style="margin-left: 65%; margin-top: 6%; margin-bottom: 18%; opacity:0;">Siguiente Episodio</button>


    <?php include 'templates/footer.html.php'; ?>
</body>
</html>