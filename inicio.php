<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlaces a los archivos CSS -->
    <link rel="stylesheet" href="estilos/style_inicio.css">
    <link rel="stylesheet" href="materialize.css">
    <title>Inicio</title>
</head>

<body>

    <!-- Encabezado de la página con el logotipo y la navegación -->
    <header>
        <img src="estilos/ipro/logo_chb.jpg" alt="Logo Empresa 1" class="logo">
        <h3>HOTEL BALNEARIO BRISAS DE CAMBULOS</h3>    
        <ul>
            <!-- Enlaces de navegación a diferentes secciones del sitio -->
            <li><a href="inicio.php" target="">Inicio</a></li>
            <li><a href="reservas_form.html" target="_blank">Reserva</a></li>
            <li><a href="Registro (pasadia,evento).html" target="_blank">Evento</a></li>
            <li><a href="pasadiaformulario.html" target="_blank">Pasadía</a></li>
            <li><a href="Login.html" target="_blank">Inicia Sesión</a></li>
        </ul>
    </header>

    <!-- Sección del carrusel de imágenes -->
    <section id="carousel">
        <div class="carousel">
            <!-- Cada div representa una imagen del carrusel -->
            <div class="slide active" style="background-image: url('estilos/ipro/IMG-20240628-WA0074.jpg');"></div>
            <div class="slide" style="background-image: url('estilos/ipro/inicio2.jpg');"></div>
            <div class="slide" style="background-image: url('estilos/ipro/inicio3.jpg');"></div>
            <div class="slide" style="background-image: url('estilos//ipro/inicio2.jpg');"></div>
            <!-- Otras imágenes del carrusel -->
            <!-- ... -->
        </div>

        <!-- Enlaces a WhatsApp y Facebook -->
        <a href="https://wa.me/573219021661?text=Hola,%20quiero%20hacer%20una%20reservación%20u%20obtener%20más%20información%20sobre%20Hotel%20Balneario%20Brisas%20de%20Cambulos." class="whatsapp-link" target="_blank">
            <img src="estilos/ipro/whatsapp2.png" alt="WhatsApp">
        </a>
        <a href="https://www.facebook.com/hotelbalneariobrisasdecambulos?mibextid=ZbWKwL" class="facebook-link" target="_blank">
            <img src="estilos/ipro/facebook.png" alt="Facebook">
        </a>
    </section>

    <!-- Sección de misión y visión -->
    <section id="mision">
        <h2>Misión</h2>
        <p>
            La organización identificada con el nombre comercial BALNEARIO BRISAS LOS
            CAMBULOS es una empresa dedicada a promover el sector turismo , mediante
            parámetros de responsabilidad social , satisfaciendo las necesidades y experiencias
            del mercado de las ciudades y pueblos aledaños que requieren el servicio de
            hospedaje y piscina , en un ambiente familiar.
               <!-- Aquí va el contenido de la misión -->
        </p>
        <br>
        <h2>Visión</h2>
        <p>
            La organización identificada con el nombre comercial , “BALNEARIO BRISAS LOS
            CAMBULOS” Se proyecta se proyecta como una de las empresas promotoras del
            sector turismo de nuestro municipio y de la región, brindando descanso y sano
            esparcimiento de los visitantes propios y foráneos, buscará capacitar
            permanentemente al equipo de trabajo para velar por el mejoramiento en calidad del
            servicio, apoyando permanentemente en los valores en los valores institucionales y
            comprometidos en contribuir con sus acciones a la mejora del medioambiente.
             <!-- Aquí va el contenido de la visión -->
        </p>
    </section>
    <br>
    <br>

    <!-- Sección de ubicación con un mapa de Google Maps -->
    <section id="location">
        <h2>Ubicación</h2>
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.3029868977271!2d-74.47192762892016!3d5.00492139955554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e409a48c3674fe3%3A0x53b890b73f78ff8e!2sCambulos%20-%20Hotel%20Y%20Balneario!5e0!3m2!1ses-419!2sco!4v1723743531949!5m2!1ses-419!2sco" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- Pie de página con información de contacto -->
    <footer>
        <h1>Información</h1>
        <p>Horario: fines de semana y festivos. 8:00 am - 5:00 pm</p>
        <h1>Contacto</h1>
        <p>Email: contacto@tuempresa.com</p>
        <p>Teléfono: (+57)3208265400</p>
        <p>Dirección: Sector las Bombas Villeta-Cundinamarca</p>
        <p>&copy; 2024 HOTEL BALNEARIO BRISAS DE CAMBULOS. Todos los derechos reservados.</p>
    </footer>

    <!-- Enlace al archivo JavaScript externo -->
    <script src="funciones_javascript/inicio.js"></script>
</body>

</html>