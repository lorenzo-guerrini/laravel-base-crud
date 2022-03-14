@extends('layouts.base')

@section('title')
    {{ $comic->title }}
@endsection

@section('content')
    <div class="text-center">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>

    <ul>
        <li><strong>ID: </strong>{{ $comic->id }}</li>
        <li><strong>Type: </strong>{{ $comic->type }}</li>
        <li><strong>Series: </strong>{{ $comic->series }}</li>
        <li><strong>Sale Date: </strong>{{ $comic->sale_date }}</li>
        <li><strong>Price: </strong>{{ $comic->price }}€</li>
        <li><strong>Description: </strong>{!! $comic->description !!}</li>
    </ul>

    <div class="text-center pt-2">
        <a href="{{ route('comics.index') }}">
            <button type="button" class="btn btn-dark">Back</button>
        </a>
    </div>
@endsection
