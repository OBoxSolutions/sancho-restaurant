@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')

<vue-back-to-top></vue-back-to-top>
<bootstrap-carousel></bootstrap-carousel>

<section>
  <vue-section>
    <div class="row">
      <div class="col-md-6">
        <img src="{{ asset('assets/phone.svg') }}" class="img-fluid" alt="A phone image" srcset="">
      </div>
      <div class="col-md-6">
        <h1>Llame ahora y reserve</h1>
        <h1>+69 6948694</h1>
      </div>
    </div>
  </vue-section>
</section>
<section>
  <vue-section>
    <div class="row">
      <div class="col-md-6">
                <h1>Subscríbase a nuestro buzón</h1>
                <p>Subscríbete a nuestor buzón de correos para obtener correos cuando nuevas especialidades u ofertas se añadan al restaurante.</p>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Dirección de correo</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entre su dirección de correo">
                    </div>
      <div class="col-md-6">
        <h1>Llame ahora y reserve</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum molestias ullam fuga quas soluta deleniti voluptatum odio, voluptas impedit sit id eveniet veritatis sunt delectus ipsa, facilis nihil, officia esse.</p>
        <a href="#">
          <button class="btn btn-danger">Ir a noticias</button>
        </a>
      </div>
    </div>
  </vue-section>
</section>
<!-- Menu section -->
<section>
    <vue-section class="bg-dark text-light">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ asset('assets/menu.svg') }}" class="img-fluid" alt="Imagen de noticias" srcset="">
            </div>
            <div class="col-md-5">
                <h1>Nuestro Menú</h1>
                <p>Descubra nuestra variedad de especialidades</p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2">
                <a href="#">
                    <button class="btn">Menú</button>
                </a>
            </div>
        </div>
    </vue-section>
</section>
<section>
  <vue-section class="mt-0 mb-0">
    <iframe src="https://maps.google.com/maps?q=35.856737, 10.606619&z=15&output=embed" width="100%" height="450" frameborder="0" style="border:0"></iframe> </vue-section>
</section>
@endsection
