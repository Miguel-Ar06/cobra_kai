<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php require 'templates/navbar.html.php' ;?>

    <div class="container mt-5">
        <div class="row">
            <div class="col img img-fluid"><img src="media/sueter.png"></div>
            <div class="col">         
                <div class="container">
                    <div class="row">
                        <div class="col text-center  pe-5  img img-fluid text-white dead-stock pb-5 pt-5 h1" style="background-image: url('media/trazo-rojo-enano.png'); background-size: cover;">Cobra Kai capucha Roja</div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-1 img img-fluid"><img src="media/estrella.png" alt="estrellita donde estas"></div>
                        <div class="col-1 img img-fluid"><img src="media/estrella.png" alt="estrellita donde estas"></div>
                        <div class="col-1 img img-fluid"><img src="media/estrella.png" alt="estrellita donde estas"></div>
                        <div class="col-1 img img-fluid"><img src="media/estrella.png" alt="estrellita donde estas"></div>
                        <div class="col-1 img img-fluid"><img src="media/estrella.png" alt="estrellita donde estas"></div>
                        <div class="col text-white bahnschrift h3">4 Reseñas</div>
                    </div>
                    <div class="row justify-content-left mt-5"><div class="col text-white bahnschrift h2"> $44.99</div></div>
                    <div class="row justify-content-left mt-4"><div class="col text-white bahnschrift h2">Selecciona una talla</div></div>
                    <div class="row justify-content-left mt-4 mb-5">
                        <div class="col">
                            <button class="boton-amarillo" style="padding: 0% 50%;">S</button>
                        </div>
                        <div class="col">
                            <button class="boton-amarillo" style="padding: 0% 50%;">M</button>
                        </div>
                        <div class="col">
                            <button class="boton-amarillo" style="padding: 0% 50%;">L</button>
                        </div>
                    </div>
                    <div class="row mt-5 justify-content-left gx-0">
                        <div class="col-4">
                            <p class="h2 text-white bahnschrift me-0 pe-0">Cantidad</p>
                        </div>
                        <div class="col img img-fluid ms-0">
                            <img src="media/selector.png" alt="selector">
                        </div>
                    </div>
                    <div class="row text-center justify-content-center mt-5"><div class="col"><button class="boton-amarillo">Comprar Ahora</button></div></div>
                </div>
            </div>
    </div>

    <div id="espacio_vacio" style="padding-top: 300px; position: relative; z-index: 1;"></div>
    <?php require '../cobra_kai/templates/footer.html.php'; ?>
</body>