<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cobra Kai</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <?php require 'templates/letras.php'?>
    <p class="h5 ms-5 banschrift text-white" style="position: absolute ;z-index: 20; padding-top:55%">Treinta y cuatro años después de los eventos del torneo de karate All Valley de <br> 1984, Johnny Lawrence busca la redención al abrir un dojo Cobra Kai, reavivando <br> su rivalidad con un exitoso Daniel LaRusso.</p>
    <a href="informacion.php"><button class="boton-amarillo" style="position: absolute ;z-index: 15; margin-top:55%; margin-left: 80%">Saber Mas</button></a>
    <div class="image-fader">
        <img class="position-absolute img-fluid" style="width: 100%; padding: 15% 0 ; z-index: 0;" src="media/banner1.png" alt="banner" >
        <img class="position-absolute img-fluid" style="width: 100%; padding: 15% 0 ; z-index: 0;" src="media/banner2.png" alt="banner" >
        <img class="position-absolute img-fluid" style="width: 100%; padding: 15% 0 ; z-index: 0;" src="media/banner3.png" alt="banner" >
    </div>
    <div class="container-fluid" stylre="position-absolute; top: 0;"><?php require 'templates/navbar.html.php'; ?></div>
    <!-- Div General (Para las imagenes) -->
    <div class="container-fluid mt-4 p-0 m-0">
        <!-- Div Para el apartado de elige un Dojo -->
        <div id="espacio_vacio" style="padding-top: 900px; position: relative; z-index: 1;"></div>
        <div class="container pt-5 pb-5" >
            <h1 class="text-center text-warning dead-stock titulo mb-5">Elige un Dojo</h1>
            <div class="row justify-content-center gx-5">
                <a class="col-2 Dojo Dojo1 img-fluid m-4" href="DojoMiyagi.php" style="z-index: 1;"></a>
                <a class="col-2 Dojo Dojo2 img-fluid m-4" href="DojoEagle.php" style="z-index: 1;"></a>
                <a class="col-2 Dojo Dojo3 img-fluid m-4" href="DojoCobra.php" style="z-index: 1;"></a>
            </div>
        </div>
    </div>
    <!-- Div Primera Temporada -->
    <div id="espacio_vacio" style="padding-top: 300px; position: relative; z-index: 1;"></div>
    <div class="container-fluid d-flex flex-column align-items-center justify-content-center" style="background-image: url(media/johnny_amarillo.png); height: 700px; background-size: cover; background-repeat: no-repeat; width: 100vw; background-position: center;">
        <div class="row"><div class="col-12 text-center"><p class="text-white text-center dead-stock fs-1">Mira la Primera Temporada</p></div></div>
        <div class="row"><div class="col position-relative"><button class="boton-amarillo">Ver ahora</button></div></div>
    </div>
    <!-- Div Merch -->
     <div class="d-flex container-fluid text-center align-items-center justify-content-center" style="background-image: url('media/producto-index.png'); background-size: cover; background-position: center; min-height: 984px">
        <div class="text-white dead-stock " style="position: absolute; z-index: 0; padding: 40% 95% 0 0% ; background-image: url('media/fondo_rojo_index.png'); background-size: cover;"></div>
        <p class="h1 text-white dead-stock position-absolute" style="z-index: 1;">Descuentos en tus Productos <br> Favoritos Solo por Tiempo Limitado</p>
        <button style="position: relative; z-index: 1; margin-top: 15%;" class="boton-amarillo">Comprar Ahora</button>
     </div>
    <!-- Frase -->
    <div id="espacio_vacio" style="padding-top: 300px; position: relative; z-index: 1;"></div>
    <h1 class="text-white text-center dead-stock pt-5 pb-5">Cuando la pelea llega a ti <br> debes estar listo para contratacar</h1>
    <div id="espacio_vacio" style="padding-top: 300px; position: relative; z-index: 1;"></div>
    <!--  
    <div class="container-fluid px-0">   
      <div class="row g-0 align-items-center justify-content-center">
        <div class="col-3 d-flex justify-content-center align-items-center px-0">
          <img src="media/Line 2.png" alt="linea_pajua" class="w-100" style="max-width:240px; display:block;">
        </div>

         <div class="col-6 d-flex justify-content-center">
          <p class="text-warning dead-stock my-0" style="font-size:5rem; line-height:1;">Cobra Kai</p>
        </div>

        <div class="col-3 d-flex justify-content-center align-items-center px-0">
          <img src="media/Line 2.png" alt="linea_pajua" class="w-100" style="max-width:240px; display:block;">
        </div>
      </div>
    </div> 
    -->
    <div id="espacio_vacio" style="padding-top: 300px; position: relative; z-index: 1;"></div>
    
    <?php include 'templates/footer.html.php'; ?>
</body>
</html>