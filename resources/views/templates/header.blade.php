<header>
    <nav>
        {{-- First navbar ROW --}}
       @include('templates.user_config_navbar')
        <!-- Second navbar ROW -->
        @include('templates.app_navbar')
    </nav>

    @if (Session::has('info'))
        <div class="row siguenos-text pt-2 justify-content-end d-none">
            
            <div class="col-md-3 align-self-center">
                    Síguenos o compártelo por:
            </div>
            <div class="col-md-2 text align-top pl-0">
                <a class="header-icon" href="//facebook.com" target="_blank">
                    <i class="fab fa-facebook-square"></i>
                </a> 
                <a class="header-icon" href="//twitter.com" target="_blank">
                    <i class="fab fa-twitter color-twitter"></i>
                </a> 
                <a class="header-icon" href="//instagram.com" target="_blank">
                    <i class="fab fa-instagram" id="insta"></i>
                </a> 
                <a class="header-icon" href="//gmail.com" target="_blank">
                    <i class="far fa-envelope color-black"></i>
                </a> 
            </div>
        </div>
    @endif
</header>