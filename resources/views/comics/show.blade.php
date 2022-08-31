@extends('layouts.app')

@section('main_content')

<h1>{{$comic->title}}</h1>

@if ($comic->description)
        <div>
            <p>{!! $comic->description !!}</p>
        </div>
    @endif
<br>
<div>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
</div>
<br>
<div>Prezzo: {{$comic->price}}$</div>
<br>
<div>Serie: {{$comic->series}}</div>
<br>
<div>Data acquisto: {{$comic->sale_date}}</div>
<br>
<div>Tipo: {{$comic->type}}</div>
    
@endsection