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
            <form action="{{ route('uploadBook') }}" method="POST" enctype="multipart/form-data" class="row g-4">
                @csrf
                <label for="staticEmail2">Subir Un Libro</label>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
                    <input type="text" class="form-control" name="description" placeholder="Agregue una descripcion">
                </div>
                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label">Carátula</label>
                    <input class="form-control" type="file" name="cover">
                </div>
                <div class="col-auto">
                    <label for="exampleFormControlInput1" class="form-label">Libro</label>
                    <input class="form-control" type="file" name="book">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="title" placeholder="Titulo de la obra">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Autor</label>
                    <input type="text" class="form-control" name="author" placeholder="Autor de la obra">
                </div>
                
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Subir</button>
                </div>
            </form>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($books as $book)
                <div class="col">
                    <div class="card shadow-sm">
                        <img height="200" src="{{ asset("/books/cover/$book->routeCover") }}" alt="Imagen">
                        <div class="card-body">
                            <p class="card-text">
                                <a target="_blank" class="stretched-link text-danger" href="{{ asset("/books/book/$book->routeBook") }}">Descargar PDF</a>
                            </p>
                            <p class="card-text">{{$book->description}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <form method="POST" action="{{ route('deleteBook') }}">
                                    @csrf
                                    <div class="btn-group">
                                        <input type="hidden" name="id_book" value="{{$book->id}}">
                                        <button type="submit" class="btn btn-sm btn-outline-secondary">Eliminar</button>
                                    </div>
                                </form>
                                <small class="text-muted">{{$book->created_at}}</small>
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