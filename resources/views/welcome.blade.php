
@extends('layouts.app')


@section('content')

    <div class="section-cards my-bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cards d-flex justify-content-between flex-wrap my-5">
                        @foreach ($comics as $comic)
                            <div class="my-card my-card-size">
                                <div>
                                    <img src="https://6.allegroimg.com/s1024/0cc9e1/a3a876424ac0800c035888f73286" class="my-card-img" alt="card"/>
                                </div>

                                <div class="my-text">
                                    {{ $comic->title }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="my-btn btn btn-primary" type="button">
                        Load more
                    </button>
                </div>
            </div>
        </div>
    </div>
    
@endsection
