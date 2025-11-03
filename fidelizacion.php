<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fidelizacion</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php require 'templates/navbar.html.php'; ?>

        <!-- Div Para el limite -->
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/autistasa.png); height: 130px; background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center; margin-top: 10%;">
    </div>

    <div class="col" style=" margin-top: 10%; margin-bottom: 15%;">
        <div class="row" style="background-image: url(media/fidelcastro.png); background-size: cover; background-repeat: no-repeat; margin-top: 4%; height: 100%; width: 100%; background-position: center;">
                <p class="text-align-center text-white bahnschrift titulo fs-1" style="margin-left: 10%; margin-top: 10%; margin-bottom: 16%; width: 80%;">
                    Los puntos miden el nivel de experiencia del usuario y al acumularse permiten subir de rango. Los puntos se representan con el ícono de puño.
                </p>
        </div>
        <div class="row" style="background-image: url(media/rangos.png); background-size: cover; background-repeat: no-repeat; height: 1000px; width: auto; background-position: center; margin-top: -8%; position: relative; z-index: -1;">
                <p class="text-align-center bahnschrift titulo fs-1" style="margin-left: 10%; margin-top: 18%; margin-bottom: 16%; width: 80%;">
                    Los rangos se clasifican en cinturones de colores que indican el nivel de experiencia del usuario, se ven reflejados que el ícono de perfil del usuario.
                </p>
        </div>
        <div class="row" style="background-image: url(media/cosoblanco.png); background-size: cover; background-repeat: no-repeat; height: 1000px; width: auto; background-position: center; margin-top: -8%; position: relative; z-index: -2;">
                <p class="text-align-center bahnschrift titulo fs-1" style="margin-left: 10%; margin-top: 30%; margin-bottom: 16%; width: 80%;" style="text-color: red;">
                    Los puntos se obtienen mediante participación en la página, con cosas como publicar, dar me gusta, ver episodios y películas. Así como crear o unirse a foros. <br> <br>
                    Los puntos se acumulan y llenan una barra de experiencia que al llenarse suben el rango del usuario.
                </p>
        </div>
        <div class="row" style="background-image: url(media/vector.png); background-size: cover; background-repeat: no-repeat; height: 1000px; width: auto; background-position: center; margin-top: -8%; position: relative; z-index: -3;">
            <h1 class="text-center text-warning dead-stock titulo" style="margin-top: 13%;">
                Beneficios
            </h1>
            <p class="text-align-center text-white bahnschrift titulo fs-1" style="margin-left: 10%; margin-bottom: 16%; width: 80%;" style="text-color: red;">
                Al subir de rango se desbloquean ciertos beneficios como descuentos en la compra de productos, ver el contenido de streaming antes que nadie y al llegar al rango negro recibe el título de sensei, pudiendo crear su propia comunidad que sirve como dojo para sus discípulos (seguidores).
            </p>
        </div>
    </div>

        <!-- Div Para el limite -->
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/autistasa.png); height: 130px; background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center; margin-bottom: 14%;">
    </div>

    <?php include 'templates/footer.html.php'; ?>
</body>
</html>