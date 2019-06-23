@extends('base')
@section('main')
    <div class="container">
        <h2>{{$prova->descricao}}</h2>
        <form method="POST" action="{{ url('aluno/provas/salvar-resposta/') }}">
        @foreach($prova->questoes as $questao)
                @csrf
                <div class="col-md-12">
                    {{$questao->descricao}}
                    <input type="hidden" value="{{$prova->id}}" name="idProva">
                    @foreach($questao->alternativas as $alternativa)
                        <div class="col-md-8">
                            <input type="radio" name="resposta[{{$questao->id}}]" value="{{$alternativa->id}}">
                            {{$alternativa->descricao}}
                        </div>
                    @endforeach
                </div>
            @endforeach
            <input type="submit">
        </form>
    </div>
@endsection
