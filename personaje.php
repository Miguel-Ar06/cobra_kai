<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personaje</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php require 'templates/navbar.html.php'; ?>

        <img style="z-index: -1; left: 0; padding-top: 1%;" src="templates/Images/letras.svg" alt="" class="float-start position-absolute">
        <img style="z-index: -1; right: 0; padding-top: 20%; padding-right: 0%;" src="templates/Images/letras2.svg" class="float-end position-absolute" alt="" class="float-end">


        <!-- Div Para el personaje -->
        <h1 class="text-center text-white dead-stock titulo mb-5" style="margin-top: 10%;">Personajes</h1>
        <img src="media/p1.png" alt="" class="img-fluid mx-auto d-block personaje1">
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/brochazo.png); height: 20%; background-size: cover; background-repeat: no-repeat; width: 80vw; background-position: center; margin-left: 11%; margin-top: 4%;"></div>

        <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
            <div class="col" style=" margin-top: 10%; margin-bottom: 15%;">
                <div class="row" style="background-image: url(media/arriba.png); background-size: cover; background-repeat: no-repeat; margin-top: 4%;">
                        <p class="text-align-center bahnschrift titulo fs-1" style="margin-left: 10%; margin-top: 2%; width: 80%;">
                            Interpretado por Ralp Macchio es el protagonista principal de la saga de películas de Karate Kid y de la serie Cobra Kai. En su joventud fue un chico debilucho víctima de agresores en la escuela, hasta que conoció al Sr. Miyagi quien tras compadecerse de él lo entrenó para entretarse a sus rivales en el torneo de karate de All Valey. <br><br>
                            Ahora en su adultez es dueño de un exitoso concesionario de autos que lleva por nombre su primer apellido, también es dueño del dojo Miyagi-Do y dirige el Eagle Fang Karate junto con su ex rival Johnny Lawrence. <br><br>
                            Está casado con Amanda y juntos son padres de Samantha y Anthony.
                            <br><br><br><br><br>
                        </p>
                </div>
                <div class="row" style="background-image: url(media/condenado.png); background-size: cover; background-repeat: no-repeat; height: 1000px; width: auto; background-position: center; margin-top: -10%; position: relative; z-index: -1;">

                </div>
                <div class="row" style="background-image: url(media/abajo.png); background-size: cover; background-repeat: no-repeat; margin-top: -10%;">
                        <p class="text-align-center bahnschrift titulo fs-1" style="margin-left: 10%; margin-top: 10%; width: 80%;">
                            Su relación más complicada ha sido con Johnny Lawrence con quien ha mantenido una fuerte rivalidad que ha perdurado por años. En la adolescencia el conflicto rondaba en relación a que a ambos les gustaba la misma chica y tras enfrentarse en el torneo y resultar ganador Daniel no supo de Johnny por años. <br><br>
                            Hasta que descubrió que Johnny reabrió el dojo de Cobra Kai lo cual hizo que los conflictos pasados se reavivaran. Y después de muchas tretas lograron hacer las paces e unirse por un bien común.
                            <br><br><br><br><br>
                        </p>
                </div>
            </div>
        </div>

    <?php include 'templates/footer.html.php'; ?>
</body>
</html>