@extends('templates.layout')    

@section('title','Index')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <ul class="list-group">
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Continente:</p>
                    <p class="d-inline" id="continent_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">País:</p>
                    <p class="d-inline" id="country_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Estado:</p>
                    <p class="d-inline" id="state_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Ciudad:</p>
                    <p class="d-inline" id="city_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Habilitada:</p>
                    <p class="d-inline" id="enable_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Vivienda en: </p>
                    <p class="d-inline" id="status_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Tipo de vivienda:</p>
                    <p class="d-inline" id="property_type_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Habitaciones:</p>
                    <p class="d-inline" id="rooms_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Estacionamientos:</p>
                    <p class="d-inline" id="parking_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Comodidades:</p>
                    <p class="d-inline" id="comforts_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Servicios:</p>
                    <p class="d-inline" id="services_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Detalles extra:</p>
                    <p class="d-inline" id="details_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Detalles de transporte:</p>
                    <p class="d-inline" id="trasport_details_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Detalles de ubicación:</p>
                    <p class="d-inline" id="location_details_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Precio:</p>
                    <p class="d-inline" id="price_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Moneda:</p>
                    <p class="d-inline" id="currency_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Nombre de contacto:</p>
                    <p class="d-inline" id="contact_name_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Apellido de contacto:</p>
                    <p class="d-inline" id="contact_lastname_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Email de contacto:</p>
                    <p class="d-inline" id="contact_email_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Número de contacto:</p>
                    <p class="d-inline" id="contact_number_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Número de telefono fijo:</p>
                    <p class="d-inline" id="contact_landline_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Extensión número de teléfono fijo:</p>
                    <p class="d-inline" id="contact_ext_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Dias de contacto:</p>
                    <p class="d-inline" id="contact_days_show_details"></p>
                </li>
                <li class="list-group-item">
                    <p class="font-weight-bold text-underline d-inline">Hora de contacto:</p>
                    <p class="d-inline" id="contact_hours_show_details"></p>
                </li>
            </ul>
        </div>
    </div>

    <script>
        var dwelling_details = @json($dwelling->dwellings);
        var comfort_details = @json($dwelling->comforts);
        var services_details = @json($dwelling->services);
    </script>

    <script src="{{ asset('js/dwelling/dwelling_details.js') }}"></script>

@endsection