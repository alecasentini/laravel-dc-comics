@extends('layout\app')

@section('content')
<div class="container my-5">
    <h1 class="my-3">Add Comic</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="title" class="form-label @error('title') is-invalid @enderror">Title</label>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" style="height: 200px;" rows="10"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="price" class="form-label @error('price') is-invalid @enderror">Price</label>
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="series" class="form-label @error('series') is-invalid @enderror">Series</label>
            @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="series" id="series" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="sale_date" class="form-label @error('sale_date') is-invalid @enderror">Sale Date</label>
            @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="date" name="sale_date" id="sale_date" class="form-control" data-date="" data-date-format="YYYY MM DD">
        </div>
        <div class="form-group mb-3">
            <label for="type" class="form-label @error('type') is-invalid @enderror">Type</label>
            @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="text" name="type" id="type" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">Add

    </form>
</div>
@endsection