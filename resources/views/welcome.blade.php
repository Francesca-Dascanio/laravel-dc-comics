
@extends('layouts.app')


@section('content')

    <div class="section-cards my-bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cards my-5">
                        <h1 class="text-center">
                            Laravel DC COMICS
                        </h1>
                    </div>
                    <a href="{{ route('comics.index') }}" class="my-btn btn btn-primary">
                        Load comics
                    </a>
                </div>
            </div>
        </div>
    </div>
    
@endsection
