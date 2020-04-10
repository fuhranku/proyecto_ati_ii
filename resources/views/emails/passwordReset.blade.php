<!DOCTYPE html>
<html>
<head>
    <title>Proyecto ATI 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <!-- Styles -->
  <style>
        body {
            /* background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh; */
            display: flex;
            align-content:center;
            width: fit-content;
        }

        .full-height {
            height: 100vh;
        } 

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
            color: violet;
        } 
        .modal-content{
            border-radius: 0px;
            margin: 120px;
            border: 1px solid rgb(47, 82, 143);
            margin: 20%;
        }
        .modal-header{
            padding: 0rem;
            border-bottom: 1px solid rgb(47, 82, 143);
            border-radius: 0px;
            background-color: #00b0f0;
            align-items: center;
            color: #ffffff;
        }
        
        .modal-title{
            padding: 5px;
            width: 100%;
            text-align: center;
        }

        .close{
            opacity: 1;
            font-weight: 200;
            color: #ffffff;
            /* color: #ffc000;
            color: #00b0f0; */
        }
        .modal-container{
            padding: 15px;
        }
        .modal-header .icon {
            background-color: transparent;
            border: 0;
            padding: 1rem 1rem;
            margin: -1rem -1rem -1rem auto;
            color: #ffffff;
            text-shadow: 0 1px 0 #fff;
            font-size: 1.2rem;
            border: none;
        }
        .close{
            opacity: 1;
            font-weight: 200;
            background-color: transparent;
            color: #ffffff;
            border: none;
            /* color: #ffc000;
            color: #00b0f0; */
        }

        .grid-container {
            display: flex;
           
        }

        /* .grid-container > div {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: center;
            padding: 20px 0;
            font-size: 30px;
        } */

        .icons {
            flex-direction:row;
        }
  </style>
</head>
<body>
        @component('components.modal_mail')
            @slot('modal_id')
                modal_pass
            @endslot
            @slot('header')
            {{ $details['title'] }}    
            @endslot
            @slot('content')
            <p> <b>Su usuario es: </b> {{ $details['user'] }}    </p>
            <p>Adicionalmente, acabamos de recibir una solicitud para restablecer la contraseña de </p>
            <a href="mailto:{{ $details['email'] }}">{{ $details['email'] }}</a>
            <p>
            </p>
            <a href={{ $details['url'] }}>Haga clic aquí para restablecer tu contraseña</a>
            <br>
            <a href="">Si el enlace no funciona, copia y pega el siguiente enlace en la barra del navegador</a>
            <br>
            <b>Enlace :</b>
            <br>
            <p>{{ $details['url'] }}</p>
            
            @endslot
        @endcomponent    
        
    {{-- <script src="{{ asset('external/all.min.js') }}"></script>
    <script src="{{ asset('external/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('external/popper.min.js') }}"></script>  --}}
</body>
</html>

