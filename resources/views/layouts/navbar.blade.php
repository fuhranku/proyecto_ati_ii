<nav class="navbar navbar-expand-md">
    <!-- One of the primary actions on mobile is to call a business - This displays a phone button on mobile only -->
    <div class="navbar-toggler-right">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
    </div>

    <div class="collapse navbar-collapse flex-column" id="navbar">
        <!-- First navbar ROW -->
        <ul class="navbar-nav bg-white ml-auto h-100">
            <li class="nav-item bg-yellow ry-corners mr-2 mt-1">
                    <a class="nav-link mx-3" href="{{ url('sign_in') }}"data-target="#sign_in">Iniciar sesión</a>
            </li>
            <li class="nav-item bg-yellow ry-corners mr-2 mt-1">
                    <a class="nav-link mx-3" href="{{ url('sign_up') }}">Registrarse</a>
            </li>
        </ul>
        <!-- Second navbar ROW -->
        <ul class="navbar-nav justify-content-center w-100 bg-blue">
            <li class="nav-item active mr-7">
                    <a class="nav-link" href="{{ url('index') }}">Inicio</a>
            </li>
            <li class="nav-item mr-7 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarServices" role="button" data-toggle="dropdown">Vivienda</a>

                <div class="dropdown-menu" aria-labelledby="navbarServices">
                    <a class="dropdown-item" href="{{ url('dwelling/publish') }}">Publicar</a>
                    <a class="dropdown-item" href="{{ url('dwelling/look') }}">Ver Publicaciones</a>
                    <a class="dropdown-item" href="{{ url('dwelling/search') }}">Buscar</a>
                    <a class="dropdown-item" href="{{ url('dwelling/modify') }}">Modificar</a>
                    <a class="dropdown-item" href="{{ url('dwelling/delete') }}">Eliminar</a>
                    <a class="dropdown-item" href="{{ url('dwelling/enable') }}">Habilitar</a>
                    <a class="dropdown-item" href="{{ url('dwelling/enable') }}">Deshabilitar</a>
                </div>
            </li>
            <li class="nav-item mr-7 dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarServices" role="button" data-toggle="dropdown">Servicios</a>

                <div class="dropdown-menu" aria-labelledby="navbarServices">
                    <a class="dropdown-item" href="{{ url('services/create') }}">Crear</a>
                    <a class="dropdown-item" href="{{ url('services/search') }}">Buscar</a>
                    <a class="dropdown-item" href="{{ url('services/consult') }}">Consultar</a>
                    <a class="dropdown-item" href="{{ url('services/modify') }}">Modificar</a>
                    <a class="dropdown-item" href="{{ url('services/delete') }}">Eliminar</a>
                </div>
            </li>
            <li class="nav-item mr-7">
                <a class="nav-link" href="{{ url('employment') }}">Empleo</a>
            </li>
            <li class="nav-item mr-7">
                <a class="nav-link" href="{{ url('help') }}">Ayuda</a>
            </li>
            <li class="nav-item mr-7">
                <a class="nav-link" href="{{ url('contact_us') }}">Contáctenos</a>
            </li>
            <li class="nav-item mr-7">
                <a class="nav-link" href="{{ url('about_us') }}">Conócenos más</a>
            </li>
            <li class="nav-item mr-7">
                <a class="nav-link" href="{{ url('languages') }}">Idioma</a>
            </li>
        </ul>
    </div>
</nav>