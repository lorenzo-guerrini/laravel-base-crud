@extends('layouts.base')

@section('title')
    Edit {{ $comic->title }}
@endsection

@section('content')
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}"
                placeholder="Comic's title">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" style="height: 150px" id="description" name="description"
                placeholder="Comic's description">{{ $comic->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="thumb">Thumb URL</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}"
                placeholder="Comic's thumb URL">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $comic->price }}"
                placeholder="Comic's price">
        </div>

        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}"
                placeholder="Comic's series">
        </div>

        <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}"
                placeholder="Comic's type">
        </div>

        <div class="text-center pt-2">
            <button type="submit" class="btn btn-success mx-2">Save</button>

            <a class="mx-2" href="{{ route('comics.index') }}">
                <button type="button" class="btn btn-danger">Back</button>
            </a>
        </div>
    </form>
@endsection
