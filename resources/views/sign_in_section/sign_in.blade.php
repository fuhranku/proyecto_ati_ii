

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
<<<<<<< HEAD
        <form method="post" action="{{ route('main.sign_in') }}">
=======
        <form method="post" action="{{ action('SignInController@login') }}">
>>>>>>> FP-dev
            {{-- @component('components.general_error')
                @slot('error_id')
                    error-sign-in
                @endslot
            @endcomponent --}}
                {{-- Email --}}
            <div class="form-group " {{ $errors->has('email') ? 'style="color:red;"' : '' }}>
                <div class="row">
                    <div class="col-sm-4 modal-label">
                        <label for="email">Email</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="email"/>
                        {{-- {!! $errors->first('email', '<span class="help-block">:message</span>') !!} --}}
                    </div>
                </div>
                </div>
                {{-- Password --}}
                <div class="form-group " {{ $errors->has('password') ? 'style="color:red;"' : '' }}>
                    @csrf

                    <div class="row">
                        <div class="col-sm-4 modal-label">
                            <label for="password">Contraseña</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password"/>
                            {{-- {!! $errors->first('password', '<span class="help-block">:message</span>') !!} --}}
                        </div>
                    </div>
                </div>
                {{-- Buttons --}}
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
<script type="text/javascript">
    var forgot_post_url = "{{ url('/forgot')}}";
    var pass_post_url = "{{ url('/password')}}";
</script>