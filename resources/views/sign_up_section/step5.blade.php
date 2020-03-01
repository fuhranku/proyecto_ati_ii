<section class="d-none" id="step-5">
    <form id='form-step-5'>
        <div class="row mt-3">
            <div class="col-md-1"></div>
            <div class="col-md-3 font-weight-bold my-auto">
                Su código de cliente es:
            </div>
            <div class="col-md-3 ml-n5 my-auto">
               <h1 id='user_unique_id'>{{$users_count}}</h1> 
            </div>
            <div class="col-md-5 border border-blue">
                Es importante que usted <span class="text-danger font-weight-bold">FORMALICE  su pago para poder
                publicar su vivienda,</span> mediante su PAGO.
             </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="text-center">
                    <span class="bg-blue text-white font-weight-bold pt-2 pb-2 pl-3 pr-3">
                        Datos a utilizar para facilitar las notificaciones de pago
                    </span>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                Queremos ayudarte, facilitando el pago de la publicación de tu apartamento o casa , y para lo cual, te pedimos que proporciones los
                datos que consideras utilizar, para realizar tus transferencias o depósitos, especificados a continuación
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-sm-4 bg-blue text-white font-weight-bold ml-3">
                        <label class="pt-2 pb-2 pl-3 pr-3">
                             Banco Origen
                        </label>
                    </div>
                    <div class="col-sm-7 ml-n-3 my-auto">
                        <input type="text" class="form-control" placeholder="Banco desde el que realiza la operación" name='banco_origen'>
                    </div>
                </div>
                @component('components.field_error')
                    @slot('grid_size')
                        12
                    @endslot
                    @slot('error_row_id')
                        error_row_banco_origen
                    @endslot
                    @slot('error_ul_id')
                        error_ul_banco_origen
                    @endslot
                @endcomponent
                <div class="row mt-2">
                    <div class="col-sm-4 bg-blue text-white font-weight-bold ml-3">
                        <label class="pt-2 pb-2 pl-3 pr-3">
                            País donde reside la cuenta del banco origen
                        </label>
                    </div>
                    <div class="col-sm-7 ml-n-3 my-auto">
                        <select class="form-control" id="country_facturacion">
                            <option value='' label="Seleccione su país" disabled selected value></option>
                            @foreach($countries as $country)
                            <option value={{$country->id}}>{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @component('components.field_error')
                    @slot('grid_size')
                        12
                    @endslot
                    @slot('error_row_id')
                        error_row_country_facturacion
                    @endslot
                    @slot('error_ul_id')
                        error_ul_country_facturacion
                    @endslot
                @endcomponent
                <div class="row">
                    <div class="col-md-12 m-3 border border-blue p-3">
                        <div class="row font-weight-bold text-danger ml-1">
                            Sugerencia para realizar sus pagos
                        </div>
                        <div class="row ml-1">
                            Se recomienda que inicie sesión en el portal Web de la empresa, para que los
                            datos que ha proporcionado, puedan ser utilizados, para facilitarle, el proceso
                            de notificación de pago de su publicación. <br>
                            De lo contrario, deberá llenar la información solicitada, en el portal Web de la
                            empresa, y en el portal de notificación de pagos.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class='row'> 
                    <div class="col-sm-12">
                        <span class="bg-blue text-white font-weight-bold pt-2 pb-2 pl-3 pr-5">
                            Banco destino
                        </span>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 my-auto">
                        Seleccione el banco donde depositó o transfirió los fondos
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 my-auto">
                        <input type="text" class="form-control" placeholder="Banesco Panamá - Cuenta nro: 201800948693" name="banco_destino">
                    </div>
                </div>
                @component('components.field_error')
                    @slot('grid_size')
                        12
                    @endslot
                    @slot('error_row_id')
                        error_row_banco_destino
                    @endslot
                    @slot('error_ul_id')
                        error_ul_banco_destino
                    @endslot
                @endcomponent
                <div class="row ml-3">
                    <div class="col-md-12 m-3 border border-blue p-3">
                        <div class="row font-weight-bold text-danger ml-1">
                            Horario de atención al público
                        </div>
                        <div class="row ml-1 font-weight-bold">
                            Lunes a Viernes
                        </div>
                        <div class="row ml-1">
                            De 8:00am a 12:00m <br>
                            y de 1:00pm a 5:00pm
                        </div>
                        <div class="row font-weight-bold text-danger ml-1 mt-3">
                            Teléfonos:
                        </div>
                        <div class="row ml-1">
                            0414-389-74-44 <br>
                            0058-0212-362-82-68 <br>
                        </div>
                        <div class="row ml-1">
                            <span class="text-danger font-weight-bold">
                                Email:
                            </span>
                            &nbsp nirvana01@gmail.com
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </form>
</section>