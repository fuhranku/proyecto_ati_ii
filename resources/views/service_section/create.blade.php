@extends('templates.layout')    

@section('title','Index')

@section('content')
<section>
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
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Persona Natural</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Empresa</label>
                    </div>
                    
                    {{-- 
                    @if ($(document).getElementById('inlineRadio2').checked)
                        I have one record!
                    @elseif (count($records) > 1)
                        I have multiple records!
                    @else
                        I don't have any records!
                    @endif --}}

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </form>
            </div>

            
            
        </div>
    </div>

@endsection