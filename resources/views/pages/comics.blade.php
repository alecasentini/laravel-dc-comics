@extends('layout\app')

@section('index')
<div class="container">
    <h1>Comic List</h1>

    <ul>
        @foreach($comics as $comic)
        <li>
            <h2>{{ $comic->title }}</h2>
            <p>{{ $comic->series }}</p>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </li>
        @endforeach
    </ul>
</div>
@endsection