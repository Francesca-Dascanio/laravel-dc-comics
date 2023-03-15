
@extends('layouts.app')


@section('content')

    <div class="section-cards my-bg-dark">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center my-5">
                        Laravel DC COMICS - All comics
                    </h1>
                    <a href="/" class="my-btn btn btn-primary">
                        Back to the Homepage
                   </a>
                    {{-- <div class="cards d-flex justify-content-start flex-wrap my-5">
                        @foreach ($comics as $comic)
                            <div class="card col-4 mb-3 g-3">
                                <div>
                                    <img src="{{ $comic->thumb }}" class="my-img" alt="card"/>
                                </div>

                                <div class="my-text my-3">
                                    {{ $comic->title }}
                                </div>

                                <a href="{{ route('comics.show', $comic->id)}}" class="my-btn btn btn-primary">
                                    Read details
                                </a>
                            </div>
                        @endforeach
                    </div> --}}

                    <table class="table my-5">
                        <thead>
                            <tr>
                                <th scope="col">
                                    #
                                </th>
                                <th scope="col">
                                    Title
                                </th>
                                <th scope="col">
                                    Price
                                </th>
                                <th scope="col">
                                    Series
                                </th>
                                <th scope="col">
                                    Sales Date
                                </th>
                                <th scope="col">
                                    Type
                                </th>
                                <th scope="col">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comics as $comic)
                                <tr>
                                    <th scope="row">
                                        {{ $comic->id }}
                                    </th>
                                    <td>
                                        {{ $comic->title }}
                                    </td>
                                    <td>
                                        {{ $comic->price }}
                                    </td>
                                    <td>
                                        {{ $comic->series }}
                                    </td>
                                    <td>
                                        {{ $comic->sale_date }}
                                    </td>
                                    <td>
                                        {{ $comic->type }}
                                    </td>
                                    <td>
                                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">
                                            View
                                        </a>
                                        <a href="{{ route('comics.edit', $comic->id)}}" class="btn btn-warning">
                                            Update
                                        </a>
                                        {{-- <a href="#" class="btn btn-danger">
                                            Delete
                                        </a> --}}
                                        <form
                                        class="d-inline"
                                        action="{{ route('comics.destroy', $comic->id) }}"
                                        method="POST">
                                        @csrf

                                        @method('DELETE')

                                            <button type="submit" class="btn btn-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>  
                            @endforeach
                        </tbody>
                    </table>

                    <div>
                        <a href="{{ route('comics.create')}}" class="my-btn btn btn-success my-5">
                            Add new comic
                       </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection
