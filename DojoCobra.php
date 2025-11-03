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
    <img class="position-absolute img-fluid" style="width: 100%; padding: 15% 0 ; z-index: 0;" src="media/DojoCobra.png" alt="banner" >
    <?php require 'templates/navbar.html.php' ;?>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" style="background-image: url(media/FondoAmarillo.png); margin-top: 45%;">
        <p class="text-align-center bahnschrift text-black titulo fs-3" style="margin-right: 15%; margin-left: 15%; width: 80%; margin-top: 10%; margin-bottom: 10%; padding-left:5% ; padding-right:5%;">
            Es un dojo de karate que desde su fundación fue dirigido por John Kreese, un veterano de la Guerra de Vietnam.  Kreese le instruyó a sus estudiantes a ser despiadados con sus enemigos, haciendo que Cobra Kai tuviera un enfoque cruel y poco ético. <br>
            Aunque el dojo fue cerrado en 1985 como resultado de las malas enseñanzas de John Kreese y su fallido intento de reabrirlo con el apoyo de Silver, su antiguo alumno Johnny Lawrence lo reabrió en 2017. Sin embargo, después de una negociación secreta entre el arrendador y Kreese, Lawrence perdió su dojo.
        </p>
    </div>
    <!-- Miembros -->
    <div style="padding-top: 20%; padding-bottom: 20%;">
        <h1 class="text-center text-warning dead-stock titulo mb-5">Temporada 1</h1>
        <div class="container mt-5" style="margin-left: 12%;">
            <div class="row mt-5 mb-5">
                <div class="col-4 img img-fluid"><img src="media/Cobra1.png" alt="circulo_pajuo4"></div>
                <div class="col-4 img img-fluid"><img src="media/Cobra2.png" alt="circulo_pajuo5"></div>
                <div class="col-4 img img-fluid"><img src="media/Cobra3.png" alt="circulo_pajuo6"></div>
            </div>
        </div>
        <h1 class="text-white text-center dead-stock pt-5 pb-5">Golpea Primero Golpea Fuerte Sin Piedad</h1>
        <button class="boton-amarillo" style="margin-left:45%; padding 5%;">Unirse</button>
    </div>
    <?php require 'templates/footer.html.php' ;?>
</body>
</html>