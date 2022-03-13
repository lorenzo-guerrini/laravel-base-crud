@extends('layouts.base')

@section('title')
    {{ $comic->title }}
@endsection

@section('content')
    <h1>{{ $comic->title }}</h1>
    <ul>
        <li><strong>Type: </strong>{{ $comic->type }}</li>
        <li><strong>Series: </strong>{{ $comic->series }}</li>
        <li><strong>Sale Date: </strong>{{ $comic->sale_date }}</li>
    </ul>
    <a href="{{ route('comics.index') }}"><button type="button" class="btn btn-primary">Back</button></a>
@endsection
