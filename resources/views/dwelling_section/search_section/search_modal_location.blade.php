{{-- Modal --}}
<div class="row h-100 d-none" id="dwell-location-modal">
    <div class="col-sm-12 my-auto">
        <div class="w-30 mx-auto bg-white pb-3 modal-border" >
            <div class="row text-center">
                <div class="col-sm-12">
                    <div class="bg-blue text-white font-weight-bold" style="border-bottom: 1px solid #000">
                        Comodidades, servicios y ubicación
                    </div>
                </div>
            </div>
            <div class="container pr-4 pl-4 pb-4">
                <div class="row">
                    <div class="col-sm-12 mt-2 md-text text-blue font-weight-bold">
                        Ubicación exacta
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 mt-2 sm-text">
                        <p id="modal-info-location"></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mt-2 pl-2 pr-2 text-center">
                    <a class="btn btn-yellow text-center accept-btn" onclick="$('#dwell-location-modal').addClass('d-none');" href="#">Aceptar</a>
                </div>
            </div>
        </div>
    </div>
</div>