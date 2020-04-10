<div class='d-none contact-announcer-section' id="section-2">
    <div class="row">
        <div class="col md-12 font-weight-bold text-red text-center" style='    font-size: 21px;margin-top: -7px;'>Quiero que me llamen</div>
    </div>
    <div class="container mr-5">
        <div class="row">
            <div class="col-md-3 pr-0">
                <label class='font-weight-bold text-blue sm-text'>Teléfono</label>
            </div>
            <div class="col-md-9 pr-0 ">
                <span class="text-blue sm-text">Seleccione el o los teléfonos de su preferencia</span>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-1"></div>
            <div class="col-md-5 form-check">
                <input type="checkbox" class="form-check-input" id="mobile-checkbox-contact-announcer-dwelling" name="phone-checkbox-contact-announcer-dwelling" value="mobile">
                <label class="form-check-label bg-yellow text-white tlf-checkbox-contact-announcer md-text">Móvil</label>
            </div>
            <div class="col-md-5 form-check">
                <input type="checkbox" class="form-check-input" id="landline-checkbox-contact-announcer-dwelling" name="phone-checkbox-contact-announcer-dwelling" value="landline">
                <label class="form-check-label bg-yellow text-white tlf-checkbox-contact-announcer md-text">Fijo</label>
            </div>
        </div>
        <div class="container ml-n5">
            <div class="row mt-3 ml-3 mb-3" id='input-contact-announcer-dwelling-mobile'>
                <div class="col-md-10 md-text"> 
                <input class="phone-contact-announcer w-100" name="mobile_dwelling" type="tel" id='mobile-contact-announcer-dwelling'>
                </div>
            </div>
    
            <div class="row landline-phone mt-3 ml-3 mb-3" id='input-contact-announcer-dwelling-landline'>
                <div class="col-md-10 md-text"> 
                    <input class="phone-contact-announcer w-100" name="landline_dwelling" type="tel" id='landline-contact-announcer-dwelling'>
                </div>
                <div class="col-md-1 sm-text ml-n3 font-weight-bold my-auto">
                        Ext
                </div>
                <div class="col-md-1 sm-text my-auto">
                    <input type="text" placeholder="Opcional" name='landline_ext_dwelling' 
                    style='
                        padding: 4px 5px;
                        width: 62px;
                        font-weight: bold;'
                    >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 pr-0">
                <label class='font-weight-bold text-blue sm-text'>Nombre</label>
            </div>
            <div class="col-md-7 ">
                <input class='sm-text w-100 pl-1' type="text" placeholder="John">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 pr-0">
                <label class='font-weight-bold text-blue sm-text'>Apellido</label>
            </div>
            <div class="col-md-7">
                <input class='sm-text w-100 pl-1' type="text" placeholder="Doe">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4 pr-0">
                <label class='font-weight-bold sm-text bg-warning text-white label-contact-announcer'>Días de contacto</label>
            </div>
            <div class="col-md-8 border border-primary pb-2">
                <div class="row mt-2">
                    <div class="col-md-3 d-flex flex-row pl-2 cursor-pointer checkbox-container">
                        <input class="day-checkbox my-auto mr-1" type="checkbox" value="Lunes" >
                        <div class="day-label">
                            Lunes
                        </div>
                    </div>
                    <div class="col-md-3 d-flex flex-row pl-2 cursor-pointer checkbox-container">
                        <input class="day-checkbox my-auto mr-1" type="checkbox" value="Martes" >
                        <div class="day-label">
                            Martes
                        </div>
                    </div>
                    <div class="col-md-3 d-flex flex-row pl-2 cursor-pointer checkbox-container">
                        <input class="day-checkbox my-auto mr-1" type="checkbox" value="Miercoles" >
                        <div class="day-label">
                            Miércoles
                        </div>
                    </div>
                    <div class="col-md-3 d-flex flex-row pl-2 cursor-pointer checkbox-container">
                        <input class="day-checkbox my-auto mr-1" type="checkbox" value="Jueves" >
                        <div class="day-label">
                            Jueves
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-3 d-flex flex-row pl-2 cursor-pointer checkbox-container">
                        <input class="day-checkbox my-auto mr-1" type="checkbox" value="Viernes" >
                        <div class="day-label">
                            Viernes
                        </div>
                    </div>
                    <div class="col-md-3 d-flex flex-row pl-2 cursor-pointer checkbox-container">
                        <input class="day-checkbox my-auto mr-1" type="checkbox" value="Sabado" >
                        <div class="day-label">
                            Sábado
                        </div>
                    </div>
                    <div class="col-md-3 d-flex flex-row pl-2 cursor-pointer checkbox-container">
                        <input class="day-checkbox my-auto mr-1" type="checkbox" value="Domingo" >
                        <div class="day-label">
                            Domingo
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-md-4 pr-0">
                <label class='font-weight-bold sm-text bg-warning text-white label-contact-announcer'>Horas de contacto</label>
            </div>
            <div class="col-md-4 pr-0 my-auto">
                <div class="sm-text font-weight-bold">
                    Desde
                </div>
                <div class="row">
                    <div class="col-md-6 pr-0">
                        <ul class="tiny-checkbox-dropdown w-100" >
                            <li class="dropdown">
                                <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 sm-text"></p>
                                <ul class="dropdown-menu hour-dropdown sm-text">
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
                    <div class="col-md-6 pl-1 pr-2 w-100">
                        <ul class="tiny-checkbox-dropdown" >
                            <li class="dropdown">
                                <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 sm-text"></p>
                                <ul class="dropdown-menu hour-dropdown sm-text">
                                    <li><label class="checkbox"><input type="checkbox" value="am" name="from_time">am</label></li>
                                    <li><label class="checkbox"><input type="checkbox" value="pm" name="from_time">pm</label></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pr-0 my-auto">
                <div class="sm-text font-weight-bold">
                    Hasta
                </div>
                <div class="row">
                    <div class="col-md-6 pr-0">
                        <ul class="tiny-checkbox-dropdown w-100" >
                            <li class="dropdown">
                                <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 sm-text"></p>
                                <ul class="dropdown-menu hour-dropdown sm-text">
                                    <li><label class="checkbox "><input type="checkbox" value=1 name="to_hour">1</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=2 name="to_hour">2</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=3 name="to_hour">3</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=4 name="to_hour">4</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=5 name="to_hour">5</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=6 name="to_hour">6</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=7 name="to_hour">7</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=8 name="to_hour">8</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=9 name="to_hour">9</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=10 name="to_hour">10</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=11 name="to_hour">11</label></li>
                                    <li><label class="checkbox "><input type="checkbox" value=12 name="to_hour">12</label></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 pl-1 pr-2 w-100">
                        <ul class="tiny-checkbox-dropdown" >
                            <li class="dropdown">
                                <p data-toggle="dropdown" class="dropdown-toggle border-gray pl-2 sm-text"></p>
                                <ul class="dropdown-menu hour-dropdown sm-text">
                                    <li><label class="checkbox"><input type="checkbox" value="am" name="to_time">am</label></li>
                                    <li><label class="checkbox"><input type="checkbox" value="pm" name="to_time">pm</label></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-1 pr-0">
            </div>
            <div class="col-md-11 pr-0 sm-text">
                <span class="font-weight-bold text-red ml-n2">*</span>
                <span class="font-weight-bold text-blue">
                    Por favor verifique que sus datos sean los correctos,
                    ya que serán utilizados por el anunciante para contactarlo
                </span>
            </div>
        </div>
        <div class="row text-center mb-3">
            <div class="col-sm-12 mt-2 pl-2 pr-2">
                <a class="btn btn-yellow text-center accept-btn mt-2 md-text" style='padding: 0px 15px;' href="#">Contactar al anunciante</a>
            </div>
        </div>
</div>
