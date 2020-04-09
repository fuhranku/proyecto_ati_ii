<!DOCTYPE html>
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

