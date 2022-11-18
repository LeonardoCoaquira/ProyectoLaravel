@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nuestros libros 😍') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <b>{{ __('Bienvenido a Lotus!') }}</b>
                    <br>

                    
                    <div class="card" style="width: 20rem;">
  <img src="https://cosmobook.pe/wp-content/uploads/2022/07/8938e3868a3a64298f347667f27eb5ad.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Cura Mortal</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Ver mas</a>
  </div>
</div>

                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
