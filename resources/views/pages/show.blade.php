@extends('layout\app')

@section('content')
<div class="container my-3">
    <h2>{{ $comic->title }}</h2>
    <p class="fw-bolder">{{ $comic->series }}</p>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" style="width:200px">
    <div class="mt-3">
        <p><span class="fw-bolder">Description:</span> {{ $comic->description }}</p>
        <p><span class="fw-bolder">Price:</span> {{ $comic->price }}</p>
        <p><span class="fw-bolder">Sale Date:</span> {{ $comic->sale_date }}</p>
        <p><span class="fw-bolder">Type:</span> {{ $comic->type }}</p>
    </div>

</div>


@endsection