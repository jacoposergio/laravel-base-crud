@extends('layouts.app')

@section('main_content')
    <h1>Scopri i nostri nostri fumetti</h1>

    @foreach ($comics as $comic)
    <div>
        <div>Nome: {{ $comic->title }}</div>
        <div>Tipo: {{ $comic->series }}</div>
        <div>
            {{-- <a href="{{ route('pastas.show', ['pasta' => $pasta->id]) }}">Dettagli prodotto</a> --}}
        </div>
    </div>
        
    @endforeach
@endsection