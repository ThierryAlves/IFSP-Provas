@extends('base')
@section('assets')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Prova</th>
                <th scope="col">Data Inicio</th>
                <th scope="col">Data Final</th>
                <th scope="col"></th>
                <th scope="col">Nota</th>
            </tr>
            </thead>
            <tbody>
            @foreach($provas as $chave => $prova)
                <tr>
                    <td>{{$prova->descricao}}</td>
                    <td>{{$prova->data_inicio}}</td>
                    <td>{{$prova->data_final}}</td>
                    @if(isset($prova->respostas[0]))
                        <td>
                            <div class="btn btn-primary btn-sm">
                                Prova Realizada
                            </div>
                        </td>
                        <td>
                            @foreach($prova->resultados as $resultado)
                                @if($prova->id == $resultado->prova_id)
                                    {{$resultado->questoes_corretas}}/{{count($prova->respostas)}}
                                @endif
                            @endforeach
                        </td>
                    @else
                        <td>
                            <button class="btn btn-success btn-sm"
                                    onclick="window.location='{{ url("aluno/provas/responder/$prova->id") }}'">
                                Responder
                            </button>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
