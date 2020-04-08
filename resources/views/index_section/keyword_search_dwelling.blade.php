{{-- BUSQUEDA POR PALABRA CLAVE --}}

<div class="row mt-3">
    <div class="col-md-3"></div>
    <div class="search-btn col-md-6 border border-info rounded cursor-pointer" onclick="displaySBK()">
        <i class="fas fa-caret-down d-inline"></i>
        <p class="font-weight-bold  d-inline">Búsqueda por palabra clave</p>
    </div>
    <div class="col-md-3"></div>
</div>

<form method="post" action="{{ action( 'IndexController@keyword_search') }}">
    @csrf
    <div class="row mt-3 d-none" id="search-key">

        <div class="col-md-12">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-5 pl-5 pr-0">
                    <input name="keyword_dwelling" class="form-control form-control-sm " type="text" placeholder="Introduzca país, estado o ciudad" >
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4" style="margin-top: -34px;">
                    <button type="submit" style="display: contents;">
                        <img style = "width:30px; margin-left: -45px;" src="{{url('images/search_icon.png')}}">
                    </button>
                </div>
            </div>
        </div>
        
        
    </div>
</form>