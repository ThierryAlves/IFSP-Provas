@extends('base')
@section('assets')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
    @extends('navbar')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Prova</th>
                <th scope="col">Data Inicio</th>
                <th scope="col">Data Final</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($provas as $prova)
                <tr>
                    <td>{{$prova->descricao}}</td>
                    <td>{{$prova->data_inicio}}</td>
                    <td>{{$prova->data_final}}</td>
                    <td>
                        <button class="btn btn-primary btn-sm"
                                onclick="window.location='{{ url("professor/questao/visualizar/$prova->id") }}'">
                            Questões
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-success btn-sm"
                                onclick="window.location='{{ url("professor/questao/adicionar/$prova->id") }}'">
                            Adicionar questões
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
