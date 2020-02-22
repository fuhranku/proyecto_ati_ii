@extends('templates.layout')     

@section('title','Index')

@section('content')

<section>
<link href="{{ asset('/css/modal.css') }}" rel="stylesheet">
    <div style="margin-top:70px">
        <!-- sign in -->
        <div class="modal fade" id="sign_in">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Iniciar sesión</h4>
                        <button type="button" onclick="closeModal()" class="close" data-dismiss="modal">
                            <span>-</span>
                        </button>
                        <button type="button" class="icon" data-dismiss="modal">
                            <span>&#9633;</span>
                        </button>
                        <button type="button"  onclick="closeModal()" class="close" data-dismiss="modal">
                            <span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <form method="post" action="{{ route('main.sign_in') }}">
                        <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4 modal-label">
                                <label for="Email">{{__('words.email')}}</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="Email"/>
                                {!! $errors->first('Email', '<span class="help-block">:message</span>') !!}
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            @csrf

                            <div class="row">
                                <div class="col-sm-4 modal-label">
                                    <label for="Password">{{__('words.password')}}</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="Password"/>
                                    {!! $errors->first('Password', '<span class="help-block">:message</span>') !!}
                                </div>
                            </div>
                        </div>
                        <div class="button-group">
                            <br>
                            <button type="submit" class="btn modal-button">{{__('words.send')}}</button>
                            <br>
                            <a class="modal-forgot" href="">Olvidé mi contraseña, o mis datos</a>
                            <!-- <a href="{{ route('main.sign_in') }}" class="btn btn-info btn-block" >{{__('words.back')}}</a> -->

                        </div>
                    </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <!-- forgot -->

        <!-- recuperar email -->

        <!-- recuperar con cédula -->
    </div>
    <script src="{{ asset('js/sign_in.js') }}"></script>

@endsection