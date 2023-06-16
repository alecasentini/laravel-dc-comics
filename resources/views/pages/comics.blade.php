@extends('layout\app')

@section('content')
<div class="container my-4">
    <h1 class="my-3">Index Comics</h1>

    @if( Session::has('success') )
    <div class="alert alert-success">
        {!! Session::get( 'success' ) !!}
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Series</th>
                <th>Thumb</th>
                <th>Info</th>
                <th>Modify</th>
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
                <td>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Edit</a>
                    <form action=" {{ route('comics.destroy',$comic->id) }} " method="POST" class="mt-2" onsubmit="return confirm('Are you sure you want to delete this comic?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('comics.create') }}" class="btn btn-primary">Add Comic</a>
</div>
@endsection