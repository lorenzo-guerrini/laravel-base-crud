@extends('layouts.base')

@section('title', 'Comics')

@section('content')
    <h1>Comics</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Comic</th>
                <th scope="col">Description</th>
                <th scope="col">Sale Date</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <div>
                            <strong>{{ $comic->title }}</strong>
                            ({{ $comic->type }})
                            <br>
                            {{ $comic->series }} series
                    <td>{!! $comic->description !!}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->price }}€</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
