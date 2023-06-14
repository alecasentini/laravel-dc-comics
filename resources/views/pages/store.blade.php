@extends('layout\app')

@section('index')
<h2>{{ $comic->title }}</h2>
<p>{{ $comic->series }}</p>
<img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
<p>Description: {{ $comic->description }}</p>
<p>Price: {{ $comic->price }}</p>
<p>Sale Date: {{ $comic->sale_date }}</p>
<p>Type: {{ $comic->type }}</p>

@endsection