@extends('layout\app')

@section('content')
<div class="container my-4">
    <h1 class="my-3">Index Comics</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Series</th>
                <th>Thumb</th>
                <th>Info</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
            <tr>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->series }}</td>
                <td>
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" width="100">
                </td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}">More info</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('comics.create') }}" class="btn btn-primary">Add Comic</a>
</div>
@endsection