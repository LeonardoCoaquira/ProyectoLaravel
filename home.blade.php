@extends('layouts.app')

@section('content')
    <style>
        .valoracion {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .valoracion input {
            position: absolute;
            top: -100px;
        }


        .valoracion label {
            float: right;
            color: #c1b8b8;
            font-size: 30px;
        }

        .valoracion label:hover,
        .valoracion label:hover~label,
        .valoracion input:checked~label {
            color: #ffff00;
        }
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ __('Nuestros libros 😍') }}</h2>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <b>
                            <h3>{{ __('Bienvenido a Lotus!') }}</h3>
                        </b>
                        <br>
                        <!-- Primer grupo de cartas -->
                        <div class="card-group">
                            <div class="card">
                                <img src="https://cosmobook.pe/wp-content/uploads/2022/07/8938e3868a3a64298f347667f27eb5ad.jpg"
                                    class="card-img-top" alt=".img">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo: Cura Mortal</h5>
                                    <h5 class="card-title">Autor: James Dashner</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxwb3J0YWZvbGlvcHJvZnlhZmlyfGd4OjJjNGFiOWFjYTJjODIwNjE"
                                        class="btn btn-primary" target="_blank">Libro-completo(pdf)</a>
                                    <div class="valoracion">
                                        <input id="radio1" type="radio" name="estrellas" value="5">
                                        <label for="radio1">★</label>

                                        <input id="radio2" type="radio" name="estrellas" value="4">
                                        <label for="radio2">★</label>

                                        <input id="radio3" type="radio" name="estrellas" value="3">
                                        <label for="radio3">★</label>

                                        <input id="radio4" type="radio" name="estrellas" value="2">
                                        <label for="radio4">★</label>

                                        <input id="radio5" type="radio" name="estrellas" value="1">
                                        <label for="radio5">★</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://www.alianzaeditorial.es/imagenes/libros/grande/9788420651361-la-metamorfosis.jpg"
                                    class="card-img-top" alt=".img">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo: Cura Mortal</h5>
                                    <h5 class="card-title">Autor: James Dashner</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxwb3J0YWZvbGlvcHJvZnlhZmlyfGd4OjJjNGFiOWFjYTJjODIwNjE"
                                        class="btn btn-primary" target="_blank">Libro-completo(pdf)</a>
                                    <div class="valoracion">
                                        <input id="radio1" type="radio" name="estrellas" value="5">
                                        <label for="radio1">★</label>

                                        <input id="radio2" type="radio" name="estrellas" value="4">
                                        <label for="radio2">★</label>

                                        <input id="radio3" type="radio" name="estrellas" value="3">
                                        <label for="radio3">★</label>

                                        <input id="radio4" type="radio" name="estrellas" value="2">
                                        <label for="radio4">★</label>

                                        <input id="radio5" type="radio" name="estrellas" value="1">
                                        <label for="radio5">★</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://www.alianzaeditorial.es/imagenes/libros/grande/9788420651361-la-metamorfosis.jpg"
                                    class="card-img-top" alt=".img">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo: Cura Mortal</h5>
                                    <h5 class="card-title">Autor: James Dashner</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxwb3J0YWZvbGlvcHJvZnlhZmlyfGd4OjJjNGFiOWFjYTJjODIwNjE"
                                        class="btn btn-primary" target="_blank">Libro-completo(pdf)</a>
                                    <div class="valoracion">
                                        <input id="radio1" type="radio" name="estrellas" value="5">
                                        <label for="radio1">★</label>

                                        <input id="radio2" type="radio" name="estrellas" value="4">
                                        <label for="radio2">★</label>

                                        <input id="radio3" type="radio" name="estrellas" value="3">
                                        <label for="radio3">★</label>

                                        <input id="radio4" type="radio" name="estrellas" value="2">
                                        <label for="radio4">★</label>

                                        <input id="radio5" type="radio" name="estrellas" value="1">
                                        <label for="radio5">★</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Segundo grupo de cartas -->
                        <div class="card-group">
                            <div class="card">
                                <img src="https://cosmobook.pe/wp-content/uploads/2022/07/8938e3868a3a64298f347667f27eb5ad.jpg"
                                    class="card-img-top" alt=".img">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo: Cura Mortal</h5>
                                    <h5 class="card-title">Autor: James Dashner</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxwb3J0YWZvbGlvcHJvZnlhZmlyfGd4OjJjNGFiOWFjYTJjODIwNjE"
                                        class="btn btn-primary" target="_blank">Libro-completo(pdf)</a>
                                    <div class="valoracion">
                                        <input id="radio1" type="radio" name="estrellas" value="5">
                                        <label for="radio1">★</label>

                                        <input id="radio2" type="radio" name="estrellas" value="4">
                                        <label for="radio2">★</label>

                                        <input id="radio3" type="radio" name="estrellas" value="3">
                                        <label for="radio3">★</label>

                                        <input id="radio4" type="radio" name="estrellas" value="2">
                                        <label for="radio4">★</label>

                                        <input id="radio5" type="radio" name="estrellas" value="1">
                                        <label for="radio5">★</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://www.alianzaeditorial.es/imagenes/libros/grande/9788420651361-la-metamorfosis.jpg"
                                    class="card-img-top" alt=".img">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo: Cura Mortal</h5>
                                    <h5 class="card-title">Autor: James Dashner</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxwb3J0YWZvbGlvcHJvZnlhZmlyfGd4OjJjNGFiOWFjYTJjODIwNjE"
                                        class="btn btn-primary" target="_blank">Libro-completo(pdf)</a>
                                    <div class="valoracion">
                                        <input id="radio1" type="radio" name="estrellas" value="5">
                                        <label for="radio1">★</label>

                                        <input id="radio2" type="radio" name="estrellas" value="4">
                                        <label for="radio2">★</label>

                                        <input id="radio3" type="radio" name="estrellas" value="3">
                                        <label for="radio3">★</label>

                                        <input id="radio4" type="radio" name="estrellas" value="2">
                                        <label for="radio4">★</label>

                                        <input id="radio5" type="radio" name="estrellas" value="1">
                                        <label for="radio5">★</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://www.alianzaeditorial.es/imagenes/libros/grande/9788420651361-la-metamorfosis.jpg"
                                    class="card-img-top" alt=".img">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo: Cura Mortal</h5>
                                    <h5 class="card-title">Autor: James Dashner</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxwb3J0YWZvbGlvcHJvZnlhZmlyfGd4OjJjNGFiOWFjYTJjODIwNjE"
                                        class="btn btn-primary" target="_blank">Libro-completo(pdf)</a>
                                    <div class="valoracion">
                                        <input id="radio1" type="radio" name="estrellas" value="5">
                                        <label for="radio1">★</label>

                                        <input id="radio2" type="radio" name="estrellas" value="4">
                                        <label for="radio2">★</label>

                                        <input id="radio3" type="radio" name="estrellas" value="3">
                                        <label for="radio3">★</label>

                                        <input id="radio4" type="radio" name="estrellas" value="2">
                                        <label for="radio4">★</label>

                                        <input id="radio5" type="radio" name="estrellas" value="1">
                                        <label for="radio5">★</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tercer grupo de cartas -->
                        <div class="card-group">
                            <div class="card">
                                <img src="https://cosmobook.pe/wp-content/uploads/2022/07/8938e3868a3a64298f347667f27eb5ad.jpg"
                                    class="card-img-top" alt=".img">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo: Cura Mortal</h5>
                                    <h5 class="card-title">Autor: James Dashner</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxwb3J0YWZvbGlvcHJvZnlhZmlyfGd4OjJjNGFiOWFjYTJjODIwNjE"
                                        class="btn btn-primary" target="_blank">Libro-completo(pdf)</a>
                                    <div class="valoracion">
                                        <input id="radio1" type="radio" name="estrellas" value="5">
                                        <label for="radio1">★</label>

                                        <input id="radio2" type="radio" name="estrellas" value="4">
                                        <label for="radio2">★</label>

                                        <input id="radio3" type="radio" name="estrellas" value="3">
                                        <label for="radio3">★</label>

                                        <input id="radio4" type="radio" name="estrellas" value="2">
                                        <label for="radio4">★</label>

                                        <input id="radio5" type="radio" name="estrellas" value="1">
                                        <label for="radio5">★</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://www.alianzaeditorial.es/imagenes/libros/grande/9788420651361-la-metamorfosis.jpg"
                                    class="card-img-top" alt=".img">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo: Cura Mortal</h5>
                                    <h5 class="card-title">Autor: James Dashner</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxwb3J0YWZvbGlvcHJvZnlhZmlyfGd4OjJjNGFiOWFjYTJjODIwNjE"
                                        class="btn btn-primary" target="_blank">Libro-completo(pdf)</a>
                                    <div class="valoracion">
                                        <input id="radio1" type="radio" name="estrellas" value="5">
                                        <label for="radio1">★</label>

                                        <input id="radio2" type="radio" name="estrellas" value="4">
                                        <label for="radio2">★</label>

                                        <input id="radio3" type="radio" name="estrellas" value="3">
                                        <label for="radio3">★</label>

                                        <input id="radio4" type="radio" name="estrellas" value="2">
                                        <label for="radio4">★</label>

                                        <input id="radio5" type="radio" name="estrellas" value="1">
                                        <label for="radio5">★</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://www.alianzaeditorial.es/imagenes/libros/grande/9788420651361-la-metamorfosis.jpg"
                                    class="card-img-top" alt=".img">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo: Cura Mortal</h5>
                                    <h5 class="card-title">Autor: James Dashner</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the
                                        bulk of the card's content.</p>
                                    <a href="https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxwb3J0YWZvbGlvcHJvZnlhZmlyfGd4OjJjNGFiOWFjYTJjODIwNjE"
                                        class="btn btn-primary" target="_blank">Libro-completo(pdf)</a>
                                    <div class="valoracion">
                                        <input id="radio1" type="radio" name="estrellas" value="5">
                                        <label for="radio1">★</label>

                                        <input id="radio2" type="radio" name="estrellas" value="4">
                                        <label for="radio2">★</label>

                                        <input id="radio3" type="radio" name="estrellas" value="3">
                                        <label for="radio3">★</label>

                                        <input id="radio4" type="radio" name="estrellas" value="2">
                                        <label for="radio4">★</label>

                                        <input id="radio5" type="radio" name="estrellas" value="1">
                                        <label for="radio5">★</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Cuarto grupo de cartas -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
