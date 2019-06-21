@extends('base')
@section('assets')
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
    @extends('navbar')
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
        <form class="form-horizontal" method="POST" action="{{ url('/professor/provas/inserir') }}">
            @csrf
            <label>
                Prova
                <input type="text" placeholder="Prova" name="descricao">
            </label>
            <label>
                Data de inicio
                <input type="date" name="data_inicio">
            </label>
            <label>
                Data final
                <input type="date" name="data_final">
            </label>
            <input type="submit">
        </form>
    </div>
@endsection
