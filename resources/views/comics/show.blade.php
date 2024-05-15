@extends('layout.app')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card text-start">
                    <img class="card-img-top" src="{{ $comicModel->thumb }}" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title">{{ $comicModel->title }}</h4>
                        <p class="card-text">Body</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
