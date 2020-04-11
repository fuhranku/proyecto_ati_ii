@extends('templates.layout')

@if($search_type == 0)
    @section('title','Ver publicaciones')
@else
    @section('title','Buscar vivienda')
@endif

@section('content')
<section id="search-section">
    <div class="container">
        <div class="row">
            {{-- Modals --}}
            @include('dwelling_section.search_section.modals.contact_announcer_parts.success_modal')
            @include('dwelling_section.search_section.modals.search_modal_media')
            @include('dwelling_section.search_section.modals.search_modal_location')
            @include('dwelling_section.search_section.modals.search_modal_service')
            @include('dwelling_section.search_section.modals.search_modal_details')
            @include('dwelling_section.search_section.modals.search_modal_comfort')
            @include('dwelling_section.search_section.modals.search_modal_no_images')
            @include('dwelling_section.search_section.modals.search_media_carousel')
            @include('dwelling_section.search_section.modals.search_modal_contact_announcer')
            {{-- Search bar --}}
            @include('dwelling_section.search_section.search_bar.search_bar')
            {{-- Result --}}
            @include('dwelling_section.search_section.result.search_result')
        </div>

        <script>
            var quickSearch_post_url_publication = "{{ url('/dwelling/publication/quick_search')}}";
            var detailedSearch_post_url_publication = "{{ url('/dwelling/publication/detailed_search')}}";
            var quickSearch_post_url = "{{ url('/dwelling/quick_search') }}";
            var detailedSearch_post_url = "{{ url('/dwelling/detailed_search') }}";
            var keywordSearch_post_url = "{{ url('/dwelling/keyword_search') }}"
            var disable_post_url = "{{ url('/dwelling/disable_dwelling')}}";
            var enable_post_url = "{{ url('/dwelling/enable_dwelling')}}";
            var delete_post_url = "{{ url('/dwelling/delete_dwelling')}}";
            var contact_announcer_url = "{{  action( 'Dwelling\DwellingController@contact_announcer') }}";
            var retrieve_dwelling_announcer = "{{ action( 'Dwelling\DwellingController@retrieve_user_data') }}";
            var countries = @json($countries);
            var states = @json($states);
            var cities = @json($cities);
            var userID = {{ Session::has('info') ? Session::get('info')->id : -1 }};
            var userInfo = {!! Session::has('info') ?  json_encode(Session::get('info')) : -1 !!};
            var userInfoSpecific = {!! Session::has('info_specific') ?  json_encode(Session::get('info_specific')) : -1 !!};
            user_info = Object.assign({},userInfo,userInfoSpecific);
            console.log(user_info);
            var session_search_query = {!! Session::has('session_query') ? Session::get('session_query') : -1 !!};

            var search_type = @json($search_type);

        </script>
        <script src="{{ asset('js/dwelling/dwelling_search.js') }}"></script>
        @if ($search_type == 0)
            <script src="{{ asset('js/dwelling/see_publications_search_methods.js') }}"></script>
        @else
            <script src="{{ asset('js/dwelling/search_methods.js') }}"></script>
        @endif

    </div>
@endsection