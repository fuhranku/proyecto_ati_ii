@extends('templates.layout')    

@section('title','Index')

@section('content')
<section>
    <div class="container">
    
        <div class="row">
            
            @include('dwelling_section.search_section.search_bar')
            @include('dwelling_section.search_section.search_result')
            
        </div>

        <script>
            var quickSearch_post_url = "{{ url('/dwelling/quick_search')}}";
            var detailedSearch_post_url = "{{ url('/dwelling/detailed_search')}}";
        </script>


    </div>
@endsection