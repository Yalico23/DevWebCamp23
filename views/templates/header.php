<header class="header">
    <div class="header__contenedor">
        <nav class="header__navegacion">
            <a href="/registro" class="header__enlace">Registro</a>
            <a href="/login" class="header__enlace">Iniciar Sesión</a>
        </nav>
        <div class="header__contenido">
            <a href="/">
                <h1 class="header__logo">&#60;DevWebCamp/></h1>
            </a>
            <p class="header__texto">Marzo 26/03/2024</p>
            <p class="header__texto header__texto--modalidad">En Linea - Presencial</p>

            <a href="/registro-inicio" class="header__boton">Comprar Pase</a>
        </div>
    </div>
</header>
<div class="barra">
    <div class="barra__contenido">
        <a href="/">
            <h1 class="barra__logo">&#60;DevWebCamp/></h1>
        </a>
        <nav class="navegacion">
            <a href="/devwebcamp" class="navegacion__enlace <?php echo pagina_Actual('/devwebcamp') ? 'navegacion__enlace--fijo' : ''; ?>">Evento</a>
            <a href="/paquetes" class="navegacion__enlace <?php echo pagina_Actual('/paquetes') ? 'navegacion__enlace--fijo' : ''; ?>">Paquetes</a>
            <a href="/workshops-conferencias" class="navegacion__enlace <?php echo pagina_Actual('/workshops-conferencias') ? 'navegacion__enlace--fijo' : ''; ?>">Workshops / Conferencias</a>
            <a href="/registro-inicio" class="navegacion__enlace <?php echo pagina_Actual('/registro-inicio') ? 'navegacion__enlace--fijo' : ''; ?>">Comprar Pase</a>
        </nav>
    </div>
</div>