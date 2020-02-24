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
    
    <!-- Font Awesome and Bootstrap core CSS  -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    
    <!-- Custom styles for this template -->
    @yield("css")

    <link href="{{ asset('css/modal.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('intl-tel-input/build/css/intlTelInput.css')}}" rel="stylesheet">


</head>

<body>

<header>
    <div class="sticky-top">
        @include("layouts.navbar")
    </div>
</header>

<!-- Begin page content -->
<main role="main" class="container">
    @yield('content')
</main>
<!-- Footer Content -->
<footer>
    @include("layouts.navbar")
</footer>
<!-- Scripts BootStrap,Jquery,Popper.js -->
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Custom scripts for this template -->
<script src="{{ asset('intl-tel-input/build/js/intlTelInput.js')}}"></script>
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
@yield("js")
</body>
</html>