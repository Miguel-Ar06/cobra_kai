<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cobra Kai</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body  style="background-image: url(templates/Images/fondo.svg); background-size:auto;">
    <img class="position-absolute img-fluid" style="width: 100%; padding: 15% 0 ; z-index: 0;" src="media/bannert1.png" alt="banner" >
    <?php require 'templates/navbar.html.php'; ?>

        <!-- Div Para el apartado de temporadas -->
        <div id="espacio_vacio" style="padding-top: 2080px; position: relative; z-index: 1;"></div>
        <!-- Div Para el fondo -->
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/pareda1.png); background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center;">
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/pareda2.png); background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center;">

        <!-- Div Para el apartado de sinopsis -->
        <div class="container-fluid pt-5 pb-5">
            <p class="text-align-left text-white bahnschrift titulo fs-1" style="margin-left: 20%; margin-right: 20%; margin-top: 6%;">
                Johnny Lawrence ahora en sus 50 años lucha con un vida de <br>
                excesos y dificultades, por su lado Daniel LaRusso es ahora un <br>
                hombre exitoso. En su intento de mejorar su vida Johnny decide <br>
                 reabrir el dojo de Cobra Kai.
            </p>

            </div>

        <!-- Div Para el apartado de episodios -->
            <div class="container-fluid pt-5 pb-5" >
            <h1 class="text-center text-warning dead-stock titulo mb-5">Episodios</h1>
                <div class="row justify-content-center gx-5">
                    <a href="t1_episodio1" class="col-3 Episodio Episodio1 img-fluid m-4" style="z-index: 1;"></a>
                    <div class="col-3 Episodio Episodio2 img-fluid m-4" style="z-index: 1;"></div>
                    <div class="col-3 Episodio Episodio3 img-fluid m-4" style="z-index: 1;"></div>
                    <div class="col-3 Episodio Episodio4 img-fluid m-4" style="z-index: 1;"></div>
                    <div class="col-3 Episodio Episodio5 img-fluid m-4" style="z-index: 1;"></div>
                    <div class="col-3 Episodio Episodio6 img-fluid m-4" style="z-index: 1;"></div>
                    <div class="col-3 Episodio Episodio7 img-fluid m-4" style="z-index: 1;"></div>
                    <div class="col-3 Episodio Episodio8 img-fluid m-4" style="z-index: 1;"></div>
                    <div class="col-3 Episodio Episodio9 img-fluid m-4" style="z-index: 1;"></div>
                    <div class="col-3 Episodio Episodio10 img-fluid m-4" style="z-index: 1;"></div>
                    
                </div>
            </div>
        </div>


    <?php include 'templates/footer.html.php'; ?>
</body>
</html>