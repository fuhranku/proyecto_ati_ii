@php
    $url = request()->path();
    $paths = [
        'index',
        'dwelling',
        'dwelling/publish',
        'dwelling/publication',
        'dwelling/search',
        'services',
        'services/create',
        'services/search',
        'services/consult',
        'services/modify',
        'services/delete',
        'employment',
        'help',
        'contact_us',
        'about_us',
    ];
    foreach($paths as $path){
        if(strpos($url,$path) !== false){
            $active_url[$path] = 1;
        }else{
            $active_url[$path] = 0;
        }
    }
@endphp

<div class="navbar navbar-expand-md">
    <div class="collapse navbar-collapse" role="navigation">
        <ul class="nav navbar-nav bg-blue justify-content-center w-100">
            {{-- Inicio --}}
            <li class="nav-item active">
                <a class="{{$active_url['index'] == 0 ? 'nav-link button-menu' : 'nav-link button-menu nav-active'}}" href="{{ url('index') }}">Inicio</a>
            </li>
            
            {{-- Vivienda --}}
            <li class="dropdown nav-item">
                <a class="{{$active_url['dwelling'] == 0 ? 'nav-link dropdown-toggle button-menu' : 'nav-link dropdown-toggle button-menu nav-active'}}" href="#" id="navbarDwelling" role="button" data-toggle="dropdown">Vivienda</a>
                <ul class="dropdown-menu h-dropdown">
                    @if (Session::has('info'))
                    <li><a class="{{$active_url['dwelling/publish'] == 0 ? 'nav-link button-menu' : 'nav-link button-menu nav-active'}}" href="{{ url('dwelling/publish') }}">Publicar</a></li>
                    <li><a class="{{$active_url['dwelling/publication'] == 0 ? 'nav-link button-menu' : 'nav-link button-menu nav-active'}}" href="{{ url('dwelling/publication') }}">Ver Publicaciones</a></li>
                    @endif
                    <li><a class="{{$active_url['dwelling/search'] == 0 ? 'nav-link button-menu' : 'nav-link button-menu nav-active'}}" href="{{ url('dwelling/search') }}">Buscar</a></li>
                </ul>
            </li>

            {{-- Servicios --}}
            <li class="dropdown nav-item">
                <a class="{{$active_url['services'] == 0 ? 'nav-link dropdown-toggle button-menu' : 'nav-link dropdown-toggle button-menu nav-active'}}" href="#" id="navbarServices" role="button" data-toggle="dropdown">Servicios</a>
                <ul class="dropdown-menu h-dropdown">
                    @if (Session::has('info'))
                        <li><a class="{{$active_url['services/create'] == 0 ? 'nav-link button-menu' : 'nav-link button-menu nav-active'}}" href="{{ url('services/create') }}">Crear</a></li>
                        <li><a class="{{$active_url['services/search'] == 0 ? 'nav-link button-menu' : 'nav-link button-menu nav-active'}}" href="{{ url('services/search') }}">Buscar</a></li>
                        <li><a class="{{$active_url['services/consult'] == 0 ? 'nav-link button-menu' : 'nav-link button-menu nav-active'}}" href="{{ url('services/consult') }}">Consultar</a></li>
                        <li><a class="{{$active_url['services/modify'] == 0 ? 'nav-link button-menu' : 'nav-link button-menu nav-active'}}" href="{{ url('services/modify') }}">Modificar</a></li>
                        <li><a class="{{$active_url['services/delete'] == 0 ? 'nav-link button-menu' : 'nav-link button-menu nav-active'}}" href="{{ url('services/delete') }}">Eliminar</a></li>
                    @else
                        <li><a class="{{$active_url['services/search'] == 0 ? 'nav-link button-menu' : 'nav-link button-menu nav-active'}}" href="{{ url('services/search') }}">Buscar</a></li>
                    @endif
                </ul>
            </li>

            {{-- Empleo --}}
            <li class="nav-item">
                <a class="{{$active_url['employment'] == 0 ? 'nav-link button-menu' : 'nav-link button-menu nav-active'}}" href="{{ url('employment') }}">Empleo</a>
            </li>
            {{-- Ayuda --}}
            <li class="nav-item">
                <a class="{{$active_url['help'] == 0 ? 'nav-link button-menu' : 'nav-link button-menu nav-active'}}" href="{{ url('help') }}">Ayuda</a>
            </li>
            {{-- Contáctenos --}}
            <li class="nav-item">
                <a class="{{$active_url['contact_us'] == 0 ? 'nav-link button-menu' : 'nav-link button-menu nav-active'}}" href="{{ url('contact_us') }}">Contáctenos</a>
            </li>
            {{-- Conócenos más --}}
            <li class="nav-item">
                <a class="{{$active_url['about_us'] == 0 ? 'nav-link button-menu' : 'nav-link button-menu nav-active'}}" href="{{ url('about_us') }}">Conócenos más</a>
            </li>
            {{-- Idioma --}}
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle button-menu " href="#" id="navbarLanguage" role="button" data-toggle="dropdown">Idioma</a>
                <div class="dropdown-menu user-dropdown ml-2 pt-0 pb-0">
                    <a class="dropdown-item user-option p-2" href="#">Español</a>
                    <a class="dropdown-item user-option p-2" href="#">Ingles</a>
                </div>
            </li>
        </ul>
    </div>
</div>
