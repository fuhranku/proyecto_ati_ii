@extends('templates.layout') 

@section('title','Contáctenos')

@section('content')
<section>

    <div class="container">
        <div class="row">
            <div class="col">
                <p class="font-weight-bold m-0">Teléfonos</p>
                <p class="m-0 ml-2">+58 (0212) 362-82-68</p>
                <p class="ml-2">+58 (0414) 389-74-44</p>

                <p class="font-weight-bold m-0">Atención al público</p>
                <p class="m-0 ml-2"><strong>Lunes y viernes:</strong> de 8am a 12pm</p>
                <p class="ml-2"><strong>Sábados y domingos:</strong> de 8am a 12pm</p>

                <p class="font-weight-bold m-0">Correo electrónico</p>
                <p class="m-0 ml-2">Envíanos tus preguntas o comentarios a</p>
                <p class="ml-2">nirvana01@gmail.com</p>

                <p class="font-weight-bold m-0">Enlaces de interés</p>
                <ul class="list-unstyled ml-2">
                    <li><a href="/">Preguntas de interés</a></li>
                    <li><a href="/">Términos de servicio</a></li>
                </ul>

                <div class="row">

                    <div class="col-md-3">
                        <p class="font-weight-bold">Síguenos en</p>
                    </div>

                    <div class="col-md-4" style="background: rgba(0,176,240,.2); ">
                        
                        <div class='row'>
                            <div class="col-md-4 social-btn">
                                <a href="#" class="fab fa-facebook-f"></a>
                            </div>
                            <p class="my-auto">Facebook</p>
                        </div>

                        <div class='row'>
                            <div class="col-md-4 social-btn">
                                <a href="#" class="fab fa-twitter"></a>
                            </div>
                            <p class="my-auto">Twitter</p>
                        </div>

                        <div class='row'>
                            <div class="col-md-4 social-btn">
                                <i href="#" class="fab  fa-circle fa-youtube"></i>
                            </div>
                            <p class="my-auto">Youtube</p>
                        </div>
                        <div class='row'>
                            <div class="col-md-4 social-btn">
                                <a href="#" class="fab fa-instagram"></a>
                            </div>
                            <p class="my-auto">Instagram</p>
                        </div>
                        
                        <div class='row'>
                            <div class="col-md-4 social-btn">
                                <a href="#" class="fab fa-linkedin"></a>
                            </div>
                            <p class="my-auto">Linkedin</p>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col">

                <div>
                    <p class="font-weight-bold">Preguntas Frecuentes</p>
                </div>

                <div class="border border-dark p-3">
                    <p class="text-center font-weight-bold">Formulario de contacto</p>
                    
                    {{-- <form> --}}
                        {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif --}}
                    <div class="form-group">
                        @component('components.field_error')
                        @slot('grid_size')
                            6
                        @endslot
                        @slot('error_row_id')
                            error_row_email_contact
                        @endslot
                        @slot('error_ul_id')
                            error_ul_email_contact
                        @endslot
                        @endcomponent
                        <label for="email_contact">Para</label>
                        <input type="email" class="form-control" name="email_contact" aria-describedby="emailHelp" placeholder="Correo">
                    </div>
                    <div class="form-group">
                        @component('components.field_error')
                        @slot('grid_size')
                            6
                        @endslot
                        @slot('error_row_id')
                            error_row_name_contact
                        @endslot
                        @slot('error_ul_id')
                            error_ul_name_contact
                        @endslot
                        @endcomponent
                        <label for="name_contact">Nombre y Apellido</label>
                        <input type="text" class="form-control" name="name_contact" placeholder="Nombre y apellido">
                    </div>

                    <div class="form-group">
                        @component('components.field_error')
                        @slot('grid_size')
                            6
                        @endslot
                        @slot('error_row_id')
                            error_row_message_contact
                        @endslot
                        @slot('error_ul_id')
                            error_ul_message_contact
                        @endslot
                        @endcomponent
                        <textarea class="form-control rounded-0" id="message_contact" name="message_contact" rows="10" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="button" id="contact_us_button" class="btn btn-primary">Enviar</button>
                    </div>
                    {{-- </form> --}}
                </div>

            </div>
            
        </div>
    </div>
    <script type="text/javascript">
        var contact_post_url="{{ url('/send-mail-contact')}}";
    </script>
    @component('components.modal')
        @slot('modal_id')
            contact_confirm
        @endslot
        @slot('title')
            Contáctenos
        @endslot
        @slot('content')
        
        <p>Se envió su mensaje</p>
        <div class="button-group">
            <br>
                <button type="button" id="button-phone" data-toggle="modal" data-dismiss="modal" class="btn modal-button">
                    Aceptar
                </button>
                <br>
            </div>
        @endslot
    @endcomponent

@endsection