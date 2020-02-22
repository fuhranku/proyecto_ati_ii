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