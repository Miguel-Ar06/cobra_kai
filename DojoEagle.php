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
    <img class="position-absolute img-fluid" style="width: 100%; padding: 15% 0 ; z-index: 0;" src="media/DojoEagle.png" alt="banner" >
    <?php require 'templates/navbar.html.php' ;?>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" style="background-image: url(media/FondoAmarillo.png); margin-top: 45%;">
        <p class="text-align-center bahnschrift text-black titulo fs-3" style="margin-right: 15%; margin-left: 15%; width: 80%; margin-top: 10%; margin-bottom: 10%; padding-left:5% ; padding-right:5%; padding-top:10%; padding-bottom:10%;">
            Dojo fundado por Johnny Lawrence tras perder Cobra Kai ante John Kreese . Eagle Fang Karate se fusionó con Miyagi-Do Karate para entrenar para el 51.º Campeonato Anual de Karate y el Sekai Taikai. Cuando Miyagi-Do abandonó el Sekai Taikai tras la lesión de Robby en su pelea de semifinales contra Axel, el dojo combinado se disolvió y Johnny retomó Cobra Kai en lugar de continuar con Eagle Fang.
        </p>
    </div>
    <!-- Miembros -->
    <div style="padding-top: 20%; padding-bottom: 20%;">
        <h1 class="text-center text-warning dead-stock titulo mb-5">Temporada 1</h1>
        <div class="container mt-5" style="margin-left: 12%;">
            <div class="row mt-5 mb-5">
                <div class="col-4 img img-fluid"><img src="media/Cobra2.png" alt="circulo_pajuo4"></div>
                <div class="col-4 img img-fluid"><img src="media/miyagi1.png" alt="circulo_pajuo5"></div>
                <div class="col-4 img img-fluid"><img src="media/Eagle.png" alt="circulo_pajuo6"></div>
            </div>
        </div>
        <h1 class="text-white text-center dead-stock pt-5 pb-5">Unidos somos mas fuertes</h1>
        <button class="boton-amarillo" style="margin-left:45%; padding 5%;">Unirse</button>
    </div>
    <?php require 'templates/footer.html.php' ;?>
</body>
</html>