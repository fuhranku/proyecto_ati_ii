@extends('templates.layout')   

@section('title','Index')

@section('content')
<section>
    <div style="margin-top:70px">
        <h2 class="font-weight-bold text-danger ">Preguntas frecuentes:</h2>
        <br><br>
        <div class="row m-3">
            <div class="col-md-12 text-center">
                <p class="font-weight-bold text-danger ">¿Cómo publico mi vivienda con ustedes?</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-4 pr-0">
                <p>1- Debes registrarte haciendo click aquí: </p>
            </div>
            <div class="col-md-3 pl-0">
                <button class="btn btn-warning text-white" onclick="window.open('{{ url('sign_up') }}', '_blank')" >Registrarme</button>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3"></div>
            <div class="col-md-4 pr-0">
                <p>2- Luego debes iniciar sesión, haciendo clic en: </p>
            </div>
            <div class="col-md-3 pl-0">
                <button class="btn btn-warning text-white sign_in_button">Iniciar Sesión</button>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3"></div>
            <div class="col-md-8 pr-0">
                <p class="d-inline">3- Luego de iniciar sesión seleccionas la opción </p>
                <a href="#" class="text-blue d-inline"><u>Viviendas->Publicar</u></a>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3"></div>
            <div class="col-md-8 pr-0">
                <p class="mb-0">4- Luego colocas los datos solicitados, y luego presiona el botón Publicar vivienda</p>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-3"></div>
            <div class="col-md-8 pr-0">
                <p >5- Luego revisaremos la publicación, si todo esta bien, te notificaremos que ya tu vivienda está disponible para que otros usuarios la puedan visualizar, en un plazo de 3 días hábiles como máximo.</p>
            </div>
        </div>

    </div>
@endsection