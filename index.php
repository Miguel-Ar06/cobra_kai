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
    <img class="position-absolute img-fluid" style="width: 100%; padding: 15% 0 ; z-index: 0;" src="media/banner1.png" alt="banner" >
    <?php require 'templates/navbar.html.php'; ?>
    <!-- Div General (Para las imagenes) -->
    <div class="container-fluid mt-4 p-0 m-0">
        <img style="z-index: -1;" src="templates/Images/letras.svg" alt="" class="float-start position-absolute">
        <img style="z-index: -1;" src="templates/Images/letras2.svg" class="float-end position-absolute" alt="" class="float-end">
        <!-- Div Para el apartado de elige un Dojo -->
        <div id="espacio_vacio" style="padding-top: 900px; position: relative; z-index: 1;"></div>
        <div class="container pt-5 pb-5" >
            <h1 class="text-center text-warning dead-stock titulo mb-5">Elige un Dojo</h1>
            <div class="row justify-content-center gx-5">
                <div class="col-2 Dojo Dojo1 img-fluid m-4" style="z-index: 1;"></div>
                <div class="col-2 Dojo Dojo2 img-fluid m-4" style="z-index: 1;"></div>
                <div class="col-2 Dojo Dojo3 img-fluid m-4" style="z-index: 1;"></div>
            </div>
        </div>
    </div>
    <!-- Div Primera Temporada -->
    <div id="espacio_vacio" style="padding-top: 300px; position: relative; z-index: 1;"></div>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/johnny_amarillo.png); height: 700px; background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center;">
        <div class="row"><div class="col-12 text-center"><p class="text-white text-center dead-stock fs-1">Mira la Primera Temporada</p></div></div>
        <div class="row"><div class="col position-relative"><button class="boton-amarillo">Ver ahora</button></div></div>
    </div>
    <!-- Div Merch -->
     <div>
        <h1>Descuentos en tus Productos <br> Favoritos Solo por Tiempo Limitado</h1>
     </div>
    <!-- Frase -->
    <div>
        <h1>Cuando la pelea llega a ti debes <br> estar listo para contraatacar</h1>
    </div>
    <?php include 'templates/footer.html.php'; ?>
</body>
</html>