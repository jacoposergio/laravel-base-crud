@extends('layouts.app')

@section('main_content')

<h1>crea il tuo prodotto</h1>

<form action="{{route('comics.store')}}" method="post">
    @csrf

    <div>
        <label for="title">Title</label>
        <input type="text" id="title" name="title">
      </div>
      <br>
  <div>
    <br>
    <div>
        <label for="description">Description</label>
        <textarea id="description" name="description" cols="30" rows="10" ></textarea>
      </div>
      <br>
  <div>
    <br>
    <label for="thumb">Url immagine</label>
    <input type="text" id="thumb" name="thumb">
  </div>
<br>
  <div>
    <label for="price">Price</label>
    <input type="text" id="price" name="price">
  </div>
  <br>

  <div>
    <label for="series">Series</label>
    <input type="text" id="series" name="series">
  </div>

  <br>
  <div>
    <label for="sale_date">Sala Date</label>
    <input type="text" id="sale_date" name="sale_date">
  </div>
  <br>
  <div>
    <label for="type">Type</label>
    <input type="text" id="type" name="type">
  </div>
  <br>


  <button>Salva</button>

</form>
    
@endsection