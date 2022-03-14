@extends('layouts.base')

@section('title', 'New Comic')

@section('content')
    <h1>Create New Comic</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Comic's title">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" placeholder="Comic's description"></textarea>
        </div>

        <div class="form-group">
            <label for="thumb">Thumb URL</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Comic's thumb URL">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Comic's price">
        </div>

        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Comic's series">
        </div>

        <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Comic's type">
        </div>

        <button type="submit" class="btn btn-dark">Save</button>
        <a href="{{ route('comics.index') }}"><button type="button" class="btn btn-dark">Back</button></a>
    </form>
@endsection
