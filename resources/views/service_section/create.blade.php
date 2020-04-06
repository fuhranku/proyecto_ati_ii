@extends('templates.layout')    

@section('title','Index')

@section('content')

<div class="container">
    
    <div class="row bg-blue">
        <div class="col-md-12 ">
            <h2 class="text-center font-weight-bold ">Crear Servicio</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 border border-primary pt-3 ">
            <p class="text-center font-weight-bold">Introduzca los datos del servicio que desea agregar, que se solicitan a continuación:</p>
        </div>
    </div>

    <form>

        <div class="form-group row p-2 mb-0 border border-primary">
            <label for="exampleInputEmail1" class="col-md-3 text-blue">Servicio a ofrecer</label>
            <input type="email" class="form-control col-md-9" aria-describedby="emailHelp" placeholder="Ej: Avalúo de apartamentos">
        </div>

        <div class="form-group row p-2 mb-0 border border-primary">
            <label for="exampleInputEmail1" class="col-md-3 text-blue">Descripción del servicio</label>
            <textarea class="form-control rounded-0 col-md-9" rows="10" placeholder="Ej: Persona con años de experiencia en determinar, el valor de su inmueble"></textarea>
        </div>
    

        <div class="row p-2 border border-primary">
            <p class="col-md-3 text-blue">Tipo de Usuario</p>
            <select class="col-md-9" name="userType" class="form-control  col-md-5" onchange="userTypeChange()"   >
                <option value="0">Persona Natural</option>
                <option value="1">Empresa</option>
            </select>
        </div>

        <div id="NaturalPersonForm"  class="row d-none">
            
            <div class="col-md-6 p-5 border border-primary">
    
                <p>Datos de contacto</p>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Ej: Avalúo de apartamentos">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Apellido</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Ej: Avalúo de apartamentos">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Ej: Avalúo de apartamentos">
                </div>
    
            </div>
    
            <div class="col-md-6 p-5 border border-primary  ">
    
                <p>Dias de contacto</p>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Lunes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Martes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Miercoles</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Jueves</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Viernes</label>
                  </div>
                  
                  <div class="p-5">
          
                    <p>Horas de contacto</p>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">Desde</label>
                            <select id="inputState" class="form-control">
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            </select>

                            <select id="inputState" class="form-control">
                                <option selected>AM</option>
                                <option>PM</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">Hasta</label>
                            <select id="inputState" class="form-control">
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            </select>

                            <select id="inputState" class="form-control">
                                <option selected>AM</option>
                                <option>PM</option>
                            </select>
                        </div>
                    </div>
                
                </div>
            </div>

        </div>
        
        <div id="CompanyForm" class="row d-none">


            <div class="col-md-6 p-5 border border-primary">
    
                <p>Datos de contacto</p>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Ej: Avalúo de apartamentos">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Apellido</label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Ej: Avalúo de apartamentos">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Ej: Avalúo de apartamentos">
                </div>
    
            </div>
    
            <div class="col-md-6 p-5 border border-primary  ">
    
                <p>Dias de contacto</p>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">Lunes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Martes</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Miercoles</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Jueves</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">Viernes</label>
                  </div>
                  
                  <div class="p-5">
          
                    <p>Horas de contacto</p>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">Desde</label>
                            <select id="inputState" class="form-control">
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            </select>

                            <select id="inputState" class="form-control">
                                <option selected>AM</option>
                                <option>PM</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">Hasta</label>
                            <select id="inputState" class="form-control">
                            <option selected>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            </select>

                            <select id="inputState" class="form-control">
                                <option selected>AM</option>
                                <option>PM</option>
                            </select>
                        </div>
                    </div>
                
                </div>
            </div>

        </div>

        <div class="form-row p-5">
            
            <div class="form-group col-md-3">
                <label for="inputState">Continente</label>
                <select id="inputState" class="form-control">
                <option selected>America</option>
                <option>Europa</option>
                <option>Asia</option>
                <option>Oceania</option>
                </select>
            </div>
            
            <div class="form-group col-md-3">
                <label for="inputState">Pais</label>
                <select id="inputState" class="form-control">
                <option selected>Venezuela</option>
                <option>Canada</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="inputState">Estado</label>
                <select id="inputState" class="form-control">
                <option selected>Distrito Capital</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="inputState">Ciudad</label>
                <select id="inputState" class="form-control">
                <option selected>Caracas</option>
                </select>
            </div>

        </div>
    
        <div class="row">

            <div class="col-md-4"></div>
            <div class="text-center col-md-2 p-3">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
            <div class="text-center col-md-2 p-3">
                <button type="submit" class="btn btn-primary">Cancelar</button>
            </div>
            <div class="col-md-4"></div>
        </div>
        

    </form>


</div>

<script>


    userTypeChange = () => {

        if($("#crt-userType").val() == 0){
            $("#NaturalPersonForm").removeClass("d-none");
            $("#CompanyForm").addClass("d-none");
        }
        else{
            $("#NaturalPersonForm").addClass("d-none");
            $("#CompanyForm").removeClass("d-none");
        }
    }

</script>

@endsection