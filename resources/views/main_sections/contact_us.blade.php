@extends('templates.layout') 

@section('title','Index')

@section('content')
<section>

    <div class="container">
        <div class="row">
            <div class="col p-5">
                <p class="font-weight-bold">Teléfonos</p>
                <p>+58 (0212) 362-82-68</p>
                <p>+58 (0414) 389-74-44</p>

                <div>
                <p class="font-weight-bold">Atención al público</p>
                <p>Lunes y viernes: de 8am a 12pm</p>
                <p>Sábados y domingos: de 8am a 12pm</p>
                </div>

                <div>
                <p class="font-weight-bold">Correo electrónico</p>
                <p>Envíanos tus preguntas o comentarios a</p>
                </div>

                <div>
                <p class="font-weight-bold">Enlaces de interés</p>
                <a href="/">Preguntas de interés</a>
                </div>

                <div>
                <p class="font-weight-bold">Síguenos en</p>
                <br>
                <a href="/">Instagram</a>
                <br>
                <a href="/">Facebook</a>
                <br>
                <a href="/">Youtube</a>
                </div>

            </div>

            <div class="col p-5 border border-primary rounded-lg">
                <p class="text-center font-weight-bold">Formulario de contacto</p>

                <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Para</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nombre y Apellido</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre y apellido">
                </div>
                <div class="form-group">
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" placeholder="Mensaje"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                </form>
            </div>
            
        </div>
    </div>
    
@endsection