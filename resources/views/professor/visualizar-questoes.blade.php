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
            @foreach($questoes as $chave => $questao)
                <tr>
                    <td>{{$questao->descricao}}</td>
                    @foreach($questao->alternativas as $alternativa)
                        @php($idQuestaoAlternativa = $alternativa->questao_id)
                    @endforeach
                    @if($questao->id != $idQuestaoAlternativa)
                        <td>
                            <button class="btn btn-success btn-sm"
                                    onclick="window.location='{{ url("professor/alternativa/adicionar/$questao->id") }}'">
                                Adicionar alternativas
                            </button>
                        </td>
                    @else
                        <td>
                            <button class="btn btn-primary btn-sm"
                                    onclick="window.location='{{ url("professor/alternativa/visualizar/$questao->id") }}'">
                                visualizar Alternativas
                            </button>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
