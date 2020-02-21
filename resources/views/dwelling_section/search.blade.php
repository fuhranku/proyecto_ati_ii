@extends('templates.layout')    

@section('title','Index')

@section('content')
<section>
    <div class="container">
    
        <div class="row">
            <div class="col-md-3 search-box" style="margin-left:15px;">
                <div class="search-btn border border-info rounded " id='btn-b-rapida'>
                    <p class="font-weight-bold m-0">Búsqueda Rápida</p>
                </div>

                <div class="border border-info p-1" id="busqueda-rapida">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="badge badge-info">Pais</span>
                            <select id="country" class="form-control " onchange="" id="crt-userType" >
                                <option value="0">Venezuela</option>
                                <option value="1">Colombia</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <span class="badge badge-info">Estado</span>
                            <select id="country" class="form-control  " onchange="" id="crt-userType" >
                                <option value="0">Venezuela</option>
                                <option value="1">Colombia</option>
                            </select>
                        </div>
                    </div>
                        
                    {{-- <form action="">
                        <div class="form-row pt-2">
            
                            <div class="form-group col-auto">
                                <span class="badge badge-info">Pais</span>
                                <select id="country" class="form-control " onchange="" id="crt-userType" >
                                    <option value="0">Venezuela</option>
                                    <option value="1">Colombia</option>
                                </select>
                            </div>
                
                            <div class="form-group col-auto">
                                <span class="badge badge-info">Estado</span>
                                <select id="country" class="form-control  " onchange="" id="crt-userType" >
                                    <option value="0">Venezuela</option>
                                    <option value="1">Colombia</option>
                                </select>
                            </div>
                        </div>
            
                        <div class="form-row pt-2">
            
                            <div class="form-group col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                      Alquiler
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <label class="form-check-label" for="exampleRadios2">
                                      Venta
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                                    <label class="form-check-label" for="exampleRadios3">
                                      Alquiler y venta
                                    </label>
                                  </div>
                            </div>
                
                            <div class="form-group col-auto">
                                <span class="badge badge-info">Tipo de inmueble</span>
                                <select id="country" class="form-control  " onchange="" id="crt-userType" >
                                    <option value="0">Apartamento</option>
                                    <option value="1">Casa</option>
                                    <option value="2">Apartamento y Casa</option>
                                </select>
                            </div>                
                        </div>
            
                        <div class="form-row pt-2">
                            <div class="text-center col-auto p-3">
                                <button type="submit" class="btn btn-primary">Buscar</button>
                            </div>
                            <div class="text-center col-auto p-3">
                                <button type="submit" class="btn btn-primary">Cancelar</button>
                            </div>
                        </div>
                    </form> --}}
                </div>
            </div>
            
        </div>


    </div>
@endsection