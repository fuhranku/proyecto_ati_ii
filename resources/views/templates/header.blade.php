<header>
    <nav class="navbar navbar-expand-md sticky-top">
        <!-- One of the primary actions on mobile is to call a business - This displays a phone button on mobile only -->
        <div class="navbar-toggler-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
        </div>

        <div class="collapse navbar-collapse flex-column" id="navbar">
            <!-- First navbar ROW -->
            <ul class="navbar-nav bg-white ml-auto h-100 mr-2 mb-n1">
                <li class="nav-item mr-4">
                        <div class='row'>
                            <div class="col-md-4">
                                <img src="{{asset('images/avatar_default.png')}}" alt="avatar image" class="avatar-image">
                            </div>
                            <div class='col-md-8 font-weight-bold ml-0 pl-0'>
                                <div class="row">
                                    <span class="log-in-text" id='header_user_name'>Jose J Sánchez</span>
                                </div>
                                <div class="row">
                                    <span class="log-in-text" id='header_user_mail'>nirvana01@gmail.com</span>
                                </div>
                            </div>
                        </div>
                </li>

                <li class="nav-item">
                        <a class="nav-link mx-3 btn-yellow ry-corners mr-2 mt-1 p-2 pr-3 pl-3 sign_in_button">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link mx-3 btn-yellow ry-corners mr-2 mt-1 p-2 pr-3 pl-3 ml-n2" href="{{ url('sign_up') }}">Registrarse</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link mx-3 dropdown-toggle btn-yellow ry-corners mr-2 mt-1 pt-2 pb-2 pr-5 pl-5" href="#" id="navbarUser" role="button" data-toggle="dropdown">Usuario</a>
                    <div class="dropdown-menu mt-n1 ml-3 user-dropdown p-0" aria-labelledby="navbarUser">
                        <a class="dropdown-item user-option font-weight-bold p-2" href="#"> Datos de usuario </a>
                        <a class="dropdown-item user-option font-weight-bold p-2" href="#"> Cerrar sesión </a>
                    </div>
                </li>
            </ul>
            <!-- Second navbar ROW -->
            <ul class="navbar-nav justify-content-center w-100 bg-blue">
                <li class="nav-item active mr-7">
                     <a class="nav-link button-menu" href="{{ url('index') }}">Inicio</a>
                </li>
                <li class="nav-item mr-7 dropdown">
                    <a class="nav-link dropdown-toggle button-menu" href="#" id="navbarDwelling" role="button" data-toggle="dropdown">Vivienda</a>

                    <div class="dropdown-menu" aria-labelledby="navbarDwelling">
                        <a class="dropdown-item" href="{{ url('dwelling/publish') }}">Publicar</a>
                        <a class="dropdown-item" href="{{ url('dwelling/publication') }}">Ver Publicaciones</a>
                        <a class="dropdown-item" href="{{ url('dwelling/search') }}">Buscar</a>
                        <a class="dropdown-item" href="{{ url('dwelling/modify') }}">Modificar</a>
                        <a class="dropdown-item" href="{{ url('dwelling/delete') }}">Eliminar</a>
                        <a class="dropdown-item" href="{{ url('dwelling/enable') }}">Habilitar</a>
                        <a class="dropdown-item" href="{{ url('dwelling/disable') }}">Deshabilitar</a>
                    </div>
                </li>
                <li class="nav-item mr-7 dropdown">
                    <a class="nav-link dropdown-toggle button-menu" href="#" id="navbarServices" role="button" data-toggle="dropdown">Servicios</a>

                    <div class="dropdown-menu" aria-labelledby="navbarServices">
                        <a class="dropdown-item" href="{{ url('services/create') }}">Crear</a>
                        <a class="dropdown-item" href="{{ url('services/search') }}">Buscar</a>
                        <a class="dropdown-item" href="{{ url('services/consult') }}">Consultar</a>
                        <a class="dropdown-item" href="{{ url('services/modify') }}">Modificar</a>
                        <a class="dropdown-item" href="{{ url('services/delete') }}">Eliminar</a>
                    </div>
                </li>
                <li class="nav-item mr-7">
                    <a class="nav-link button-menu" href="{{ url('employment') }}">Empleo</a>
                </li>
                <li class="nav-item mr-7">
                    <a class="nav-link button-menu" href="{{ url('help') }}">Ayuda</a>
                </li>
                <li class="nav-item mr-7">
                    <a class="nav-link button-menu" href="{{ url('contact_us') }}">Contáctenos</a>
                </li>

                <li class="nav-item mr-7">
                    <a class="nav-link button-menu" href="{{ url('about_us') }}">Conócenos más</a>
                </li>

                <li class="nav-item mr-7 dropdown">
                    <a class="nav-link dropdown-toggle button-menu" href="#" id="navbarLanguage" role="button" data-toggle="dropdown">Idioma</a>

                    <div class="dropdown-menu" aria-labelledby="navbarLanguage">
                        <a class="dropdown-item" href="{{ url('services/create') }}">Español</a>
                        <a class="dropdown-item" href="{{ url('services/search') }}">Ingles</a>
                    </div>
                </li>
                
            </ul>
        </div>
    </nav>
</header>