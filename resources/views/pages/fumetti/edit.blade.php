@extends('layouts.app')
@section('title-page', 'DC COMICS - edit')
@section('main-content')

    <h1>Modifica Fumetto</h1>

    <form method="POST" action="{{route('fumetti.update', $comic->id)}}">

        @csrf
        @method('PUT')

        <div class="mb-3">
          <label class="form-label">Titolo</label>
          <input name="title" type="text" class="form-control" id="title" value="{{ $comic->title }}">
        </div>

        <div class="mb-3">
            <label for="form-label">Description</label>
            <textarea name="description" class="form-control"  type="text" id="">
                {{ $comic->description }}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="form-label">Price</label>
            <input name="price" type="text" id="" class="form-control" value="{{ $comic->price }}">
        </div>
        <div class="mb-3">
            <label for="form-label">sale_date</label>
            <input name="sale_date" type="text" id="" class="form-control" value="{{ $comic->sale_date }}">
        </div>







        <button type="submit" class="btn btn-primary">Modifica Fumetto</button>
      </form>

@endsection
