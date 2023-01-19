@extends('layouts.app')
@section('title-page', 'DC COMICS - create')
@section('main-content')

    <h1>Form per la Create</h1>

    <form method="POST" action="{{route('fumetti.store')}}">

        @csrf

        <div class="mb-3">
          <label class="form-label">Titolo</label>
          <input name="title" type="text" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label for="form-label">Description</label>
            <textarea name="description" class="form-control"  type="text" id=""></textarea>
        </div>
        <div class="mb-3">
            <label for="form-label">Price</label>
            <input name="price" type="text" id="" class="form-control"></input>
        </div>
        <div class="mb-3">
            <label for="form-label">sale_date</label>
            <input name="sale_date" type="text" id="" class="form-control"></input>
        </div>







        <button type="submit" class="btn btn-primary">Cea Fumetto</button>
      </form>

@endsection
