@extends('templates.layout')    

@section('title','Index')

@section('content')
<section>
    <div class="container">
    
        <div class="row">
            
            @include('dwelling_section.search_section.search_bar')
            @include('dwelling_section.search_section.search_result')
            
        </div>


    </div>
@endsection