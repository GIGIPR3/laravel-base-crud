@extends('layouts.app')
@section('title-page', 'DC COMICS - lista')
@section('main-content')

    <h1>Lista dei fumetti</h1>

    <div>
        <a href="{{ route('fumetti.create') }}">Crea Fumetto</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">price</th>
                <th scope="col">sale_date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($comic as $elem)
                <tr>
                    <td>{{ $elem->id }}</td>
                    <td>
                        <a href="{{ route('fumetti.show', $elem->id) }}">
                            {{ $elem->title }}
                        </a>
                    </td>
                    <td>{{ $elem->description }}</td>
                    <td>{{ $elem->price }}</td>
                    <td>{{ $elem->sale_date }}</td>
                    <td class="">
                        <form action="{{ route('fumetti.destroy', $elem->id) }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>

                        <div>
                            <a href="{{ route('fumetti.edit', $elem->id) }}">
                                <button type="button" class="btn btn-primary"><i class="fa-solid fa-pen m-auto"></i></button>
                            </a>
                        </div>



                    </td>
                </tr>
            @endforeach



        </tbody>
    </table>



    {{ $comic->links() }}
@endsection
