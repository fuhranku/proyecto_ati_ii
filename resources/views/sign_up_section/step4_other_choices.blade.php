<div class="container d-none" id='step2_other_menu'>
    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-2 font-weight-bold">
            Frecuencia
        </div>
        <div class="col-md-1">
            <select class="form-control" id='custom_month_freq'>
                <option value='' label="--" disabled selected value></option>
                <option value=0>0</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
                <option value=6>6</option>
                <option value=7>7</option>
                <option value=8>8</option>
                <option value=9>9</option>
                <option value=10>10</option>
                <option value=11>11</option>
                <option value=12>12</option>
            </select>
        </div>
        <div class="col-md-1 font-weight-bold my-auto">
            Meses
        </div>
        <div class="col-md-1">
            <select class="form-control" id='custom_days_freq'>
                <option value='' label="--" disabled selected value></option>
                <option value=0>0</option>
                <option value=1>1</option>
                <option value=2>2</option>
                <option value=3>3</option>
                <option value=4>4</option>
                <option value=5>5</option>
                <option value=6>6</option>
                <option value=7>7</option>
                <option value=8>8</option>
                <option value=9>9</option>
                <option value=10>10</option>
                <option value=11>11</option>
                <option value=12>12</option>
            </select>
        </div>
        <div class="col-md-1 font-weight-bold my-auto">
            Días
        </div>
    </div>
    @component('components.field_error')
    @slot('grid_size')
        6
    @endslot
    @slot('error_row_id')
        error_row_custom_frequency
    @endslot
    @slot('error_ul_id')
        error_ul_custom_frequency
    @endslot
    @endcomponent
    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-2 font-weight-bold">
            Servicios de interés
        </div>
        <div class="col-md-5">
            Puede seleccionar más de 1 categoría si lo desea
        </div>
        <div class="col-md-3 ml-n5">
            <ul class="checkbox-dropdown">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><label class="checkbox"><input type="checkbox" name="interest_service">Apartamentos de mi interés</label></li>
                        <li><label class="checkbox"><input type="checkbox" name="interest_service">Asesoría profesional</label></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            12
        @endslot
        @slot('error_row_id')
            error_row_cities_empresa_pj
        @endslot
        @slot('error_ul_id')
            error_ul_cities_empresa_pj
        @endslot
    @endcomponent
    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-5 font-weight-bold">
            Medio(s) por los que le gustaría mantenerse informado
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-5 form-check">
            <input type="checkbox" class="form-check-input" id="checkbox-email-other-step4" name="news_mean" value="mail">
            <label class="form-check-label" for="portal-web">Correo electrónico según sus preferencias</label>
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control input-section2" id="email-other-step4">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-2"></div>
        <div class="col-md-5 form-check">
            <input type="checkbox" class="form-check-input" id="rrss-empresa-checkbox" name="news_mean" value="rrss">
            <label class="form-check-label" for="portal-web">Redes sociales de la empresa</label>
        </div>
        <div class="col-md-3 invisible" id="checkbox-dropdown-rrss">
            <div class="col-md-3">
                <ul class="checkbox-dropdown">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><label class="checkbox"><input type="checkbox">Facebook</label></li>
                            <li><label class="checkbox"><input type="checkbox">Twitter</label></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row mt-3 sms-other-step4">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <label class="form-check-label font-weight-bold" for="portal-web">Verifique o inserte el número por el que desea mantenerse informado</label>      
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-5 form-check">
            <input type="checkbox" class="form-check-input" id="sms-checkbox-step4" name="news_mean" value="sms">
            <label class="form-check-label" for="portal-web">Mensaje de texto</label>
        </div>
        <div class="col-md-5 sms-other-step4">
            <input type="text" class="form-control input-section2">
        </div>
    </div>

    <div class="row mt-3 medios-other-step4">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <label class="form-check-label font-weight-bold" for="portal-web">Especifique los medios por los que desea mantenerse informado</label>      
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-5 form-check">
            <input type="checkbox" class="form-check-input" id="checkbox-medios-other-step4" name="news_mean" value="other">
            <label class="form-check-label" for="portal-web">Otro(s)</label>
        </div>
        <div class="col-md-5 medios-other-step4">
            <input type="text" class="form-control input-section2">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6"></div>
        <div class="col-md-6 fb-account-other-step4">
            <label class="form-check-label font-weight-bold" for="portal-web">Introduzca dirección de correo de Facebook para contactarlo</label>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-5 form-check">
            <input type="checkbox" class="form-check-input" id="checkbox-fb-account-other-step4" name="news_mean" value="facebook">
            <label class="form-check-label" for="portal-web">Mensaje privado en mi cuenta de Facebook</label>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control input-section2 fb-account-other-step4">
        </div>
    </div>
</div>