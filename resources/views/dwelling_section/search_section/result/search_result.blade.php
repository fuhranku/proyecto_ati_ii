<!-- Search Result -->

<div class="col-md-9 mr-n5 d-none" style="margin-left:15px;" id="dwelling-search-result">
    {{-- Search result header --}}
    @include('dwelling_section.search_section.result.search_result_header')

    <!-- photo type search result-->
    <div class="row" id="dwelling-photo-mode">
        @for ($i = 0; $i < 4; $i++)
            @component('components.photo_display_type_search')
                @slot('index')
                    {{$i+1}}
                @endslot
                @slot('search_type')
                    {{$search_type}}
                @endslot
            @endcomponent
        @endfor 
    </div>


    {{-- List type search result --}}
    <div class="row d-none"  id="dwelling-list-mode">
        @for ($i = 0; $i < 4; $i++)
            @component('components.list_display_type_search')
                @slot('index')
                    {{$i+1}}
                @endslot
                @slot('search_type')
                    {{$search_type}}
                @endslot
            @endcomponent
        @endfor 
    </div>

</div>