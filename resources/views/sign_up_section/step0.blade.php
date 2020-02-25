<section id="step-0">
    <form id='form-step-0'>
        @csrf
        <div class='row d-none' id="errors-row">
            <div class='col-sm-1'></div>
            <div class='col-sm-4'>
                <ul class="alert alert-danger" id='errors-ul'>
                </ul>
            </div>
        </div>
        <div class='container mt-3'>
            Por favor, coméntenos, cómo se enteró de los servicios de la empresa <br>
            Es importante para nosotros porque nos ayuda a mejorar el servicio que le ofrecemos
            <div class="row mt-3">
                {{-- Portal Web --}}
                <div class="col-md-3 form-check">
                    <input value="portal-web" type="checkbox" class="form-check-input checkbox-list-1" id="portal-web" name="found_us">
                    <label class="form-check-label" for="portal-web">Portal Web de la empresa</label>
                </div>

                {{-- RRSS --}}
                <div class="col-md-3 form-check">
                    <input value="rrss" type="checkbox" class="form-check-input checkbox-list-1" id="rrss-checkbox" name="found_us">
                    <label class="form-check-label" for="rrss">Redes Sociales</label>
                    <ul class="checkbox-dropdown d-none" id="rrss-dropdown">
                        <li class="dropdown mt-2">
                            <a href="#" data-toggle="dropdown p-5" class="dropdown-toggle border-gray"><b class="caret text-right"></b></a>
                            <ul class="dropdown-menu">
                                <li><label class="checkbox"><input type="checkbox" value="fb" name="social_media">Facebook</label></li>
                                <li><label class="checkbox"><input type="checkbox" value="tw" name="social_media">Twitter</label></li>
                                <li><label class="checkbox"><input type="checkbox" value="ig" name="social_media">Instagram</label></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                {{-- Amigos --}}
                <div class="col-md-3 form-check">
                    <input value="amigos" type="checkbox" class="form-check-input checkbox-list-1" id="amigos" name="found_us">
                    <label class="form-check-label" for="amigos">Amigos</label>
                </div>
                
                {{-- Otro --}}
                <div class="col-md-3 form-check">
                    <input value="otro" type="checkbox" class="form-check-input checkbox-list-1" id="otro-checkbox" name="found_us">
                    <label class="form-check-label" for="otro">Otro</label>
                    <div class="mt-2 ml-n5 d-none" id="other-modal">
                        <label class="form-check-label font-weight-bold">Especifique cuál fue el medio por el que supo de nosotros</label> 
                        <input type="text" class="form-control mt-2" placeholder="Correo, Radio, Prensa" name="other_text">
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
