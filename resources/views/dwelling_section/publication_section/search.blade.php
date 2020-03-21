@extends('templates.layout')    

@section('title','Index')

@section('content')
<section id="search-section">
    <div class="container">    
        <div class="row">
            @include('dwelling_section.publication_section.search_modal_location')
            @include('dwelling_section.publication_section.search_modal_service')
            @include('dwelling_section.publication_section.search_modal_comfort')
            @include('dwelling_section.publication_section.search_modal_no_images')
            @include('dwelling_section.publication_section.search_bar')
            @include('dwelling_section.publication_section.search_result')
        </div>

        <script>
            var quickSearch_post_url_publication = "{{ url('/dwelling/publication/quick_search')}}";
            var detailedSearch_post_url_publication = "{{ url('/dwelling/publication/detailed_search')}}";
            var disable_post_url = "{{ url('/dwelling/disable_dwelling')}}";
            var enable_post_url = "{{ url('/dwelling/enable_dwelling')}}";
            var delete_post_url = "{{ url('/dwelling/delete_dwelling')}}";

            var countries = @json($countries);
            var states = @json($states);
            var cities = @json($cities);

            var userID = {{Session::get('info')->id}};
        </script>


    </div>
@endsection