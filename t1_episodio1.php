<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporada 1 - Episodio 1</title>
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
                    <div class="col-3 EpisodioPlay Play1 img-fluid m-1" style="z-index: 1;"></div>
                </div>
            </div>

        <h1 class="text-center text-white dead-stock titulo mb-5">Temporada 1 Episodio 1</h1>

        <!-- Div Para sinopsis -->
        <div class="container-fluid pt-5 pb-5">
            <p class="text-align-left text-white bahnschrift titulo fs-1" style="margin-left: 19%; margin-right: 19%;">
                Han pasado 34 años y un alcohólico y acabado Johnny Lawrence se <br>
                esfuerza por ganarse la vida como un hombre de mantenimiento, <br>
                mientras que Daniel dirige una exitosa cadena de concesionarios <br>
                 de autos. Tras recatar a su vecino de un grupo de matones este <br>
                 convence a Johnny de reabrir el dojo de Cobra Kai lo que da inicio <br>
                  a todo.
            </p>

            <button class="boton-amarillo" style="margin-left: 65%; margin-top: 6%; margin-bottom: 18%;">Siguiente Episodio</button>


    <?php include 'templates/footer.html.php'; ?>
</body>
</html>