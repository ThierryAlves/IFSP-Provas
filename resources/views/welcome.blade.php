@extends('base')
@section('assets')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="wrapper">
                <div class="fadeIn first">
                    <img src="{{ asset('img/ifsp.jpg')}}" id="logo" class="rounded-circle img-fluid" alt="Logo"/>
                </div>
                <div id="formContent">
                    <div class="container">
                        <div class="col-md-6 text-center">
                            <button id="professor" type="button" class="btn btn-success btn-lg"
                                    onclick="window.location='{{ url("/professor")}}'">Professores</button>
                        </div>
                        <div class="col-md-6 text-center">
                            <button id="aluno" type="button" class="btn btn-primary btn-lg"
                                    onclick="window.location='{{ url("/aluno") }}'">Alunos</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
