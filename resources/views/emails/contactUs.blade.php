<!DOCTYPE html>
<html>
<head>
    <title>Proyecto ATI 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
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
                modal_contact
            @endslot
            @slot('header')
            {{ $details['title'] }}    
            @endslot
            @slot('content')
            <p> <b>Email: </b> 
                <a href="mailto:{{ $details['email'] }}">{{ $details['email'] }}</a>
            </p>
            <p><b>Mensaje: </b>
                {{ $details['message'] }}
            </p>
            @endslot
        @endcomponent    
        
    {{-- <script src="{{ asset('external/all.min.js') }}"></script>
    <script src="{{ asset('external/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('external/popper.min.js') }}"></script>  --}}
</body>
</html>


{{-- <!DOCTYPE html>
<html>
<head>
    <title>Proyecto ATI 2</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p> <b>Email: </b> 
        <a href="mailto:{{ $details['email'] }}">{{ $details['email'] }}</a>
    </p>
    <p><b>Mensaje: </b>
        {{ $details['message'] }}
    </p>
</body>
</html>
 --}}
