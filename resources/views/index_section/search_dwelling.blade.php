<!-- Opción buscar vivienda -->
<div class="row d-none" id="search-dwelling">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10 pl-5">
                <p class="text-danger d-inline">*</p>
                <p class="text-blue d-inline">1- Selecciona la forma en la que deseas buscar la vivienda</p>
            </div>
        </div>

        @include('index_section.keyword_search_dwelling')

        @include('index_section.quick_search_dwelling')

        @include('index_section.detailed_search_dwelling')

    </div>
</div>