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
        </div>
    </section>
    @break
    {{-- Registrar Usuario --}}
    @case(2)
        @php
            $personType = 0;
        @endphp
    <section id="step-2">
        <div class="container justify-content-center">
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
                <div class="container ml-special mt-3" id="container-p-natural">
                    <span class="font-weight-bold">Ingrese los datos solicitados a continuación:</span>
                    <div class="row mt-3">
                        <div class="col-md-3 my-auto">
                            <label class="font-weight-bold"> <span class="ast-required"> *</span>Nombre</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control input-section2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 my-auto">
                            <label class="font-weight-bold"> <span class="ast-required"> *</span>Apellido</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control input-section2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 my-auto">
                            <label class="font-weight-bold"> <span class="ast-required"> *</span>Cédula/Pasaporte/DNI</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control input-section2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 my-auto">
                            <label class="font-weight-bold"> <span class="ast-required"> *</span>Correo Electrónico</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control input-section2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 my-auto">
                            <label class="font-weight-bold"> <span class="ast-required"> *</span>País de procedencia</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control input-section2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label class="font-weight-bold"> <span class="ast-required"> *</span>Teléfono</label>
                        </div>
                    </div>
                    <div class="row ml-5" >
                        <div class="text-blue"> Seleccione el o los teléfonos de su preferencia</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 form-check">
                            <input type="checkbox" class="form-check-input" id="portal-web">
                            <label class="form-check-label bg-yellow text-white tlf-checkbox" for="portal-web">Móvil</label>
                        </div>
                        <div class="col-md-3 form-check">
                            <input type="checkbox" class="form-check-input" id="portal-web">
                            <label class="form-check-label bg-yellow text-white tlf-checkbox" for="portal-web">Fijo</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"> 
                        <input class="phone form-control" name="phone1" type="tel">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3"> 
                        <input class="phone form-control" name="phone2" type="tel">
                        </div>
                        <div class="col-sm-1 font-weight-bold my-auto">
                                Ext
                        </div>
                        <div class="col-sm-3"> 
                            <input type="text" class="form-control" style="margin-left: -50px;" placeholder="Opcional">
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-sm-8"> 
                            <div class="text-blue text-justify font-weight-bold mt-3"><span class="ast-required"> *</span>
                                Por favor, verifique que sus datos sean los correctos, ya que serán utilizados
                                para generar su publicación, enviarle sus datos de acceso, inscribirse en un
                                adiestramiento, o solicitar cotizaciones
                            </div>
                        </div>
                    </div>
                </div>
            @elseif ($type == 'juridica')
            <div class="container pl-5 pr-5" id="container-p-juridica">
                <div class="row mt-4 pl-5 pr-5">
                    <div class="col-sm-6">
                        <div class="text-center">
                            <span class="bg-blue text-white font-weight-bold pt-2 pb-2 pl-3 pr-3">
                                Datos de la empresa
                            </span>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6 my-auto">
                                <label class="font-weight-bold"> <span class="ast-required"> *</span>Nombre de la empresa</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 my-auto">
                                <label class="font-weight-bold"> <span class="ast-required"> *</span>Razón social/RIF</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 my-auto">
                                <label class="font-weight-bold"> <span class="ast-required"> *</span>País de procedencia</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control" id="sel1">
                                  <option label=" " disabled selected value></option>
                                  <option >Venezuela</option>
                                  <option>España</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 my-auto">
                                <label class="font-weight-bold"> <span class="ast-required"> *</span>Ciudad</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control" id="sel1">
                                  <option label=" " disabled selected value></option>
                                  <option >1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6 my-auto">
                                <label class="font-weight-bold"> <span class="ast-required"> *</span>Dirección</label>
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control overflow-auto" style="resize:none;"></textarea>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-6 pl-5">
                        <div class="text-center">
                            <span class="bg-blue text-white font-weight-bold pt-2 pb-2 pl-3 pr-3">
                                Datos del representante de la empresa
                            </span>
                        </div>
                            <div class="row mt-3">
                                <div class="col-md-6 my-auto">
                                    <label class="font-weight-bold"> <span class="ast-required"> *</span>Nombre y Apellido</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 my-auto">
                                    <label class="font-weight-bold"> <span class="ast-required"> *</span>Correo electrónico</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 my-auto">
                                    <label class="font-weight-bold"> <span class="ast-required"> *</span>Teléfono</label>
                                </div>
                            </div>
                            <div class="row ml-3" >
                                <div class="text-blue"> Seleccione el o los teléfonos de su preferencia</div>
                            </div>
                            <div class="row pl-5 mt-3 mb-3">
                                    <div class="col-md-6 form-check">
                                        <input type="checkbox" class="form-check-input" id="portal-web">
                                        <label class="form-check-label bg-yellow text-white tlf-checkbox pt-1 pb-1 pl-5 pr-5" for="portal-web">Móvil</label>
                                    </div>
                                    <div class="col-md-6 form-check">
                                        <input type="checkbox" class="form-check-input" id="portal-web">
                                        <label class="form-check-label bg-yellow text-white tlf-checkbox pt-1 pb-1 pl-5 pr-5" for="portal-web">Fijo</label>
                                    </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-6"> 
                                <input class="phone form-control" name="phone1" type="tel">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6"> 
                                <input class="phone form-control" name="phone2" type="tel">
                                </div>
                                <div class="col-sm-2 font-weight-bold my-auto">
                                        Ext
                                </div>
                                <div class="col-md-4"> 
                                    <input type="text" class="form-control"  style="margin-left:-30px;" placeholder="Opcional">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-sm-12"> 
                    <div class="text-blue text-justify font-weight-bold mt-3"><span class="ast-required"> *</span>
                        Por favor, verifique que sus datos sean los correctos, ya que serán utilizados
                        para generar su publicación, enviarle sus datos de acceso, inscribirse en un
                        adiestramiento, o solicitar cotizaciones
                    </div>
                </div>
            </div>
            @endif

    </section>
        @break
    @case(3)
    <section id="step-3">
        <div class="row mt-5">
            <div class="col-md-4 mr-5"></div>
            <div class="col-md-1 form-check ">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="portal-web">Español</label>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1 form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="portal-web">Inglés</label>
            </div>
        </div>
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
<div class="row mt-5">
    <div class="col-sm-12">
        <div class="text-center">
            <button class="btn  bg-yellow " id="singlebutton" style="font-weight:bold;color:#ffffff; padding:5px 30px">
                Cancelar
            </button>
        </div>
    </div>
</div>
</section>
<script type="text/javascript">
    var step = "{{$step}}";
    var type = "{{$type}}";
</script>
@endsection