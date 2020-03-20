<div class="container {{!empty($info->days_freq) && !empty($info->interest_services) ? '' : 'd-none'}}" id='step2_other_menu'>
    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-2 font-weight-bold">
            Frecuencia
        </div>
        <div class="col-md-2">
            <div class="input-group" style="width: max-content; max-width: 120px;">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[4]">
                        <span class="fas fa-minus"></span>
                    </button>
                </span>
                <input type="text" name="quant[4]" id="custom_month_freq" class="form-control input-number p-2" value="{{!empty($info->days_freq) ? intval($info->days_freq / 30) : 0}}" min="0" max="12">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[4]">
                        <span class="fas fa-plus"></span>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-md-1 font-weight-bold my-auto ml-n4">
            Meses
        </div>
        <div class="col-md-2">
            <div class="input-group" style="width: max-content; max-width: 120px;">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[5]">
                        <span class="fas fa-minus"></span>
                    </button>
                </span>
                <input type="text" name="quant[5]" id="custom_days_freq" class="form-control input-number p-2" 
                value="{{!empty($info->days_freq) ? ($info->days_freq - (30 * intval($info->days_freq / 30))): 0}}" min="0" max="31">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[5]">
                        <span class="fas fa-plus"></span>
                    </button>
                </span>
            </div>
        </div>
        <div class="col-md-1 font-weight-bold my-auto  ml-n4">
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
                        <li><label class="checkbox">
                            <input type="checkbox" name="interest_service" value='apts' 
                            {{!empty($info->interest_services) && in_array('apts', $info->interest_services) ? 'checked' : ''}}>Apartamentos de mi interés</label>
                        </li>
                        <li><label class="checkbox">
                            <input type="checkbox" name="interest_service" value='asesoria'
                            {{!empty($info->interest_services) && in_array('asesotia', $info->interest_services) ? 'checked' : ''}}>Asesoría profesional</label>
                        </li>
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
            error_row_interest_services
        @endslot
        @slot('error_ul_id')
            error_ul_interest_services
        @endslot
    @endcomponent
    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-5 font-weight-bold">
            Medio(s) por los que le gustaría mantenerse informado
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
        @slot('error_row_id')
            error_row_news_means
        @endslot
        @slot('error_ul_id')
            error_ul_news_means
        @endslot
    @endcomponent
    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-5 form-check">
            <input type="checkbox" class="form-check-input" id="checkbox-email-other-step4" name="news_mean" value="mail" 
            {{ !empty($info->news_means['mail']) ? 'checked' : ''}}>
            <label class="form-check-label" for="portal-web">Correo electrónico según sus preferencias</label>
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control input-section2" id="email-other-step4" placeholder="Ingrese correo" name='mail_input' 
            value="{{ !empty($info->news_means['mail']) ? $info->news_means['mail'] : ''}}">
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
        @slot('error_row_id')
            error_row_news_means.mail 
        @endslot
        @slot('error_ul_id')
            error_ul_news_means.mail
        @endslot
    @endcomponent
    <div class="row mt-4">
        <div class="col-md-2"></div>
        <div class="col-md-5 form-check">
            <input type="checkbox" class="form-check-input" id="rrss-empresa-checkbox" name="news_mean" value="rrss" 
            {{ !empty($info->news_means['rrss']) ? 'checked' : ''}}>
            <label class="form-check-label" for="portal-web">Redes sociales de la empresa</label>
        </div>
        <div class="col-md-3 {{ !empty($info->news_means['rrss']) ? '' : 'invisible'}}" id="checkbox-dropdown-rrss">
            <div class="col-md-3">
                <ul class="checkbox-dropdown">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @foreach($socialMedias as $socialMedia)
                            <li><label class="checkbox"><input type="checkbox" value="{{$socialMedia->id}}" name="rrss_input"
                                {{ !empty($info->news_mean->rrss) && in_array($socialMedia->id, $info->news_mean->rrss) ? 'selected' : '' }}>
                                {{$socialMedia->name}}</label></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
        @slot('error_row_id')
            error_row_news_means.rrss 
        @endslot
        @slot('error_ul_id')
            error_ul_news_means.rrss
        @endslot
    @endcomponent
    <div class="row mt-3 sms-other-step4">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <label class="form-check-label font-weight-bold" for="portal-web">Verifique o inserte el número por el que desea mantenerse informado</label>      
        </div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-5 form-check">
            <input type="checkbox" class="form-check-input" id="sms-checkbox-step4" name="news_mean" value="sms"
            {{ !empty($info->news_means['phone']) ? 'checked' : ''}}>
            <label class="form-check-label" for="portal-web">Mensaje de texto</label>
        </div>
        <div class="col-md-5 sms-other-step4">
            <input class="phone-step0 form-control" name="phone_step4" type="tel" id='phone-step4' 
            value="{{ !empty($info->news_means['phone']) ? $info->news_means['phone'] : ''}}">
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
        @slot('error_row_id')
            error_row_phone_step4
        @endslot
        @slot('error_ul_id')
            error_ul_phone_step4
        @endslot
    @endcomponent
    <div class="row mt-3 medios-other-step4">
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <label class="form-check-label font-weight-bold" for="portal-web">Especifique los medios por los que desea mantenerse informado</label>      
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-5 form-check">
            <input type="checkbox" class="form-check-input" id="checkbox-medios-other-step4" name="news_mean" value="other" 
            {{ !empty($info->news_means['other']) ? 'checked' : ''}}>
            <label class="form-check-label" for="portal-web">Otro(s)</label>
        </div>
        <div class="col-md-5 medios-other-step4">
            <input type="text" class="form-control input-section2" placeholder="Indique preferencia" name='other_input' 
            value="{{ !empty($info->news_means['other']) ? $info->news_means['other'] : ''}}">
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
        @slot('error_row_id')
            error_row_news_means.other 
        @endslot
        @slot('error_ul_id')
            error_ul_news_means.other
        @endslot
    @endcomponent
    <div class="row mt-3">
        <div class="col-md-6"></div>
        <div class="col-md-6 fb-account-other-step4">
            <label class="form-check-label font-weight-bold" for="portal-web">Introduzca dirección de correo de Facebook para contactarlo</label>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-2"></div>
        <div class="col-md-5 form-check">
            <input type="checkbox" class="form-check-input" id="checkbox-fb-account-other-step4" name="news_mean" value="facebook_acc"
            {{ !empty($info->news_means['facebook_acc']) ? 'checked' : ''}}>
            <label class="form-check-label" for="portal-web">Mensaje privado en mi cuenta de Facebook</label>
        </div>
        <div class="col-md-5">
            <input type="text" class="form-control input-section2 fb-account-other-step4" name='facebook_acc_input' placeholder="Correo de Facebook"
            value="{{ !empty($info->news_means['facebook_acc']) ? $info->news_means['facebook_acc'] : ''}}">
        </div>
    </div>
    @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
        @slot('error_row_id')
            error_row_news_means.facebook_acc 
        @endslot
        @slot('error_ul_id')
            error_ul_news_means.facebook_acc
        @endslot
    @endcomponent
</div>