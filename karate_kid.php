<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karate Kid</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body style="background-image: url(templates/Images/fondo.svg); background-size:auto;">
    <img src="media/karate_kidBackground.png" alt="banner" class="position-absolute img-fluid" style="width: 100%; padding-top: 15% ; z-index: -1;" >
    <?php require 'templates/navbar.html.php'; ?>
    <!-- Karate Kid -->
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="z-index: 1; margin-top: 36%; background-image:url('media/FondoRojo.png'); z-index: 10; padding-top:10%; padding-bottom:5%; possition: absolute;">
        <h1 class="text-center text-warning dead-stock titulo mb-5" styles="z-index: 10;">Karate Kid</h1>
    </div>
    <!-- Div Karate Kid 1984 -->
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" style="background-image: url(media/fondo1984.svg); height: 2000; z-index: -1;">
        <p class="text-white bahnscrift fs-1 text-justify " style="padding: 10%;">Karate Kid es una saga de películas de acción dramática de origen estadounidense, la cual se centra en adolescentes artes marciales a través de un mentor, cuya enseñanza es que el karate va más allá de la violencia y que el entrenamiento en artes marciales ayuda a desarrollar el espíritu y el cuerpo.</p>
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" style="background-image: url(media/img1984.png); padding-top: 10%; padding-bottom:10%;" >
            <h1 class="text-center text-white dead-stock titulo mb-5">
                The Karate Kid 1984
            </h1>
        </div>
    </div >
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" style="background-image: url(media/FondoMuchachito.png);">
        <div>
            <p>Es la primera película de la franquicia que sigue la historia de Daniel LaRusso interpretado por Ralph Macchio un adolescente que se muda con su viuda al barrio de Reseda de Los Ángeles. Allí, LaRusso se enfrenta al acoso de matones, uno de los cuales es Johnny Lawrence quien es interpretado por William Zabka.</p>
        </div>
    </div>
    
</body>
</html>