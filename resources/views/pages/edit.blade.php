@extends('layout\app')

@section('content')
<div class="container my-5">
    <h1 class="my-3">Edit Comic</h1>
    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
        @csrf

        @method ('PUT')

        <div class="form-group mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{$comic->title}}">
        </div>
        <div class="form-group mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" style="height: 200px;" rows="10" cols="50">{{$comic->description}}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control" value="{{$comic->thumb}}">
        </div>
        <div class="form-group mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" id="price" class="form-control" value="{{$comic->price}}">
        </div>
        <div class="form-group mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control" value="{{$comic->series}}">
        </div>
        <div class="form-group mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control" data-date="" data-date-format="YYYY MM DD" value="{{$comic->sale_date}}">
        </div>
        <div class="form-group mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control" value="{{$comic->type}}">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Save

    </form>
</div>
@endsection