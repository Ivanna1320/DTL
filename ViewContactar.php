<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DTL</title>
    <link href="resources/scss/styles.css" rel="stylesheet" >
        
    
</head>
<body>
    <!--Navbar-->
      <?php
        require_once('navbar.php');
      ?>
    <!--Fin Navbar-->

    <div class="container bg-light rounded text-center mt-5" style="width: 50%">
        <div class="">
        
            <div class="container mt-5">
                <h2 class="text-center mb-3">Contactanos</h2>
                <p class="mt-2">Envía tus datos y nosotros nos comunicamos contigo.</p>
                <p class="mb-5">
                    <small class="text-body-secondary">Si no te damos respuesta en 3 dias comunicate a nuestro WhatsApp.</small>
                    <a href="https://wa.me/523143388215" target="_blank" class="mt-0" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                        </svg>
                    </a>
                </p>
                
                <form name="form-contacto" action="#" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo" required>
                    </div>
                    <div class="col-auto">
                        <label for="correo" class="form-label">Correo Electrónico:</label>
                        <div class="input-group">
                            <div class="input-group-text">@</div>
                            <input type="email" name="email" id="email" class="form-control" id="autoSizingInputGroup" placeholder="ejemplo@gmail.com">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje:</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="5" placeholder="Coloca tus preguntas o interes" required></textarea>
                    </div>
                    <button type="submit" id="enviarCorreo" class="btn btn-primary mb-3">Enviar Mensaje</button>
                </form>
            </div>
        
        </div>
    </div>



    <!--Inicio Footer-->
    <?php
      require_once('footer.php');
    ?>
    <!--Fin Footer-->

    <script src="resources/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        const btnEnvio = document.getElementById('enviarCorreo');
        btnEnvio.addEventListener('click', function(e) {
            e.preventDefault();
            const nombre = document.getElementById('nombre').value;
            const email = document.getElementById('email').value;
            const mensaje = document.getElementById('mensaje').value;
            window.location.href=`mailto:itorres13@ucol.mx?
            subject=envioDeDatos&body=Nombre%3A${nombre}%0ACorreo%3A${email}%0AMensaje%3A${mensaje}`;
        });
    </script>


</body>
</html>