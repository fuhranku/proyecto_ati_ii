

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

        @include('sign_in_section.sign_in_forgot')

        
    </div>
