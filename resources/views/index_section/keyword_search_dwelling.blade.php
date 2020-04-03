{{-- BUSQUEDA POR PALABRA CLAVE --}}

<div class="row mt-3">
    <div class="col-md-3"></div>
    <div class="search-btn col-md-6 border border-info rounded cursor-pointer" onclick="displaySBK()">
        <i class="fas fa-caret-down d-inline"></i>
        <p class="font-weight-bold  d-inline">Búsqueda por palabra clave</p>
    </div>
    <div class="col-md-3"></div>
</div>

<div class="row mt-3 d-none" id="search-key">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form class="form-inline active-cyan-4">
            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Introduzca país, estado o ciudad"
            aria-label="Search">
            <i class="fas fa-search" aria-hidden="true"></i>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>