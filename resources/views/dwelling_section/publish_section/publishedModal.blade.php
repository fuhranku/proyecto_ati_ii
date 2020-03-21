{{-- Modal --}}
<div class="row h-100 d-none" id="dwell-published-modal">
    <div class="col-sm-12 my-auto">
        <div class="w-30 mx-auto text-center bg-white pb-3">
            <div class="row">
                <div class="col-sm-12">
                    <div class="bg-blue text-white p-2 font-weight-bold">
                        Vivienda publicada
                    </div>
                </div>
            </div>
            <div class="container pr-4 pl-4 pb-4">
                <div class="row">
                <div class="col-sm-12 mt-2 sm-text">
                    Su vivienda ha sido publicada <br>
                    Ahora puede visualizar el listado de la vivienda
                </div>
            </div>
            <div class="row pl-3 mt-3">
                <div class="col-md-12">
                    <div class="row">
                        <input type="radio" id="option1" name="success-modal" value=1>
                        <label class="font-weight-bold ml-2">Ver mi publicación</label><br>
                    </div>
                    <div class="row">
                        <input type="radio" id="option2" name="success-modal" value=2>
                        <label class="font-weight-bold ml-2">Seguir navegando en el portal</label><br>
                    </div>
                    <div class="row">
                        <input type="radio" id="option3" name="success-modal" value=3>
                        <label class="font-weight-bold ml-2">Salir</label><br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 mt-2 pl-2 pr-2">
<<<<<<< HEAD
<<<<<<< HEAD
                <a class="btn btn-yellow text-center cursor-pointer" id="accept-publish-modal" onclick="return getOption()"href="#">Aceptar</a>
=======
                <a class="btn btn-yellow text-center cursor-pointer" id="accept-publish-modal" href="#">Aceptar</a>
>>>>>>> test2
=======
                <a class="btn btn-yellow text-center cursor-pointer" id="accept-publish-modal" href="#">Aceptar</a>
>>>>>>> 0a72e22cf0f6a0d32dba9b5e5d53e065b5320b80
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<script>
    var index = "{{url('index')}}"
</script>