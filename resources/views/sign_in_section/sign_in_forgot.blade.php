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
        <form>
            <div class="form-group">
                <div class="row">
                    <div class="col">
                        <label for="Email">Ingresa tu correo electrónico, o usuario</label>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col">
                        <input type="email" class="form-control" name="email"/>
                        {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
            </div>
            <div class="button-group">
                <br>
                <button type="submit" class="btn modal-button">Aceptar</button>
                <button type="button" data-dismiss="modal" class="btn modal-button">Cancelar</button>
                <br>

            </div>
        </form>
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
    
        <form>
            <div class="form-group">
            <div class="row">
                <div class="col">
                    <label for="Id">Ingresa tu cédula de identidad, DNI, o pasaporte</label>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="id"/>
                    {!! $errors->first('id', '<span class="help-block">:message</span>') !!}
                </div>
            </div>
            </div>
            
            <div class="button-group">
                <br>
                <button type="submit"  class="btn modal-button">Aceptar</button>
                <button type="button"  data-dismiss="modal" class="btn modal-button">Cancelar</button>
                <br>

            </div>
        </form>
        
    </div>
    <!-- end recuperar con cédula -->
    <!-- recuperar con cédula -->
    <div id="forgot_phone" class="d-none">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br>
        @endif
    
        <form>
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
                <button type="button" id="button-phone" class="btn modal-button">Aceptar</button>
                <button type="button"  data-dismiss="modal" class="btn modal-button">Cancelar</button>
                <br>

            </div>
        </form>
        </div>
        
    </div>
    <!-- end recuperar con cédula -->
    <script src="{{ asset('js/forgot.js') }}"></script> 
@endslot

@endcomponent
