@extends('layout.app')

@section('main-content')
    <div class="container mt-5">
        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('put')

            <div class="mb-3">
                <label for="" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    placeholder="Inserisci il Titolo del fumetto" value="{{ $comic->title }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Img</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId"
                    placeholder="Inserisci l'immagine del fumetto" value="{{ $comic->thumb }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="helpId"
                    placeholder="Inserisci il Titolo del fumetto" value="{{ $comic->series }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                    placeholder="Inserisci il Titolo del fumetto" value="{{ $comic->price }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">sale date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="helpId"
                    placeholder="Inserisci il Titolo del fumetto" value="{{ $comic->sale_date }}" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="6">{{ $comic->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Update
            </button>


        </form>
    </div>
@endsection
