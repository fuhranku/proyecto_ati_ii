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
    <link href="{{ asset('css/dwelling.css') }}" rel="stylesheet">
    <link href="{{ asset('intl-tel-input/build/css/intlTelInput.css')}}" rel="stylesheet">
    <script src="{{ asset('external/all.min.js') }}"></script>
    <script src="{{ asset('external/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('external/popper.min.js') }}"></script>
</head>

<body>
    {{-- Header --}}
    @include('templates.header')
    {{-- Preloader --}}
    <img class='loading-image position-absolute preloader1 d-none' src="{{url('/images/preloader1.svg')}}" id='preloader-storing'>

<!-- Begin page content -->
<main role="main" class="container pt-5" id="page-container">
    <div id="content-wrap">
        @yield('content')
        @include('sign_in_section.sign_in')
        @include('sign_in_section.sign_in_change_pass')
    </div>
</main>
    <!-- Footer -->
    @include('templates.footer')
</body>
@if (Session::get('error-login') == true)
    <script>
        $( document ).ready(function() {
            console.log( "ready!" );
            $('#sign_in').modal('show');
        });     
    </script>
    <?php 
    Session::put('error-login', false);
    ?>
@endif
@if (Session::has('change-pass') && Session::get('change-pass') == true)
    <?php 
    Session::put('change-pass', false);
    ?>
    <script>
        $( document ).ready(function() {
            console.log( "ready!" );
            $('#change_password').modal('show');
        });     
    </script>
@endif
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('external/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script> 

<script src="{{ asset('js/dwelling/dwelling.js') }}"></script>
<script src="{{ asset('js/sign_in.js') }}"></script>
<script src="{{ asset('js/forgot.js') }}"></script> 
<script src="{{ asset('intl-tel-input/build/js/intlTelInput.js')}}"></script>
<script>
    base_url = '{{url('')}}'
    console.log("{{request()->path()}}");
     var utilsScript = "{{asset('intl-tel-input/build/js/utils.js')}}";
</script>
</html>