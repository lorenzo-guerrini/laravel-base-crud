@extends('layouts.base')

@section('title', 'Comics')

@section('content')
    <div class="text-center py-4">
        <a href="{{ route('comics.create') }}">
            <button type="button" class="btn btn-success">New Comic</button>
        </a>
    </div>

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

                    <td>
                        <div class="mb-2">
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        </div>
                        <div>
                            <strong>{{ $comic->title }}</strong>
                        </div>
                    </td>

                    <td>{!! $comic->description !!}</td>

                    <td><strong>{{ $comic->price }}€</strong></td>

                    <td class="text-center">
                        <div class="mb-3">
                            <a href="{{ route('comics.show', $comic->id) }}">
                                <button type="button" class="btn btn-primary">More
                                    info</button>
                            </a>
                        </div>

                        <div class="mb-3">
                            <a href="{{ route('comics.edit', $comic->id) }}">
                                <button type="button" class="btn btn-primary">Edit</button>
                            </a>
                        </div>

                        <div class="mb-3">
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>

                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
