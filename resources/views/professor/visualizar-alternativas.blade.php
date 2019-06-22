@extends('base')
@section('assets')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic-bootstrap.min.css" integrity="sha256-BJ/G+e+y7bQdrYkS2RBTyNfBHpA9IuGaPmf9htub5MQ=" crossorigin="anonymous" />
@endsection
@section('main')
    @extends('navbar')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Alternativa</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($alternativas as $key => $alternativa)
                <tr>
                    <td>{{$key+1 .") ". $alternativa->descricao}}</td>
                    <td>
                        @if($alternativa->correta == 1)
                            <span class="oi oi-check" style="color: #2bdd18;" title="person" aria-hidden="true"></span>
                        @else
                            <span class="oi oi-x" style="color: red" title="person" aria-hidden="true"></span>
                        @endif

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
