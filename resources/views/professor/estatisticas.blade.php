@extends('base')
@section('assets')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{{ URL::asset('js/provas/graficos.js') }}"></script>
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
        <div class="container">
            <script>
                var dados = @json($resultados->toArray());
            </script>
            <div id="chart_div"></div>
        </div>
    </div>
@endsection
