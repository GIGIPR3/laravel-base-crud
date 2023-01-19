@extends('layouts.app')
@section('title-page', 'DC COMICS - Home')
@section('main-content')

    <h1>Lista dei fumetti</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">price</th>
            <th scope="col">sale_date</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($comic as $elem)

                <tr>
                    <td>{{ $elem->id }}</td>
                    <td>{{ $elem->title }}</td>
                    <td>{{ $elem->description }}</td>
                    <td>{{ $elem->price }}</td>
                    <td>{{ $elem->sale_date }}</td>
                </tr>

            @endforeach



        </tbody>
      </table>

@endsection
