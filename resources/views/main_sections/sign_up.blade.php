@extends('templates.layout')   

@section('title','Index')

@section('content')

<section id="sub-header" data->
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="text-center text-uppercase"> Panel de registro </h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <p class="sign-info"> 
                <span class="text-danger">*</span>
                Estos son los pasos a seguir para completar su registro. <br>
                <span class="text-danger">*</span>
                Si en algún momento necesita acceder a una sección del registro,
                <span class="text-blue"><u>
                    haga clic en el panel de color verde que sea de su preferencia
                </u></span>
            </p>
        </div>
    </div>

    <div class="container">
        <div class="row step m-info">
            <div class="{{ $step>='1' ? 'col step-active' : 'col' }}" id="b-step-1" onclick="window.location='{{url('sign_up/1')}}';">1- ¿Cómo supo de nosotros? </div>
            <div class="{{ $step>='2' ? 'col step-active' : 'col' }}" id="b-step-2" onclick="window.location='{{url('sign_up/2')}}';">2- Registrar usuario </div>
            <div class="{{ $step>='3' ? 'col step-active' : 'col' }}" id="b-step-3" onclick="window.location='{{url('sign_up/3')}}';">3- Idioma del adiestramiento</div>
            <div class="w-100"></div>
            <div class="{{ $step>='4' ? 'col step-active' : 'col' }}" id="b-step-4" onclick="window.location='{{url('sign_up/4')}}';">4- Datos de inicio de sesión</div>
            <div class="{{ $step>='5' ? 'col step-active' : 'col' }}" id="b-step-5" onclick="window.location='{{url('sign_up/5')}}';">5- Frecuencia e información a recibir</div>
            <div class="{{ $step=='6' ? 'col step-active' : 'col' }}" id="b-step-6" onclick="window.location='{{url('sign_up/6')}}';">6- Datos de facturación</div>
        </div>
    </div>
    @php
        $_step_a = $step + 1;
        $_step_s = $step - 1;  
    @endphp
    <div class="container-fluid">
        <div class="row sub-menu">
            <div class="col-xs">
                <a class="{{ $step == '1' ? 'btn btn-danger font-weight-bold invisible' : 'btn btn-danger font-weight-bold'}}"
                href="{{ url('sign_up/'.$_step_s) }}" role="button">
                    < Atrás
                </a>
            </div>
            <div class="col-md bg-blue rounded pt-2">
                <h1 class="text-center text-uppercase">
                    @switch($step)
                        @case(1)
                            Cómo supo de nosotros 
                            @break
                        @case(2)
                            Registrar Usuario
                            @break
                        @case(3)
                            Idioma en que desea visualizar el portal al iniciar sesión
                            @break
                        @case(4)
                            Datos de inicio de sesión
                            @break
                        @case(5)
                            Frecuencia e información a recibir 
                            @break
                        @case(6)
                            Datos de Facturación
                            @break                            
                    @endswitch    
                
                </h1>
            </div>
            <div class="col-xs">
                <a class="btn btn-danger font-weight-bold" href="{{ url('sign_up/'.$_step_a) }}" role="button">
                    Continuar >
                </a>
            </div> 
        </div>
    </div>

</section>

<section id="content">
@switch($step)
    {{-- 1-Cómo Supo de Nosotros --}}
    @case(1)
    <section id="step-1">
        <div class='container mt-3'>
            Por favor, coméntenos, cómo se enteró de los servicios de la empresa <br>
            Es importante para nosotros porque nos ayuda a mejorar el servicio que le ofrecemos

            <form>
                <div class="row mt-3">
                    <div class="col-md-3 form-check">
                        <input type="checkbox" class="form-check-input" id="portal-web">
                        <label class="form-check-label" for="portal-web">Portal Web de la empresa</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rrss">
                        <label class="form-check-label" for="rrss">Redes Sociales</label>
                        <ul class="checkbox-dropdown">
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><label class="checkbox"><input type="checkbox">Facebook</label></li>
                                    <li><label class="checkbox"><input type="checkbox">Twitter</label></li>
                                    <li><label class="checkbox"><input type="checkbox">Instagram</label></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 form-check">
                        <input type="checkbox" class="form-check-input" id="amigos">
                        <label class="form-check-label" for="amigos">Amigos</label>
                    </div>
                    <div class="col-md-3 form-check">
                        <input type="checkbox" class="form-check-input" id="otro">
                        <label class="form-check-label" for="otro">Otro</label>
                        <div style="margin-left: -100px; margin-top: 30px;">
                            <label class="form-check-label"> <strong>Especifique cuál fue el medio por el que supo de nosotros<strong></label> 
                            <input type="text" class="form-control" placeholder="Correo, Radio, Prensa" aria-label="medio-contacto" aria-describedby="basic-addon1">
                        </div>
                    </div>
                </div>
            </form>
            <div class="row mt-5">
                <div class="col-sm-12">
                    <div class="text-center">
                        <button class="btn  bg-yellow " id="singlebutton" style="font-weight:bold;color:#ffffff; padding:5px 30px">
                            Cancelar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @break
    {{-- Registrar Usuario --}}
    @case(2)
        @php
            $personType = 0;
        @endphp
    <section id="step-2">
        <div class="container">
            <div class='row mt-3'>
                <div class='col-sm-3 font-weight-bold'>
                    Seleccione el tipo de usuario:
                </div>
                <div class='col-sm-2'>
                    <input type="checkbox" class="form-check-input" id="checkbox-natural" onchange="window.location='{{url('sign_up/2/natural')}}';">
                    <label class="form-check-label" for="natural" >Persona natural</label>
                </div>
                <div class='col-sm-2'>
                    <input type="checkbox" class="form-check-input" id="checkbox-juridica" onchange="window.location='{{url('sign_up/2/juridica')}}';">
                    <label class="form-check-label" for="juridica">Persona juridíca</label>
                </div>
            </div>
            @if ($type == 'natural')
                natural
            @elseif ($type == 'juridica')
                juridica
            @endif
        </div>
    </section>
        @break
    @case(3)
    <section id="step-3">
        3
    </section>
    @break
    @case(4)
    <section id="step-4">
        4
    </section>
    @break
    @case(5)
    <section id="step-5">
        5
    </section>
    @break
    @case(6)
    <section id="step-6">
        6
    </section>
    @break        
@endswitch

</section>
<script type="text/javascript">
    var step = "{{$step}}";
    var type = "{{$type}}";
</script>
@endsection