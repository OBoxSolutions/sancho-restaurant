@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
<vue-back-to-top></vue-back-to-top>
<section>
    <vue-section>
        <h5>
            Location
        </h5>
        <p>

            123 Willow Street
            Austin, TX 78702
        </p>
    </vue-section>
    <vue-section>
        <h5>
            Horario

        </h5>
        <p>
            Martes-viernes 12:00–22:30 | sábado 12:00–23:00 | domingo 14:00 22:00

        </p>
        <p>
            Lunes cerrado
        </p>
    </vue-section>
    <vue-section>
        <h5>
            Contactos
        </h5>
        <p>
            Teléfono 05 3087308
        </p>
        <p>
            Mail sancho@gmail.com
        </p>
    </vue-section>
</section>
@endsection
