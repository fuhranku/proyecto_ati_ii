 {{-- First navbar ROW --}}
 <div class="navbar navbar-expand-md">
    <!-- One of the primary actions on mobile is to call a business - This displays a phone button on mobile only -->
    <div class="navbar-toggler-right">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" >
                    <span class="navbar-toggler-icon"></span>
                </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav bg-white ml-auto h-100 mr-2 mb-n1">
            
            @if (Session::has('info') && Session::has('info_specific'))
                <li class="nav-item mr-4">
                <div class='row'>
                    <div class="col-md-3">
                        <img src="{{asset('images/avatar_default.png')}}" alt="avatar image" class="avatar-image">
                    </div>
                    <div class='col-md-9 font-weight-bold ml-0 '>
                        <div class="row">
                            <span class="log-in-text" id='header_user_name'>
                                @if (Session::get('info')->person_type == 'nat')
                                    {{ Session::get('info_specific')->name }} {{ Session::get('info_specific')->last_name }}
                                @else
                                    {{ Session::get('info_specific')->name_rep }} {{ Session::get('info_specific')->last_name_rep }} 
                                    {{-- {{ Session::get('info_specific')->name_comp }} --}}
                                @endif
                            </span>
                        </div>
                        <div class="row">
                            <span class="log-in-text" id='header_user_mail'>
                                {{ Session::get('info')->email }}
                                @if (Session::get('info')->person_type == 'nat')
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                    
                </li>
            @endif
            <div class="user-menu nav navbar-nav">
            @if (!Session::has('info'))
                <li class="nav-item">
                    <a class="nav-link mx-3 btn-yellow ry-corners mr-2 mt-1 pr-3 pl-3 sign_in_button">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mx-3 btn-yellow ry-corners mt-1 pr-3 pl-3 ml-n2" href="{{ url('sign_up') }}">Registrarse</a>
                </li>
            @else
                <li class="nav-item dropdown" id='nav-item-dropdown'>
                    <a class="nav-link mx-3 dropdown-toggle btn-yellow ry-corners ml-2 mr-2 mt-1 pr-5 pl-5" href="#" id="navbarUser" role="button" data-toggle="dropdown">Usuario</a>
                    <div class="dropdown-menu mt-n1 ml-3 user-dropdown ml-2 pt-0 pb-0" aria-labelledby="navbarUser">
                        <a class="dropdown-item user-option font-weight-bold p-2" href="{{ url('user_data') }}"> Datos de usuario </a>
                        <a class="dropdown-item user-option font-weight-bold p-2" href="{{  action('SignInController@logout') }}"> Cerrar sesión </a>
                    </div>
                </li>
            @endif
            </div>
        </ul>
    </div>
</div>