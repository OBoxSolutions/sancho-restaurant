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
    <vue-section>
        <div class="row">
            <div class="offset-md-3 col-md-6">
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
                <form action="email/store" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="email">Dirección de correo</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Entre su dirección de correo">
                    </div>
                    <button type="submit" class="btn btn-primary golden-btn">Subscribirme</button>
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
                    <a href="#">
                        <button class="btn golden-btn">Menú</button>
                    </a>
                </app-center-aligner>
            </div>
        </div>
    </vue-section>
</section>
<section>
    <vue-section class="mt-0 mb-0">
        <iframe src="https://maps.google.com/maps?q=35.856737, 10.606619&z=15&output=embed" width="100%" height="450" frameborder="0" style="border:0"></iframe> </vue-section>
</section>
@endsection
