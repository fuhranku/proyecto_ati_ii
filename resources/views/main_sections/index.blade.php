@extends('templates.layout')      

@section('title','Index')

@section('content')
<section>
    
    <div class="container">

        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><p class="font-weight-bold text-center h4">Opciones de búsqueda</p></div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="text-danger d-inline">*</p>
                <p class="text-blue d-inline">1- Haz click en la opción de tu preferencia</p>
            </div>
        </div>

        <div class="row m-3">
            <div class="col-md-3"></div>
            <div class="col-md-3">
                <button class="btn btn-warning text-white" onclick="displaySD()">Buscar vivienda</button>
            </div>

            <div class="col-md-4">
                <button class="btn btn-warning text-white" onclick="displaySoRD()">Vender o alquilar vivienda</button>
            </div>
            <div class="col-md-2"></div>
        </div>

        <!-- Opción buscar vivienda -->
        <div class="row" id="search-dwelling">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="text-danger d-inline">*</p>
                        <p class="text-blue d-inline">1- Selecciona la forma en la que deseas buscar la vivienda</p>
                    </div>
                </div>
    
                <div class="row mt-3">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 border border-info rounded ">
                        <i class="fas fa-caret-down d-inline"></i>
                        <p class="font-weight-bold  d-inline">Búsqueda por palabra clave</p>
                    </div>
                    <div class="col-md-3"></div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 border border-info rounded ">
                        <i class="fas fa-caret-down d-inline"></i>
                        <p class="font-weight-bold  d-inline">Búsqueda rápida</p>
                    </div>
                    <div class="col-md-3"></div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-3"></div>
                    <div class="col-md-6 border border-info rounded ">
                        <i class="fas fa-caret-down d-inline"></i>
                        <p class="font-weight-bold  d-inline">Búsqueda detallada</p>
                    </div>
                    <div class="col-md-3"></div>
                </div>

            </div>
        </div>

        <!-- Opción Vender o alquilar vivienda -->
        <div class="row" id="sellrent-dwelling">
            <div class="col-md-12">

                <div class="row mt-5">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <p class="h5 font-weight-bold">Preguntas frecuentes</p>
                    </div>
                    <div class="col-md-6">
                        <p class="d-inline">Haga click aqui:</p>
                        <a href="/faq" class="text-blue d-inline"><u>Ver preguntas frecuentes</u></a>
                        
                    </div>
                </div>

                <div class="row m-3">
                    <div class="col-md-12 text-center">
                        <p class="font-weight-bold text-danger ">¿Cómo publico mi vivienda con ustedes?</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-4 pr-0">
                        <p>1- Debes registrarte haciendo click aquí: </p>
                    </div>
                    <div class="col-md-3 pl-0">
                        <button class="btn btn-warning text-white">Registrarme</button>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-3"></div>
                    <div class="col-md-4 pr-0">
                        <p>2- Luego debes iniciar sesión, haciendo clic en: </p>
                    </div>
                    <div class="col-md-3 pl-0">
                        <button class="btn btn-warning text-white">Iniciar Sesión</button>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-3"></div>
                    <div class="col-md-8 pr-0">
                        <p class="d-inline">3- Luego de iniciar sesión seleccionas la opción </p>
                        <a href="/dwelling/publish" class="text-blue d-inline"><u>Viviendas->Publicar</u></a>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-3"></div>
                    <div class="col-md-8 pr-0">
                        <p class="mb-0">4- Luego colocas los datos solicitados, y luego presiona el botón Publicar vivienda</p>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-3"></div>
                    <div class="col-md-8 pr-0">
                        <p >5- Luego revisaremos la publicación, si todo esta bien, te notificaremos que ya tu vivienda está disponible para que otros usuarios la puedan visualizar, en un plazo de 3 días hábiles como máximo.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <script>
        displaySD = () =>{
            if($('#search-dwelling').hasClass("d-none")){
                $('#search-dwelling').removeClass("d-none");
            }else{
                $('#search-dwelling').addClass("d-none");
            }
        }

        displaySoRD = () =>{
            if($('#sellrent-dwelling').hasClass("d-none")){
                $('#sellrent-dwelling').removeClass("d-none");
            }else{
                $('#sellrent-dwelling').addClass("d-none");
            }
        }
    </script>
@endsection