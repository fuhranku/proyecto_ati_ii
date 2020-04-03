@extends('templates.layout')

@section('title','Index')

@section('content')
<section id="search-section">
    <div class="container">
        <div class="row">
            @include('dwelling_section.search_section.search_modal_location')
            @include('dwelling_section.search_section.search_modal_service')
            @include('dwelling_section.search_section.search_details')
            @include('dwelling_section.search_section.search_modal_comfort')
            @include('dwelling_section.search_section.search_modal_no_images')
            @include('dwelling_section.search_section.search_bar')
            @include('dwelling_section.search_section.search_result')
        </div>

        <script>
            var quickSearch_post_url = "{{ url('/dwelling/quick_search')}}";
            var baseURL = "{{ url('')}}";
            var detailedSearch_post_url = "{{ url('/dwelling/detailed_search')}}";
            var disable_post_url = "{{ url('/dwelling/disable_dwelling')}}";
            var enable_post_url = "{{ url('/dwelling/enable_dwelling')}}";
            var delete_post_url = "{{ url('/dwelling/delete_dwelling')}}";

            var countries = @json($countries);
            var states = @json($states);
            var cities = @json($cities);

            var userID = {{ Session::has('info') ? Session::get('info')->id : -1}};

            var quick_search_query = {{ Session::has('quick_query') ? Session::get('quick_query') : -1}};

            console.log("GOOOOOOOOOOOOOL");
            console.log(quick_search_query);
        </script>


    </div>
@endsection