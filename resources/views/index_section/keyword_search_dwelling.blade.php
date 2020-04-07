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
        <div class="col-md-3"></div>
        <div class="col-md-5 pl-5">
            <input name="keyword_dwelling" class="form-control form-control-sm " type="text" placeholder="Introduzca país, estado o ciudad" >
        </div>
        <div class="col-md-1 p-0">
            <button type="submit" style="display: contents;">
                <i class="fas fa-search"></i>
            </button>
        </div>
        <div class="col-md-3"></div>
    </div>
</form>