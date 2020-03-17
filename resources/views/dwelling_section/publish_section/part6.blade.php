<div class="col-md-5">

    <div class="row mb-3">
        <div class="col-md-12">
            <div class="row m-3">
                <div class="col-md-3"></div>
                <div class="col-md-6 bg-warning text-center">
                    <p class="h5 text-white font-weight-bold mt-2">Días de contacto</p>
                </div>
                <div class="col-md-3"></div>
            </div>

            <div class="border border-primary">

                <div class="row m-2">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input day-checkbox" type="checkbox" value="Lunes" >
                            <p>Lunes</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input day-checkbox" type="checkbox" value="Martes" >
                            <p>Martes</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input day-checkbox" type="checkbox" value="Miercoles" >
                            <p>Miércoles</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input day-checkbox" type="checkbox" value="Jueves" >
                            <p>Jueves</p>
                        </div>
                    </div>
                </div>

                <div class="row m-2">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input day-checkbox" type="checkbox" value="Viernes" >
                            <p>Viernes</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input day-checkbox" type="checkbox" value="Sabado" >
                            <p>Sábado</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input day-checkbox" type="checkbox" value="Domingo" >
                            <p>Domingo</p>
                        </div>
                    </div>

                    <div class="col-md-3"></div>
                </div>

                <div class="row m-2">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="weekend" >
                            <p>Fines de semana</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="week_days" >
                            <p>Lunes a viernes</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @component('components.field_error')
        @slot('grid_size')
            12
        @endslot
        @slot('error_row_id')
            error_row_contact_days_checkbox
        @endslot
        @slot('error_ul_id')
            error_ul_contact_days_checkbox
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="row m-3">
                <div class="col-md-3"></div>
                <div class="col-md-6 bg-warning text-center">
                    <p class="h5 text-white font-weight-bold mt-2">Hora de contacto</p>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>

    <div class="row m-3">

        <div class="col-md-6">

            <div class="row">
                <div class="col-md-12">
                    <p>Desde</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-check">
                    <ul class="checkbox-dropdown" >
                        <li class="dropdown">
                            <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 tiny-text"></p>
                            <ul class="dropdown-menu hour-dropdown" data-flip="false">
                                <li><label class="checkbox "><input type="checkbox" value=1 name="from_hour">1</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=2 name="from_hour">2</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=3 name="from_hour">3</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=4 name="from_hour">4</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=5 name="from_hour">5</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=6 name="from_hour">6</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=7 name="from_hour">7</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=8 name="from_hour">8</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=9 name="from_hour">9</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=10 name="from_hour">10</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=11 name="from_hour">11</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=12 name="from_hour">12</label></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 form-check">
                    <ul class="checkbox-dropdown" >
                        <li class="dropdown">
                            <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 tiny-text"></p>
                            <ul class="dropdown-menu hour-dropdown" data-flip="false">
                                <li><label class="checkbox "><input type="checkbox" value="am" name="from_time">am</label></li>
                                <li><label class="checkbox "><input type="checkbox" value="pm" name="from_time">pm</label></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>



        </div>

        <div class="col-md-6">
            
            <div class="row">
                <div class="col-md-12">
                    <p>Hasta</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-check">
                    <ul class="checkbox-dropdown" >
                        <li class="dropdown">
                            <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 tiny-text"></p>
                            <ul class="dropdown-menu hour-dropdown" data-flip="false">
                                <li><label class="checkbox "><input type="checkbox" value=1  name="to_hour">1</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=2  name="to_hour">2</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=3  name="to_hour">3</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=4  name="to_hour">4</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=5  name="to_hour">5</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=6  name="to_hour">6</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=7  name="to_hour">7</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=8  name="to_hour">8</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=9  name="to_hour">9</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=10 name="to_hour">10</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=11 name="to_hour">11</label></li>
                                <li><label class="checkbox "><input type="checkbox" value=12 name="to_hour">12</label></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 form-check">
                    <ul class="checkbox-dropdown" >
                        <li class="dropdown">
                            <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 tiny-text"></p>
                            <ul class="dropdown-menu hour-dropdown" data-flip="false">
                                <li><label class="checkbox "><input type="checkbox" value="am" name="to_time">am</label></li>
                                <li><label class="checkbox "><input type="checkbox" value="pm" name="to_time">pm</label></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    @component('components.field_error')
        @slot('grid_size')
            12
        @endslot
        @slot('error_row_id')
            error_row_contact_hour_array
        @endslot
        @slot('error_ul_id')
            error_ul_contact_hour_array
        @endslot
    @endcomponent
</div>
</div>