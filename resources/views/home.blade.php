@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')

<vue-back-to-top></vue-back-to-top>
<bootstrap-carousel></bootstrap-carousel>

<section>
  <!-- Call to reserve section -->
  <vue-section class="bg-primary-color text-light">
    <div class="row">
      <div class="col-md-6">
        <img src="{{ asset('assets/phone.svg') }}" class="img-fluid" alt="A phone image" srcset="">
      </div>
      <div class="col-md-6 align-text-bottom">
        <app-center-aligner>
          <h1>Llame ahora y reserve</h1>
          <h1>+69 6948694</h1>
        </app-center-aligner>
      </div>
    </div>
  </vue-section>
  <!-- Resumen section -->
  <vue-section class="">
    <div class="row welcome_board">
      <div class="offset-md-3 col-md-6 ">
        <h1>
          Bienvenido a Sancho Restaurant
        </h1>
        <h2>
          La casa del cochinillo en Miami
        </h2>
        <p>
          Bienvenido al Sancho Restaurant, donde nuestra especialidad es la deliciosa cocina creada con el ingenio y la pasión, inspirados en los fantásticos sabores de España. Nos enorgullecemos de mejorar sus platos españoles favoritos de maneras nuevas y creativas. ¡Venga y experimente la cocina española a nuestra manera!
        </p>
        <h1>

          LLAME AHORA (305) 553-6886
        </h1>

      </div>
    </div>
  </vue-section>
</section>
<!-- Hours section -->
<section>
  <vue-section class="bg-primary-color text-light">
    <div class="row">
      <div class="col-md-3">
        <img src="{{ asset('assets/clock.svg') }}" class="img-fluid" alt="A phone image" srcset="">
      </div>
      <div class="offset-md-3 col-md-6">
        <app-center-aligner>

          <h1>Horario</h1>
          <p>
            Martes-viernes 12:00–22:30 | sábado 12:00–23:00 | domingo 14:00 22:00
          </p>
          <h3>Lunes cerrado</h3>
        </app-center-aligner>
      </div>
    </div>
  </vue-section>
</section>
<!-- Subscribe section -->
<section>
  <vue-section-background-image background-image="{{ asset('assets/pizza-right-side.jpg') }}">
    <div class="row">
      <div class="col-md-6">
        <h1>Subscríbase a nuestro buzón</h1>
        <p>Subscríbete a nuestor buzón de correos para obtener correos cuando nuevas especialidades u ofertas se añadan al restaurante.</p>
        <form action="{{route('email.store')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="email">Dirección de correo</label>
            <input type="email" class="form-control @error('title') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="Entre su dirección de correo">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
          </div>
          <app-golden-btn size="large">Subscribirme</app-golden-btn>
        </form>
      </div>
    </div>
  </vue-section-background-image>
</section>
<!-- Menu section -->
<section>
  <vue-section class="bg-primary-color text-light">
    <div class="row">
      <div class="col-md-3">
        <img src="{{ asset('assets/menu.svg') }}" class="img-fluid" alt="Imagen de noticias" srcset="">
      </div>
      <div class="col-md-5">
        <app-center-aligner>
          <h1>Nuestro Menú</h1>
          <p>Descubra nuestra variedad de especialidades</p>
        </app-center-aligner>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-2">
        <app-center-aligner>
          <a href="{{ route('menu') }}">
            <app-golden-btn size="large">Menú</app-golden-btn>
          </a>
        </app-center-aligner>
      </div>
    </div>
    <h2 class="mt-5 pt-5">Nuestros favoritos</h2>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <vue-menu-item title="Jamón Ibérico de Bellota 5 Jotas">
          Jamón cocinado a la ibérica, un plato delicioso y aún mas acompañada por uno de nuestros vinos
        </vue-menu-item>

      </div>
      <div class="col-md-6">

        <vue-menu-item title="Queso Manchego">
          Jamón cocinado a la ibérica, un plato delicioso y aún mas acompañada por uno de nuestros vinos
        </vue-menu-item>
      </div>
      <div class="col-md-6">
        <vue-menu-item title="Boquerones a la Vinagreta">
          Jamón cocinado a la ibérica, un plato delicioso y aún mas acompañada por uno de nuestros vinos
        </vue-menu-item>

      </div>
      <div class="col-md-6">
        <vue-menu-item title="Pulpo a la Vinagreta">
          Jamón cocinado a la ibérica, un plato delicioso y aún mas acompañada por uno de nuestros vinos
        </vue-menu-item>
      </div>
      <div class="col-md-6">

        <vue-menu-item title="Jamón Serrano">
          Jamón cocinado a la ibérica, un plato delicioso y aún mas acompañada por uno de nuestros vinos
        </vue-menu-item>
      </div>
    </div>
  </vue-section>
</section>
<section>
  <vue-section class="mt-0 mb-0">
    <iframe src="https://maps.google.com/maps?q=35.856737, 10.606619&z=15&output=embed" width="100%" height="450" frameborder="0" style="border:0"></iframe> </vue-section>
</section>
@endsection