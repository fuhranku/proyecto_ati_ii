<!DOCTYPE html>
<html>
<head>
    <title>Proyecto ATI 2</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p> <b>Su usuario es: </b> {{ $details['user'] }}    </p>
    <p>Adicionalmente, acabamos de recibir una solicitud para restablecer la contraseña de </p>
    <a href="mailto:{{ $details['email'] }}">{{ $details['email'] }}</a>
    
        Haga clic <a href="{{ $details['url'] }}">aquí para restablecer tu contraseña</a>
    
    <a href="">Si el enlace no funciona, copia y pega el siguiente enlace en la barra del navegador</a>
    <br>
    <b>Enlace:</b>
    <br>
    <p>{{ $details['url'] }}</p>
</body>
</html>

