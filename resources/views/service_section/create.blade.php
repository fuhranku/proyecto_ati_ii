@extends('templates.layout')    

@section('title','Index')

@section('content')

<div class="container">
    <div class="row">
        
        <div class="col border border-primary rounded-lg">
            <h2 class="text-center font-weight-bold bg-info">Crear Servicio</h2>
            
            <p class="text-center font-weight-bold">Introduzca los datos del servicio que desea agregar, que se solicitan a continuación:</p>
            
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Servicio a ofrecer</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ej: Avalúo de apartamentos">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Descripción del servicio</label>
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" placeholder="Ej: Persona con años de experiencia en determinar, el valor de su inmueble"></textarea>
                </div>

                <p>Tipo de Usuario</p>
                <select name="userType" class="form-control  col-md-5" onchange="userTypeChange()" id="crt-userType" >
                    <option value="0">Persona Natural</option>
                    <option value="1">Empresa</option>
                </select>

                <div id="NaturalPersonForm" style="display:none">
                    <p>Persona natural</p>
                </div>
                
                <div id="CompanyForm" style="display:none">
                    <p>Empresa</p>
                </div>
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>

        
        
    </div>
</div>

<script>


    userTypeChange = () => {

        if($("#crt-userType").val() == 0){

            $("#NaturalPersonForm").css('display', 'block');
            $("#CompanyForm").css('display', 'none');
        }
        else{

            $("#NaturalPersonForm").css('display', 'none');
            $("#CompanyForm").css('display', 'block');
        }
    }

</script>

@endsection