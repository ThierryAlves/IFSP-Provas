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
                <th scope="col">Questão</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($questoes as $questao)
                <tr>
                    <td>{{$questao->descricao}}</td>
                    <td>
                        <button class="btn btn-success btn-sm"
                                onclick="window.location='{{ url("professor/alternativa/adicionar/$questao->id") }}'">
                            Adicionar alternativas
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
