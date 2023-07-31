@extends('layouts.app')

@section('content')

    <div>
        <img class="jumbotron" src="{{ Vite::asset('resources/images/jumbotron.jpg') }}" alt="jumbo">
    </div>

    <div class="bg-serie">
        <div class="container">
            <div class="row position">
                @forelse($comics as $comic)
                <div class="col-12 col-md-6 col-lg-2 my-3">
                    
                        <div class="my-card">
                            <img class="img-fluid img-comic" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                            <div class="card-body">
                                <span><h4 class="title_h4">{{ $comic->series }}</h4></span>
                            </div>
                        </div>
    
                </div>
                @empty
                <div class="col-12">
                    Sorry, page not found
                </div>
                @endforelse
                <div class="col-12 d-flex justify-content-center">
                    <button class="btn-load">LOAD MORE</button>
                </div>
                <div class="current_series">
                    CURRENT SERIES
                </div>
            </div>
        </div>
    </div>

@endsection