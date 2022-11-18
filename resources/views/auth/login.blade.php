@extends('layouts.app')

@section('content')

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1"><b>We are The Lotus Team</b></h4>
                </div>

                <form>
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="Username" />
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control"
                       placeholder="Password" />
                  </div>

                  <div class="form-control" style= "background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);" class="text-center pt-1 mb-5 pb-1">
                    <button class="form-control" style= "color:white; background-color: transparent; border:none" type="button" href="/resources/views/home.blade.php"><b>LOG
                      IN</b></button>
                  </div>
                  <br>
                  <div class=text-center pt-1 mb-5 pb-1>
                    <a class="text-muted" href="./password/reset">Forgot password?</a>
                  </div>

                </form>

              </div>
            </div>
            <div style = " background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);" class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div style="color:white;" class="text- px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4"> <b>Lotus - "ven vamos al psicologo"</b></h4>
                <p class="small mb-0">Si leer es uno de sus grandes intereses
                 o está en busca de mejorar su hábito a la lectura, esta página le ayudará porque 
                 pondrán a su disposición miles de opciones en la palma de su mano.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection