@extends('layout.app')

@section('main-content')
    {{-- @dd($comics) --}}
    <div class="container">
        <div class="d-flex justify-content-between align-items-center py-3">
            <h2>Products</h2>
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Add</a>
        </div>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col"><img src="" alt="">Img</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Serie</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Data di Uscita</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr class="">
                            <td scope="row"><img src="{{ $comic->thumb }}" alt="" width="100"></td>
                            <td>{{ $comic->title }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td><a href="{{ route('comics.show', ['comic' => $comic]) }}">Show</a> / <a
                                    href="{{ route('comics.edit', $comic) }}">Edit</a> /
                                <a href="">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
