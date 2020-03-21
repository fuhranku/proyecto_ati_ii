@extends('templates.layout')    

@section('title','Index')

@section('content')
<section>
    <div style="margin-top:70px">
        <div class="container">
            <h1>¿Quiénes somos?</h1>
            <br>
            <p>Somos una empresa que permite la publicación, compra y venta de inmuebles con un avanzado sistema de búsqueda para la comodidad del usuario.</p>
            <br><br>
            <h1>¿Qué hacemos?</h1>
            <br>
            <p>Brindamos el mejor servicio de compra y venta de inmuebles online del mercado.</p>
            <br><br>
            <h1>¿Quiénes son nuestros clientes?</h1>
            <br>
            <p>Tanto personas naturales como empresas que requieran de nuestros servicios para comprar/vender casas o departamentos.</p>
            <br><br>
            <h1><a href="{{url('contact_us')}}">Página de contacto</a></h1>

        </div>
    </div>
@endsection