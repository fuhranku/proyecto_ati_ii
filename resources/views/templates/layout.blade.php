<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="icon" href="favicon.ico">

    <title>@yield('title') - tuPropiedad</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('external/bootstrap.min.css')}}" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="{{asset('external/all.min.css')}}" rel="stylesheet">
       
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/registro.css') }}" rel="stylesheet">
    <link href="{{ asset('intl-tel-input/build/css/intlTelInput.css')}}" rel="stylesheet">
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
            <ul class="navbar-nav bg-white ml-auto h-100 mr-2">
                <li class="nav-item">
                        <a class="nav-link mx-3 btn-yellow ry-corners mr-2 mt-1 p-2 pr-3 pl-3" href="{{ url('sign_in') }}">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link mx-3 btn-yellow ry-corners mr-2 mt-1 p-2 pr-3 pl-3 ml-n2" href="{{ url('sign_up') }}">Registrarse</a>
                </li>
            </ul>
            <!-- Second navbar ROW -->
            <ul class="navbar-nav justify-content-center w-100 bg-blue">
                <li class="nav-item active mr-7">
                     <a class="nav-link" href="{{ url('index') }}">Inicio</a>
                </li>
                <li class="nav-item mr-7 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDwelling" role="button" data-toggle="dropdown">Vivienda</a>

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

                <li class="nav-item mr-7 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLanguage" role="button" data-toggle="dropdown">Idioma</a>

                    <div class="dropdown-menu" aria-labelledby="navbarLanguage">
                        <a class="dropdown-item" href="{{ url('services/create') }}">Español</a>
                        <a class="dropdown-item" href="{{ url('services/search') }}">Ingles</a>
                    </div>
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
             <ul class="navbar-nav bg-white ml-auto h-100 mr-2">
                <li class="nav-item">
                        <a class="nav-link mx-3 btn-yellow ry-corners mr-2 mt-1 p-2 pr-3 pl-3" href="{{ url('sign_in') }}">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link mx-3 btn-yellow ry-corners mr-2 mt-1 p-2 pr-3 pl-3 ml-n2" href="{{ url('sign_up') }}">Registrarse</a>
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
<script src="{{ asset('external/all.min.js') }}"></script>
<script src="{{ asset('external/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('external/popper.min.js') }}"></script>
<script src="{{ asset('external/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script> 
<script src="{{ asset('js/dwelling.js') }}"></script>
<script src="{{ asset('js/sign_up.js') }}"></script> 
<script src="{{ asset('js/sign_in.js') }}"></script>
<script src="{{ asset('intl-tel-input/build/js/intlTelInput.js')}}"></script>
<script>
     var utilsScript = "{{asset('intl-tel-input/build/js/utils.js')}}";
    // var input = document.querySelectorAll(".phone");
    // for (i=0; i<input.length;i++){
    //     console.log(i);
    //     window.intlTelInput(input[i], {
    //         // allowDropdown: false,
    //         // autoHideDialCode: false,
    //         // autoPlaceholder: "off",
    //         // dropdownContainer: document.body,
    //         // excludeCountries: ["us"],
    //         //formatOnDisplay: true,
    //         // geoIpLookup: function(callback) {
    //         //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    //         //     var countryCode = (resp && resp.country) ? resp.country : "";
    //         //     callback(countryCode);
    //         //   });
    //         // },
    //         // hiddenInput: "full_number",
    //         // initialCountry: "auto",
    //         // localizedCountries: { 'de': 'Deutschland' },
    //         // nationalMode: false,
    //          onlyCountries: ['ve', 'es'],
    //         // placeholderNumberType: "MOBILE",
    //         // preferredCountries: ['cn', 'jp'],
    //         // separateDialCode: true,
    //         utilsScript: "{{asset('intl-tel-input/build/js/utils.js')}}",
    //     });
    // }

 </script>
</html>