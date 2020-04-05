<header>
    <nav>
        {{-- First navbar ROW --}}
       @include('templates.user_config_navbar')
        <!-- Second navbar ROW -->
        @include('templates.app_navbar')
    </nav>

    @if (Session::has('info'))
        <div class="row siguenos-text">
            
            <div class="col-md-10">
                <p class="">
                    Síguenos o compártelo por:
                </p>
            </div>
            <div class="col-md-2 text align-top">
                <a href="#" class="fab fa-facebook-square my-auto"></a>
                <a href="#" class="fab fa-twitter-square my-auto"></a>
                <a href="#" class="fab fa-instagram-square my-auto"></a>
                <a href="#" class="far fa-envelope my-auto"></a>
            </div>
        </div>
    @endif
</header>