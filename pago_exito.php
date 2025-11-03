<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago exitoso</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php require 'templates/navbar.html.php'; ?>
    <?php require 'templates/culebra.html.php'; ?>

        <!-- Div Para el fondo -->
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/pareda1.png); background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center; margin-top: -2%;">
            <h1 class="text-center text-warning dead-stock titulo mb-5" style="margin-top: 40%;">
                Pago Realixado <br>
                Con Exito
            </h1>
        </div>
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/pareda2.png); background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center;">
            <h1 class="text-center text-white debahnschrift titulo mb-5 fs-2" style="margin-top: -2%;">
                ¡Gracias por su compra! <br>
                 A su correo llegará una notificación <br>
                  cuando el producto este listo para <br>
                  ser recogido.
            </h1>
            <a href="merch.php" class="boton-amarillo"></a>

            <h1 class="text-center text-white debahnschrift titulo mb-5 fs-3" style="margin-top: 40%; opacity: 0;">
                ¡Gracias por su compra! <br>
                 A su correo llegará una notificación <br>
                  cuando el producto este listo para <br>
                  ser recogido.
            </h1>
    <?php include 'templates/footer.html.php'; ?>
    </div>
</body>
</html>