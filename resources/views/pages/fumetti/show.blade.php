@extends('layouts.app')
@section('title-page', 'DC COMICS - show')
@section('main-content')

    <h1>{{ $elem->title }}</h1>

    <div>

        <p>
            {{ $elem->description }}
        </p>


    </div>

@endsection
