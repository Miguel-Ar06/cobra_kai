<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="stylesheet" href="styles/bootstrap5.css">
    <link rel="stylesheet" href="styles/styles.css">
    <!-- <style>
        section {
            /* The width of your document, I suppose */
            width:600px;
            margin: 0 auto;
            white-space:nowrap; 
            overflow: scroll;
        }
        .pic-container {
            /* As large as it needs to be */
            width: 1500px;
        }​
    </style> -->
</head>
<body>
    <?php require 'templates/navbar.html.php' ;?>

    <div class="container mt-5">
        <div class="row">
            <div class="col img img-fluid">
                <img id="suetergrande" src="media/sueter.png">
            </div>
            <div class="col">         
                <div class="container">
                    <div class="row">
                        <div class="col text-center  pe-5  img img-fluid text-white dead-stock pb-5 pt-5 h1" style="background-image: url('media/trazo-rojo-enano.png'); background-size: cover;">Cobra Kai capucha Roja</div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-1 img img-fluid"><img src="media/estrella.png" alt="estrellita donde estas"></div>
                        <div class="col-1 img img-fluid"><img src="media/estrella.png" alt="estrellita donde estas"></div>
                        <div class="col-1 img img-fluid"><img src="media/estrella.png" alt="estrellita donde estas"></div>
                        <div class="col-1 img img-fluid"><img src="media/estrella.png" alt="estrellita donde estas"></div>
                        <div class="col-1 img img-fluid"><img src="media/estrella.png" alt="estrellita donde estas"></div>
                        <div class="col text-white bahnschrift h3">4 Reseñas</div>
                    </div>
                    <div class="row justify-content-left mt-5"><div class="col text-white bahnschrift h2"> $44.99</div></div>
                    <div class="row justify-content-left mt-4"><div class="col text-white bahnschrift h2">Selecciona una talla</div></div>
                    <div class="row justify-content-left mt-4 mb-5">
                        <div class="col">
                            <button class="boton-amarillo" style="padding: 0% 50%;">S</button>
                        </div>
                        <div class="col">
                            <button class="boton-amarillo" style="padding: 0% 50%;">M</button>
                        </div>
                        <div class="col">
                            <button class="boton-amarillo" style="padding: 0% 50%;">L</button>
                        </div>
                    </div>
                    <div class="row mt-5 justify-content-left gx-0">
                        <div class="col-4">
                            <p class="h2 text-white bahnschrift me-0 pe-0">Cantidad</p>
                        </div>
                        <div class="col img img-fluid ms-0">
                            <img src="media/selector.png" alt="selector">
                        </div>
                    </div>
                    <div class="row text-center justify-content-center mt-5"><div class="col"><button class="boton-amarillo">Comprar Ahora</button></div></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-left mt-5 gx-0">
            <div class="col-2 img img-fluid" id="sueter1"><img src="media/sueter1.png" alt="sueter"></div>
            <div class="col-2 img img-fluid" id="sueter2"><img src="media/sueter2.png" alt="sueter02"></div>
            <div class="col-2 img img-fluid" id="sueter3"><img src="media/sueter3.png" alt="sueter03"></div>
        </div>
    </div>

    <div class="container mt-5 pt-5">
        <div class="row justify-content-left">
            <div class="col">
                <p class="text-white dead-stock" style="font-size: 5rem;">Descripcion</p>
            </div>
        </div>
        <div class="row justify-content-left">
            <div class="col-6">
                <p class="text-white bahnschrift h4">Manténgase abrigado antes y después de la práctica con esta sudadera con capucha roja de Cobra Kai, que presenta el logotipo de serpiente de Cobra Kai en el frente.</p>
                <ul class="text-white bahnschrfit h4 mt-5 mb-5">
                    <li> 100% algodón </li>
                    <li>Capucha forrada de jersey </li>
                    <li>Cordón plano a juego </li>
                    <li>Puños y cinturilla acanalados con 5 % elastano. </li>
                    <li>Bolsillo tipo cangurera </li>
                    <li>Disponible en tallas desde pequeña hasta extra grande.</li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container mt-5 pb-5 justify-content-center text-center">
        <div class="row justify-content-center">
            <div class="col-5 text-center pt-2 pb-2 img img-fluid text-white dead-stock h1" style="background-image: url('media/otro-trazo-rojo.png'); background-size: cover;">Productos Relacionados</div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col img img-fluid">
                <img src="media/relacionado1.png" alt="relacionado1">
            </div>
            <div class="col img img-fluid">
                <img src="media/relacionado2.png" alt="relacionado2">
            </div>
            <div class="col img img-fluid">
                <img src="media/relacionado3.png" alt="relacionado3">
            </div>
            <div class="col img img-fluid">
                <img src="media/relacionado4.png" alt="relacionado4">
            </div>
            <div class="col img img-fluid">
                <img src="media/relacionado5.png" alt="relacionado5">
            </div>
        </div>
    </div>
    <!-- <section id="imagenes-scrolleables">
        <div class="pic-container">
            <div class="pic-row">
            <img src="1.jpg">
            <img src="2.jpg">
            <img src="3.jpg">
            <img src="4.jpg">
            <img src="5.jpg">
            <img src="6.jpg">
            </div>
        </div>
    </section> -->

    <div id="espacio_vacio" style="padding-top: 300px; position: relative; z-index: 1;"></div>
    <?php require '../cobra_kai/templates/footer.html.php'; ?>

    <script>
        const sueterGrande = document.getElementById('suetergrande');
        const sueter1 = document.getElementById('sueter1');
        const sueter2 = document.getElementById('sueter2');
        const sueter3 = document.getElementById('sueter3');

        function setSueterSrc(path) {
        if (!sueterGrande) return;
        sueterGrande.src = path;
        }

        if (sueter1) { 
            sueter1.style.cursor = 'pointer'; 
            sueter1.addEventListener('click', () => setSueterSrc('media/sueter.png')); 
        }
        
        if (sueter2) { 
            sueter2.style.cursor = 'pointer'; 
            sueter2.addEventListener('click', () => setSueterSrc('media/sueter02.png')); 
        }
        
        if (sueter3) { 
            sueter3.style.cursor = 'pointer'; 
            sueter3.addEventListener('click', () => setSueterSrc('media/sueter03.png')); 
        }
    </script>
</body>