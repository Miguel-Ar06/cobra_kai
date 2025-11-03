<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merch</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <img class="position-absolute img-fluid" style="width: 100%; padding: 15% 0 ; z-index: 0;" src="media/sueter_y_vainas.png" alt="banner" >
    <?php require 'templates/navbar.html.php' ;?>
    <div id="espacio_vacio" style="padding-top: 900px; position: relative; z-index: 1;"></div>

    <p class="text-center text-warning dead-stock titulo mb-5" style="font-size: 8rem;">Tienda</p>
    <h2 class="text-center text-white dead-stock titulo mt-5 mb-5">Productos disponibles</h2>

    <div class="container mt-5">
        <div class="row">
            <div class="col-4 img img-fluid"><img src="media/circulo1.png" alt="circulo_pajuo1"></div>
            <div class="col-4 img img-fluid"><a href="producto.php"><img src="media/circulo2.png" alt="circulo_pajuo2"></a></div>
            <div class="col-4 img img-fluid"><img src="media/circulo3.png" alt="circulo_pajuo3"></div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-4 img img-fluid"><img src="media/ciruclo4.png" alt="circulo_pajuo4"></div>
            <div class="col-4 img img-fluid"><img src="media/circulo5.png" alt="circulo_pajuo5"></div>
            <div class="col-4 img img-fluid"><img src="media/circulo6.png" alt="circulo_pajuo6"></div>
        </div>
    </div>
    
    <div id="espacio_vacio" style="padding-top: 200px; position: relative; z-index: 1;"></div>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center mt-5" style="background-image: url(media/Lineakarate.png); height: 130px; background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center;"></div>

    <div id="espacio_vacio" style="padding-top: 300px; position: relative; z-index: 1;"></div>
    <?php require '../cobra_kai/templates/footer.html.php'; ?>
</body>
