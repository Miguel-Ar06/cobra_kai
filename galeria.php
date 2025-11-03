<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php require 'templates/navbar.html.php'; ?>

        <img style="z-index: -1; left: 0; padding-top: -10%;" src="templates/Images/letras.svg" alt="" class="float-start position-absolute">
        <img style="z-index: -1; right: 0; padding-top: 20%; padding-right: 0%;" src="templates/Images/letras2.svg" class="float-end position-absolute" alt="" class="float-end">


        <!-- Div Para el personaje -->
        <h1 class="text-center text-white dead-stock titulo mb-5" style="margin-top: 10%;">Galeria</h1>

        <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
            <div class="col" style="margin-top: 4%;">
                <div class="row">
                    <div class="col">
                        <img src="media/gal1.png" alt="">
                    </div>
                    <div class="col">
                        <img src="media/gal2.png" alt="">
                    </div>
                </div>
                <div class="row" style="margin-top: 3%;">
                    <div class="col">
                        <img src="media/gal3.png" alt="">
                    </div>
                    <div class="col">
                        <img src="media/gal4.png" alt="">
                    </div>
                </div>
                <div class="row" style="margin-top: 3%;">
                    <img src="media/gal5.png" alt="">
                </div>
                <div class="row" style="margin-top: 3%;">
                    <img src="media/gal6.png" alt="">
                </div>
                <div class="row" style="margin-top: 3%;">
                    <div class="col">
                        <img src="media/gal7.png" alt="">
                    </div>
                    <div class="col">
                        <img src="media/gal8.png" alt="">
                    </div>
                </div>
                </div>
                <div class="row" style="margin-top: 3%;">
                    <div class="col">
                        <img src="media/gal9.png" alt="">
                    </div>
                    <div class="col">
                        <img src="media/gal10.png" alt="">
                    </div>
                </div>
                <div class="row" style="margin-top: 3%;">
                    <img src="media/gal11.png" alt="">
                </div>
                <div class="row" style="margin-top: 3%;">
                    <img src="media/gal12.png" alt="">
                </div>
                <div class="row" style="margin-top: 3%; margin-bottom: 15%;">
                    <img src="media/gal13.png" alt="">
                </div>
            </div>
        </div>

    <?php include 'templates/footer.html.php'; ?>
</body>
</html>