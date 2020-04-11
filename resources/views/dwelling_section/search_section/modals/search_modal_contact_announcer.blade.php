<div class="row h-100 d-none" id="dwell-contact-announcer-modal">

    <div class="col-sm-12 my-auto">
        <div class="w-fit-content mx-auto  bg-white modal-border" id='contact-announcer-main-container'>
        {{-- <div class="mx-auto  bg-white pb-3 modal-border" style='width:54%;'> --}}
            <div class="row text-center">
                <div class="col-sm-12">
                    <div class="bg-blue text-white font-weight-bold" style="border-bottom: 1px solid #000">
                        Contactar al vendedor o arrendador
                    </div>
                </div>
            </div>
            <div class="container pr-4 pl-4 pb-5 pt-3 position-relative">
                <img class="loading-image position-absolute d-none preloader1" src="{{url('/images/preloader1.svg')}}">
                <div class="dark-overlay d-none"></div>
                <div class="row">
                    <div class="col-md-12" id='contact-announcer-options-container'>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-sm-12 md-text text-red font-weight-bold text-center">
                                        Selecciona la opción de tu preferencia
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-sm-12 mt-2" id='contact-announcer-radio-btns-container'>
                                <div class="radio">
                                    <input type="radio" name="optradio" data-section-id=0>
                                    <label class='font-weight-bold text-blue md-text my-auto'>Enviar correo electrónico</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="optradio" data-section-id=1>
                                    <label class='font-weight-bold text-blue md-text my-auto'>Llamar por teléfono</label>                        </div>
                                <div class="radio">
                                    <input type="radio" name="optradio" data-section-id=2>
                                    <label class='font-weight-bold text-blue md-text my-auto'>Quiero que me llames</label>                        </div>
                                <div class="radio">
                                    <input type="radio" name="optradio" data-section-id=3>
                                    <label class='font-weight-bold text-blue md-text my-auto'>Enviar consulta</label>
                                </div>
                                <div class="radio">
                                    <input type="radio" name="optradio" data-section-id=4>
                                    <label class='font-weight-bold text-blue md-text my-auto'>Agendar visita</label>
                                </div>
                            </div>
                        </div>
                        <div class="row text-center">
                            <div class="col-sm-12 mt-2 pl-2 pr-2">
                                <a class="btn btn-yellow text-center close-btn-contact-announcer mt-2 md-text" style='padding: 0px 15px;' href="#">Cerrar</a>
                            </div>
                        </div>
                        <div class="container mt-4 sm-text d-none" id="contact-announcer-error-container">
                            <div class='row'>
                                <div class='col-sm-12'>
                                    <ul class="alert alert-danger" id='contact-announcer-error-ul'>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 pl-5 d-none" id='contact-announcer-windows-container'>
                        {{-- Enviar correo electrónico --}}
                        @include('dwelling_section.search_section.modals.contact_announcer_parts.send_email')
                        {{-- Llamar por teléfono --}}
                        @include('dwelling_section.search_section.modals.contact_announcer_parts.call_announcer')
                        {{-- Quiero que me llamen --}}
                        @include('dwelling_section.search_section.modals.contact_announcer_parts.want_to_be_called')
                        {{-- Enviar consulta --}}
                        @include('dwelling_section.search_section.modals.contact_announcer_parts.send_query_to_announcer')
                        {{-- Agendar visita --}}
                        @include('dwelling_section.search_section.modals.contact_announcer_parts.schedule_visit')
                        <input class="phone-contact-announcer w-100" name="mobile_dwelling" type="tel">
                        <input class="phone-contact-announcer w-100" name="landline_dwelling" type="tel">
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>