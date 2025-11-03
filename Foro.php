<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <img class="position-absolute img-fluid" style="width: 100%;  z-index: -1';" src="media/OtroFondoAmarillo.png" alt="banner" >
    <?php require 'templates/navbar.html.php' ;?>
    <h1 class="text-center text-black dead-stock titulo mb-5 position-relative" style="z-index: 10;">Foro</h1>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" style="">
        <p class="text-white bahnschrift h4 fs-1" style="margin-right: 15%; margin-left: 15%; width: 80%; margin-top: 20%; margin-bottom: 10%; padding-left:5% ; padding-right:5%; text-align: center;">
            Descubre lo que la comunidad tiene que decir sobre tus personajes, episodios y temas favoritos. Puedes abrir un tema de debate o unirte a uno ya existente. <br><br> Recuerda ser respetuoso y no incitar al odio dentro de la comunidad.
        </p>
    </div>
    <h1 class="text-warning dead-stock titulo position-relative" style="z-index: 10; padding-left: 15%">Fans Destacados</h1>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify">
        <div class="row">
            <div class="col">
                <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" >
                    <img src="media/FotoPerfil1.png" alt="" style="">
                    <h1 class="text-warning dead-stock titulo position-relative fs-4" style="z-index: 10;">RedHawk</h1>
                    <p class="text-white bahnschrift h4 fs-5 t" style="text-align: center;">
                        Vió la saga completa en 48 horas.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" >
                    <img src="media/FotoPerfil2.png" alt="" style="">
                    <h1 class="text-warning dead-stock titulo position-relative fs-4" style=" z-index: 10;">Miguelito</h1>
                    <p class="text-white bahnschrift h4 fs-5" style="text-align: center;">
                        Ha hecho más de 100 <br> publicaciones en la <br> semana.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" >
                    <img src="media/FotoPerfil3.png" alt="" style="">
                    <h1 class="text-warning dead-stock titulo position-relative fs-4" style="z-index: 10;">ToryN</h1>
                    <p class="text-white bahnschrift h4 fs-5 t" style="text-align: center;">
                        Tiene el debate activo con <br> mayor interacción en el mes.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-warning dead-stock titulo position-relative" style="z-index: 10; padding-left:15%; margin-top: 10%">Debates Activos</h1>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" style="margin-bottom: -10%; position: relative; z-index: 1;">
        <div class="row">
            <div class="col">
                <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" >
                    <a href="debate.php"><img src="media/Peinado.png" alt="" style=""></a>
                </div>
            </div>
            <div class="col">
                <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" >
                    <img src="media/Dejara.png" alt="" style="">
                </div>
            </div>
            <div class="col">
                <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" >
                    <img src="media/Villano.png" alt="" style="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="posstion: relative; z-index: -1; margin-bottom: 10%;">
        <h1 class="text-warning dead-stock titulo position-relative " style="z-index: 10; padding-left:15%; padding-top: 15%; margin-bottom=-15%">Debates Cerrados</h1>
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify">
            <div class="row">
                <div class="col">
                    <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" >
                        <img src="media/lie.png" alt="" style="">
                    </div>
                </div>
                <div class="col">
                    <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" >
                        <img src="media/regreso.png" alt="" style="">
                    </div>
                </div>
                <div class="col">
                    <div class="container-fluid d-flex flex-column align-items-center justify-content-center text-justify" >
                        <img src="media/unira.png" alt="" style="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'templates/footer.html.php' ;?>
</body>
</html>