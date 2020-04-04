@component('components.modal')
    @slot('modal_id')
    change_password
    @endslot
    @slot('title')
    Restablece tu contraseña
    @endslot
    @slot('content')
    {{-- <form method="post" action="{{ route('main.sign_in') }}"> --}}
        @component('components.field_error')
        @slot('grid_size')
            6
        @endslot
        @slot('error_row_id')
            error_row_change_pass
        @endslot
        @slot('error_ul_id')
            error_ul_change_pass
        @endslot
        @endcomponent

        {{-- Password --}}
        <div class="form-group " {{ $errors->has('password') ? 'style="color:red;"' : '' }}>
            @csrf

            <div class="row">
                <div class="col-sm-4 modal-label">
                    <label for="password">Contraseña</label>
                </div>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="newPassword"/>
                    {{-- {!! $errors->first('password', '<span class="help-block">:message</span>') !!} --}}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-4 modal-label">
                    <label for="password">Confirmar contraseña</label>
                </div>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="confPassword"/>
                    {{-- {!! $errors->first('password', '<span class="help-block">:message</span>') !!} --}}
                </div>
            </div>
        </div>
        {{-- Buttons --}}
        <div class="button-group text-center">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-yellow" id="pass-button">Confirmar contraseña</button>
                </div>
            </div>
            
        </div>
    {{-- </form> --}}
    @endslot
@endcomponent


@component('components.modal')
    @slot('modal_id')
        change_password_message
    @endslot
    @slot('title')
        Contraseña reestablecida
    @endslot
    @slot('content')
    <p>Seleccione la información que va a proporcionar</p>
    <form>
        <div class="form-group">
        <div class="row">
            <div class="col">
                <input type="radio" id="sign_in" name="pass_change" value="1">
                <label for="sign_in"> Iniciar sesión</label><br>
            </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
            <div class="col">
                <input type="radio" id="close_modal" name="pass_change" value="2">
                <label for="close_modal"> Seguir navegando en el portal</label><br>
            </div>
        </div>
        </div>
        <div class="form-group">
        <div class="row">
            <div class="col">
                <input type="radio" id="exit" name="pass_change" value="3">
                <label for="exit"> Salir</label><br>
            </div>
        </div>
        </div>
        <div class="button-group">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" onclick="optionRadioPass('pass_change')"  class="btn modal-button" >Aceptar</button>
                </div>
            </div>
            
            <!-- <a href="{{ route('main.sign_in') }}" class="btn btn-info btn-block" >{{__('words.back')}}</a> -->
        </div>
    </form>
    @endslot
@endcomponent
