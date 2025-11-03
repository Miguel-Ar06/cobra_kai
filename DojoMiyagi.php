<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cobra Kai</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <img class="position-absolute img-fluid" style="width: 100%; padding: 15% 0 ; z-index: 0;" src="media/DojoMiyagi.png" alt="banner" >
    <?php require 'templates/navbar.html.php' ;?>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" style="background-image: url(media/FondoAmarillo.png); margin-top: 45%;">
        <p class="text-align-center bahnschrift text-black titulo fs-3" style="margin-right: 15%; margin-left: 15%; width: 80%; margin-top: 10%; margin-bottom: 10%; padding-left:5% ; padding-right:5%;">
            Es un dojo fundado por Daniel LaRusso, para seguir con las enseñanzas de su mentor el Sr. Miyagi, el cual es un difunto en estos momentos. Este dojo predica un estilo de artes marciales pacífico, contrario a la hostilidad que predica el dojo Cobra Kai el cual, Daniel quiere que sus estudiantes no vean el karate como un medio para herir a otros sino una manera de canalizar la energía y purificar el alma tal y como se lo enseñor su maestro.
        </p>
    </div>
    <!-- Miembros -->
    <div style="padding-top: 20%; padding-bottom: 20%;">
        <h1 class="text-center text-warning dead-stock titulo mb-5">Temporada 1</h1>
        <div class="container mt-5" style="margin-left: 12%;">
            <div class="row mt-5 mb-5">
                <div class="col-4 img img-fluid"><img src="media/miyagi1.png" alt="circulo_pajuo4"></div>
                <div class="col-4 img img-fluid"><img src="media/Cobra3.png" alt="circulo_pajuo5"></div>
                <div class="col-4 img img-fluid"><img src="media/miyagi2.png" alt="circulo_pajuo6"></div>
            </div>
        </div>
        <h1 class="text-white text-center dead-stock pt-5 pb-5">Cuando la pelea llega a ti debes estar listo para contraatacar</h1>
        <button class="boton-amarillo" style="margin-left:45%; padding 5%;">Unirse</button>
    </div>
    <?php require 'templates/footer.html.php' ;?>
</body>
</html>