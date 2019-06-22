@extends('base')
@section('main')
    @extends('navbar')
    <div class="container">
        <h2>{{$prova->descricao}}</h2>
        <form>
            @foreach($prova->questoes as $questao)
                <div class="col-md-12">
                    {{$questao->descricao}}
                    @foreach($questao->alternativas as $alternativa)
                        <div class="col-md-8">
                            <input type="radio" name="resposta[{{$questao->id}}]">
                            {{$alternativa->descricao}}
                        </div>
                    @endforeach
                </div>
            @endforeach
            <input type="submit">
        </form>
    </div>
@endsection
