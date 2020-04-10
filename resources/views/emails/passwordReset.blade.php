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
            
            display: flex;
            height: 100%;
            align-content:center;
            align-items: center;
            justify-content: center;
        }

        .title {
            font-size: 84px;
            color: violet;
        } 
        .modal-content{
            border-radius: 0px;
            width: 80%;
            margin: auto;
            border: 1px solid rgb(47, 82, 143);
        }
        .modal-header{
            padding: 0rem;
            border-bottom: 1px solid rgb(47, 82, 143);
            border-radius: 0px;
            background-color: #00b0f0;
            align-items: center;
            color: #ffffff;
            font-weight: bold;
            /* display: flex; */
        }
        
        .modal-title{
            padding: 5px;
            width: 100%;
            text-align: center;
        }

        .modal-container{
            padding: 15px;
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

