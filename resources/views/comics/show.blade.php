@extends('layouts.app')

@section('main_content')

<h1>{{$comic->title}}</h1>

<div>{{$comic->series}}</div>
<div>{{$comic->price}}</div>
    
@endsection