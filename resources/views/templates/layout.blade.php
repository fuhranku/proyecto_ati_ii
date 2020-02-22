<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="favicon.ico">

    <title>@yield('title') - tuPropiedad</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/registro.css') }}" rel="stylesheet">
    <link href="{{ asset('intl-tel-input/build/css/intlTelInput.css')}}" rel="stylesheet">
    {{-- <link href="{{ asset('intl-tel-input/build/css/demo.css')}}" rel="stylesheet"> --}}
</head>

<body>

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
</header>

<!-- Begin page content -->
<main role="main" class="container" id="page-container">
    <div id="content-wrap">
        @yield('content')
    </div>
</main>
<!-- Footer Content -->
<footer>
    <div class="navbar navbar-expand-md">
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
                        <a class="nav-link mx-3" href="{{ url('sign_in') }}">Iniciar sesión</a>
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
    </div>
</footer>
</body>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ asset('intl-tel-input/build/js/intlTelInput.js')}}"></script>
{{-- <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script> --}}
<script src="{{ asset('js/app.js') }}"></script> 
 <script>
    var input = document.querySelectorAll(".phone");
    for (i=0; i<input.length;i++){
        console.log(i);
        window.intlTelInput(input[i], {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            formatOnDisplay: true,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "{{asset('intl-tel-input/build/js/utils.js')}}",
        });
    }

 </script>
</html>