@extends('layouts.base')

@section('title', 'Comics')

@section('content')
    <h1>Comics</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Comic</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">More Info</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <div>
                            <strong>{{ $comic->title }}</strong>
                    <td>{!! $comic->description !!}</td>
                    <td>{{ $comic->price }}€</td>
                    <td><a href="{{ route('comics.show', $comic->id) }}"><button type="button"
                                class="btn btn-primary">Show</button></a></th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
