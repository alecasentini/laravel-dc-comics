@extends('layout\app')

@section('index')

<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <label for="title"></label>
    <input type="text" name="title" id="title">
    <label for="description"></label>
    <input type="text" name="description" id="description">
    <label for="thumb"></label>
    <input type="text" name="thumb" id="thumb">
    <label for="price"></label>
    <input type="text" name="price" id="price">
    <label for="series"></label>
    <input type="text" name="series" id="series">
    <label for="sales_date"></label>
    <input type="text" name="sales_date" id="sales_date">
    <label for="type"></label>
    <input type="text" name="type" id="type">
    <label for="artists"></label>
    <input type="text" name="artists" id="artists">

    <input type="submit" value="Invia">

</form>