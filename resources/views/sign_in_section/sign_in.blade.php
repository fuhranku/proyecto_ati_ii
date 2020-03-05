

<section>

    <div style="margin-top:70px">
        <!-- sign in -->
        @component('components.modal')
            @slot('modal_id')
                sign_in
            @endslot
            @slot('title')
                Iniciar sesión
            @endslot
            @slot('content')
            <form method="post" action="{{ route('main.sign_in') }}">
                <div class="form-group">
                <div class="row">
                    <div class="col-sm-4 modal-label">
                        <label for="Email">Email</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="Email"/>
                        {!! $errors->first('Email', '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                </div>
                <div class="form-group">
                    @csrf

                    <div class="row">
                        <div class="col-sm-4 modal-label">
                            <label for="Password">Password</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="Password"/>
                            {!! $errors->first('Password', '<span class="help-block">:message</span>') !!}
                        </div>
                    </div>
                </div>
                <div class="button-group text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-yellow">Iniciar sesión</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a class="modal-forgot mt-2" id="modal-forgot" data-toggle="modal" data-target="#forgot">Olvidé mi contraseña, o mis datos</a>
                        </div>
                    </div>
                    <!-- <a href="{{ route('main.sign_in') }}" class="btn btn-info btn-block" >{{__('words.back')}}</a> -->

                </div>
            </form>
            @endslot
        @endcomponent
        <!-- sign in end -->

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
        <div class="modal fade" id="forgot_window">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Recuperar contraseña, o mis datos</h4>
                        <button type="button"  class="close" data-dismiss="modal">
                            <span>-</span>
                        </button>
                        <button type="button" class="icon" data-dismiss="modal">
                            <span>&#9633;</span>
                        </button>
                        <button type="button"   class="close" data-dismiss="modal">
                            <span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
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
                                            <input type="text" class="form-control" name="Email"/>
                                            {!! $errors->first('Email', '<span class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <br>
                                    <button type="submit"   class="btn modal-button">Aceptar</button>
                                    <button type="button"  data-dismiss="modal" class="btn modal-button">Cancelar</button>
                                    <br>
    
                                </div>
                            </form>
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
                                        <input type="text" class="form-control" name="Id"/>
                                        {!! $errors->first('Id', '<span class="help-block">:message</span>') !!}
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
                                        <label for="Phone">Ingresa tu número de teléfono móvil</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" name="Phone"/>
                                        {!! $errors->first('Phone', '<span class="help-block">:message</span>') !!}
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
                            
                        </div>
                        <!-- end recuperar con cédula -->
                    </div>
                    <!-- <div class="modal-footer">
                    </div> -->
                </div>
            </div>
        </div>
    </div>
