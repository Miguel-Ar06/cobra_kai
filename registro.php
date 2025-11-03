<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php require 'templates/navbar.html.php' ;?>
    <div id="espacio_vacio" style="padding-top: 200px; position: relative; z-index: 1;"></div>


    <p class="text-center text-warning dead-stock titulo mb-5" style="font-size: 8rem;">Se parte <br> de nuestro dojo</p>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center mt-5" style="background-image: url(media/lineakarate2.png); height: 130px; background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center;"></div>
     
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6"> 

                <div class="row mb-5"> 
                    <div class="col">
                        <p class="h1 text-black dead-stock text-center" style="background-image: url('media/trazogris.png'); background-size: 100% 100%; background-repeat: no-repeat; background-position: center; padding: 20px 15px; margin: 0; text-align: center;">Nombre</p>
                    </div>
                </div>

                <div class="row mb-5"> 
                    <div class="col">
                        <p class="h1 text-black dead-stock text-center" style="background-image: url('media/trazogris.png'); background-size: 100% 100%; background-repeat: no-repeat; background-position: center; padding: 20px 15px; margin: 0; text-align: center;">Correo</p>
                    </div>
                </div>

                <div class="row mb-5"> 
                    <div class="col">
                        <p class="h1 text-black dead-stock text-center" style="background-image: url('media/trazogris.png'); background-size: 100% 100%; background-repeat: no-repeat; background-position: center; padding: 20px 15px; margin: 0; text-align: center;">Clave</p>
                    </div>
                </div>


                <div class="row mb-5"> 
                    <div class="col text-center">
                        <button class="boton-amarillo text-center" style="padding-right: 15%; padding-left: 15%">Unirse</button>
                    </div>
                </div>

                <div class="row mb-5"> 
                    <div class="col">
                        <p class="h3 text-white dead-stock text-center" >Si ya tienes una cuenta inicia sesion</p>
                    </div>
                </div>

                <div class="row mb-5"> 
                    <div class="col text-center">
                        <a href="login.php"><button class="boton-amarillo text-center">Inicia sesion</button></a>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <div id="espacio_vacio" style="padding-top: 300px; position: relative; z-index: 1;"></div>
    <?php require '../cobra_kai/templates/footer.html.php'; ?>
</body>