@extends('layout.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card w-25">
                    <img class="card-img-top" src="{{ $comic->thumb }}" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">{{ $comic->title }}</h4>
                        <p class="card-text">{{ $comic->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
