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
                <th scope="col">Aluno</th>
                <th scope="col">Data Resposta</th>
                <th scope="col">Resultado</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($resultados as $resultado)
                <tr>
                    <td>{{$resultado->aluno->nome}}</td>
                    <td>{{$resultado->created_at}}</td>
                    <td>{{$resultado->questoes_corretas}}/{{count($resultado->prova->questoes)}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
