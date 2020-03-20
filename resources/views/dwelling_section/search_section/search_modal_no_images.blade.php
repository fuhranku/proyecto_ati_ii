{{-- Modal --}}
<div class="row h-100 d-none" id="dwell-no-photos-modal">
    <div class="col-sm-12 my-auto">
        <div class="w-30 mx-auto text-center bg-white pb-3">
            <div class="row">
                <div class="col-sm-12">
                    <div class="bg-blue text-white p-2 font-weight-bold" id="no-image-modal-title">
                        No se han encontrado imágenes
                    </div>
                </div>
            </div>
            <div class="container pr-4 pl-4 pb-4">
                <div class="row">
                <div class="col-sm-12 mt-2 sm-text" id="no-image-modal-body">
                    <p id="modal-info-no-photos">Lo sentimos, esta vivienda no posee ninguna imagen.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mt-2 pl-2 pr-2">
                    <a class="btn btn-yellow text-center accept-btn" onclick="$('#dwell-no-photos-modal').addClass('d-none');" href="#">Aceptar</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>