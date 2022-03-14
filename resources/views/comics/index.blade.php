@extends('layouts.base')

@section('title', 'Comics')

@section('content')
    <h1>Comics</h1>
    <a href="{{ route('comics.create') }}"><button type="button" class="btn btn-success">New Comic</button></a>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Comic</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Actions</th>
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
                    <td>
                        <a href="{{ route('comics.show', $comic->id) }}"><button type="button"
                                class="btn btn-dark">More info</button></a>
                        <a href="{{ route('comics.edit', $comic->id) }}"><button type="button"
                                class="btn btn-warning">Edit</button></a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
