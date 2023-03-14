
@extends('layouts.app')


@section('content')

    <div class="section-cards my-bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center my-5">
                        Laravel DC COMICS
                    </h1>
                    <a href="/" class="my-btn btn btn-primary">
                        Back to the Homepage
                   </a>
                    <div class="cards d-flex justify-content-between my-5">
                        @foreach ($comics as $comic)
                            <div class="card col-3">
                                <div>
                                    <img src="{{ $comic->thumb }}" class="my-img" alt="card"/>
                                </div>

                                <div class="my-text my-3">
                                    {{ $comic->title }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
