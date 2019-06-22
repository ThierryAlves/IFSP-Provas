@extends('base')
@section('assets')
    <link href="{{ asset('css/cadastrar.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('main')
    <div class="flex-center position-ref full-height">
        <div class="content">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
            @endif
            <div class="wrapper">
                <div id="formContent">
                    <form class="form-horizontal" method="POST" action="{{ url('/cadastrar') }}">
                        @csrf
                        <input type="text" name="nome" placeholder="nome completo" required>
                        <input type="email" name="email" placeholder="email" required>
                        <input type="password" name="senha" placeholder="senha" required>
                        <input type="submit" value="Cadastrar">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
