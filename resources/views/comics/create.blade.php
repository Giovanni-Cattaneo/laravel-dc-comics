@extends('layout.app')

@section('main-content')
    @include('partials.validation-errors')
    <div class="container mt-5">
        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    aria-describedby="helpId" placeholder="Inserisci il Titolo del fumetto" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Img</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    id="thumb" aria-describedby="helpId" placeholder="Inserisci l'immagine del fumetto" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    id="series" aria-describedby="helpId" placeholder="Inserisci il Titolo del fumetto" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" aria-describedby="helpId" placeholder="Inserisci il Titolo del fumetto" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">sale date</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    id="sale_date" aria-describedby="helpId" placeholder="Inserisci il Titolo del fumetto" />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="6"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Invia
            </button>


        </form>
    </div>
@endsection
