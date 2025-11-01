<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cobra Kai</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body background="templates/Images/fondo.svg">
    <?php include 'templates/navbar.html.php'; ?>
    <!-- Div General (Para las imagenes) -->
    <div class="container-fluid mt-4 p-0 m-0">
        <img src="templates/Images/letras.svg" alt="" class="float-start">
        <img src="templates/Images/letras2.svg" class="float-end" alt="" class="float-end">
        <!-- Div Para el apartado de elige un Dojo -->
        <div class="container pt-5 pb-5">
            <h1 class="text-center text-white">Elige un Dojo</h1>
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 mb-3 d-flex justify-content-center">
                    <img src="templates/Images/dojo3.png" alt="Logo Cobra Kai" class="Dojo img-fluid p-2" style="max-width: 300px;">
                    <img src="templates/Images/dojo2.png" alt="Logo Eagle Fang Karate" class="Dojo img-fluid p-2" style="max-width: 300px;">
                    <img src="templates/Images/dojo1.png" alt="Logo Miyagi-Do Karate" class="Dojo img-fluid p-2" style="max-width: 300px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Div Primera Temporada -->
    <div>
        <h1>Mira la Primera Temporada</h1>
        <button>Ver Ahora</button>
    </div>
    <!-- Div Merch -->
     <div>
        <h1>Descuentos en tus Productos <br> Favoritos Solo por Tiempo Limitado</h1>
     </div>
    <!-- Frase -->
    <div>
        <h1>Cuando la pelea llega a ti debes <br> estar listo para contraatacar</h1>
    </div>
    <?php include 'templates/footer.html.php'; ?>
</body>
</html>