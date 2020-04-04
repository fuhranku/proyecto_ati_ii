<!-- forgot -->
@component('components.modal')
    @slot('modal_id')
        forgot
    @endslot
    @slot('title')
        Recuperar contraseña, o mis datos
    @endslot
    @slot('content')
    <p>Seleccione la información que va a proporcionar</p>
    <form>
        <div class="form-group">
        <div class="row">
            <div class="col">
                <input type="radio" id="id" name="forgot" value="id">
                <label for="id"> Cédula de identidad, DNI o pasaporte</label><br>
            </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
            <div class="col">
                <input type="radio" id="email" name="forgot" value="email">
                <label for="email"> Correo electrónico o usuario</label><br>
            </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
            <div class="col">
                <input type="radio" id="phone" name="forgot" value="phone">
                <label for="phone"> Teléfono celular o móvil</label><br>
            </div>
        </div>
        </div>
        <div class="button-group">
            <br>
            <button type="button" data-toggle="modal" data-target="#forgot_window" onclick="optionRadio('forgot')"  data-dismiss="modal" class="btn modal-button" >Aceptar</button>
            <button type="button" data-dismiss="modal" class="btn modal-button">Cancelar</button>
            <br>
            <!-- <a href="{{ route('main.sign_in') }}" class="btn btn-info btn-block" >{{__('words.back')}}</a> -->
        </div>
    </form>
    @endslot
@endcomponent

<!-- end forgot -->

@component('components.modal')
@slot('modal_id')
    forgot_window
@endslot
@slot('title')
    Recuperar contraseña, o mis datos
@endslot
@slot('content')
    <!-- recuperar email -->
    <div id="forgot_email" class="d-none">
        @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
        @slot('error_row_id')
            error_row_email_forgot
        @endslot
        @slot('error_ul_id')
            error_ul_email_forgot
        @endslot
        @endcomponent
        
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="email_forgot">Ingresa tu correo electrónico, o usuario</label>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col">
                        <input id="input-email" type="email" class="form-control" name="email_forgot"/>
                        {{-- {!! $errors->first('email_forgot', '<span class="help-block">:message</span>') !!} --}}
                    </div>
                </div>
            </div>
            <div class="button-group">
                <br>
                <button type="button" id="button-email" data-toggle="modal" class="btn modal-button">Aceptar</button>
                <button type="button" data-dismiss="modal" class="btn modal-button">Cancelar</button>
                <br>

            </div>
        
    </div>
    <!-- end recuperar email -->
    <!-- recuperar con cédula -->
    <div id="forgot_id" class="d-none">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br>
        @endif
    
        
            <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="Id">Ingresa tu cédula de identidad, DNI, o pasaporte</label>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <input id="input-id" type="text" class="form-control" name="id"/>
                    {!! $errors->first('id', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
            </div>
            
            <div class="button-group">
                <br>
                <button type="button" id="button-id" data-toggle="modal" class="btn modal-button">Aceptar</button>
                <button type="button"  data-dismiss="modal" class="btn modal-button">Cancelar</button>
                <br>

            </div>
        
        
    </div>
    <!-- end recuperar con cédula -->
    <!-- recuperar con cédula -->
    <div id="forgot_phone" class="d-none">
        @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
        @slot('error_row_id')
            error_row_phone
        @endslot
        @slot('error_ul_id')
            error_ul_phone
        @endslot
        @endcomponent
        
            <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="phone">Ingresa tu número de teléfono móvil</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    {{-- <input type="text" class="form-control" name="phone"/> --}}
                    
                    <div class="row mt-3" id='input-mobile-forgot'>
                        <div class="col-sm-3">
                            <input name="mobile_forgot" type="tel" id='mobile-forgot'>
                        </div>
                    </div>
                    {!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
            </div>
            
            <div class="button-group">
                <br> 
                {{-- data-target="#forgot_confirm" --}}
                <button type="button" id="button-phone" data-toggle="modal" class="btn modal-button">Aceptar</button>
                <button type="button"  data-dismiss="modal" class="btn modal-button">Cancelar</button>
                <br>

            </div>
        
        </div>
        
    </div>
    <!-- end recuperar con cédula -->
@endslot

@endcomponent


@if (Session::has('infoUser'))
@component('components.modal')
    @slot('modal_id')
        forgot_confirm
    @endslot
    @slot('title')
        Recuperar contraseña, o mis datos
    @endslot
    @slot('content')
    <p>Acabamos de enviar tu usuario, y un link para restablecer tu contraseña, al correo:
    </p>    
            
    <a href="mailto:{{Session::get('infoUser')['email']}}">{{Session::get('infoUser')['email']}}</a>
    {{-- <p class="text-danger">
        y al número de teléfono: 0414-xxx-xx-xx
    </p> --}}
    <p class="text-primary">
        Si este no es su correo o teléfono, debe modificar su correo electrónico, o teléfono, en la cuenta que posee con la empresa, y solicitar nuevamente el envío de dicha información.
    </p>    
    
    <div class="button-group">
        <br>
        {{-- <a href="{{  action('SignInController@sendMail') }}"> --}}
            <button type="button" id="button-phone" data-toggle="modal" class="btn modal-button" onclick="location.href='{{  action('SignInController@sendMail') }}'">
                Aceptar
            </button>
            {{-- </a> --}}
            <button type="button"  data-dismiss="modal" class="btn modal-button">Cancelar</button>
            <br>
        </div>
    @endslot
@endcomponent
@endif