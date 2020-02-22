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