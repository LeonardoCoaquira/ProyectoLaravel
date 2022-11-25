@extends('layouts.app')

@section('content')
<main>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($books as $book)
                <div class="col">
                    <div class="card shadow-sm">
                        <img height="200" src="/book/cover/{{$book->routeCover}}" alt="Imagen">
                        <div class="card-body">
                            <p class="card-text">{{$book->description}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <p> <i class="bi bi-chat-dots"></i>
                                        <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample{{$book->id}}" aria-expanded="false" aria-controls="collapseExample">
                                            <x-bi-chat class="text-primary" /> {{count($book->review)}}
                                        </button>
                                    </p>
                                </div>
                                <small class="text-muted">{{$book->User->name}}</small>
                            </div>
                            <div class="collapse" id="collapseExample{{$book->id}}">
                                @foreach($book->review as $review)
                                <div class="card card-body">
                                    {{$review->review}}
                                </div>
                                <small class="text-muted">{{$review->User->name}}</small>
                                @endforeach
                                <form method="POST" action="{{ route('uploadReview') }}" >
                                @csrf
                                    <div class="form-group">
                                        <div class="mt-2 row g-3">
                                            <div class="col-9">
                                                <input type="text" class="form-control" name="review" aria-describedby="emailHelp" placeholder="Ingrese su reseña">
                                            </div>
                                            <div class="col-2">
                                            <input type="hidden" name="id_book" value="{{$book->id}}">
                                                <button type="submit" class="btn btn-primary">
                                                    <x-bi-send />
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</main>
@endsection