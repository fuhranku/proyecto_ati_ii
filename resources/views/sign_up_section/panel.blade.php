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
            {{-- {{ $step>='1' ? 'col step-active' : 'col' }} --}}
            {{-- col-step-active --}}
            <div class="col step-active b-step" id="b-step-0" data-step=0>1- ¿Cómo supo de nosotros? </div>
            <div class="col b-step" id="b-step-1" data-step=1>2- Registrar usuario </div>
            <div class="col b-step" id="b-step-2" data-step=2>3- Idioma del adiestramiento</div>
            <div class="w-100"></div>
            <div class="col b-step" id="b-step-3" data-step=3>4- Datos de inicio de sesión</div>
            <div class="col b-step" id="b-step-4" data-step=4>5- Frecuencia e información a recibir</div>
            <div class="col b-step" id="b-step-5" data-step=5>6- Datos de facturación</div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row sub-menu">
            <div class="col-xs">
                {{-- <a class="{{ $step == '1' ? 'btn btn-danger font-weight-bold invisible' : 'btn btn-danger font-weight-bold'}}"
                href="{{ url('sign_up/'.$_step_s) }}" role="button"> --}}
                <a class="btn btn-danger font-weight-bold text-white invisible" id="atras-btn" role="button">
                    < Atrás
                </a>
            </div>
            <div class="col-md bg-blue rounded pt-2">
                <h1 class="text-center text-uppercase" id="panel-heading">                      
                </h1>
            </div>
            <div class="col-xs">
                {{-- <button type="submit" class="btn btn-danger font-weight-bold" href="{{ url('sign_up/'.$_step_a) }}" role="button"> --}}
                <a class="btn btn-danger font-weight-bold text-white" id="continuar-btn" role="button">
                    Continuar >
                </a>
            </div> 
        </div>
    </div>

</section>