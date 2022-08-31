@extends('layouts.app')

@section('main_content')
    <h1>Scopri i nostri nostri fumetti</h1>

    @foreach ($comics as $comic)
    <div>
        <div>Nome: {{ $comic->title }}</div>
        <div>Tipo: {{ $comic->series }}</div>
        <div>
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">Dettagli prodotto</a>
        </div>
        <div>
            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Modifica prodotto</a>
        </div>
    </div>
        
    @endforeach
@endsection