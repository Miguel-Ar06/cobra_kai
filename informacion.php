<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <img class="position-absolute img-fluid" style="width: 100%; padding: 15% 0 ; z-index: 0;" src="media/banner5.png" alt="banner" >
    <?php require 'templates/navbar.html.php'; ?>

        <!-- Div Para empatar -->
        <div id="espacio_vacio" style="padding-top: 2600px; position: relative; z-index: 1;"></div>
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/Lineakarate.png); height: 130px; background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center;"></div>

        <div class="container-fluid" style="background-image: url(media/Info1.png); width: 60%; height:100%; background-size: cover;">
                        <p class="text-align-left text-white bahnschrift titulo fs-1" style="margin-left: 105%; width: 55%;">
                <br>
                <br>
                Treinta y cuatro años después de los eventos del torneo de karate All Valley de 1984, Johnny Lawrence busca la redención al abrir un dojo Cobra Kai, reavivando su rivalidad con un exitoso Daniel LaRusso. 
                <br>
                <br>
                Cobra Kai es una serie web de comedia dramática estadounidense perteneciente a la saga de Karate Kid.<br>

            </p>
        </div>

        <div class="container-fluid" style="background-image: url(media/Barracum.png); width: 100%; height:60%; background-size: cover; margin-top: 10%;">
            <p class="text-align-left bahnschrift titulo fs-1" style="padding: 7%; margin-left: 5%; margin-right: 5%;">
                Está protagonizada por Ralph Macchio y William Zabka, quienes repiten sus papeles como Daniel LaRusso y Johnny Lawrence, respectivamente, de la película de 1984 The Karate Kid y sus secuelas, The Karate Kid Part II (1986) y The Karate Kid Part III (1989).
            </p>
        </div>

        <!-- Div Para el fondo -->
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/pareda1.png); background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center; margin-top: -10%; position: relative; z-index: -1;">
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/pareda2.png); background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center;">

        <!-- Div Para el apartado de sinopsis -->
        <div id="espacio_vacio" style="padding-top: 20%; position: relative; z-index: 1;"></div>

    <?php include 'templates/footer.html.php'; ?>
</body>
</html>