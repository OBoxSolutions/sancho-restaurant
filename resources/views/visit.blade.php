@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
<vue-back-to-top></vue-back-to-top>
<section>
    <vue-section>
        Location

        123 Willow Street
        Austin, TX 78702
    </vue-section>
    <vue-section>
        Horario
        Martes-viernes 12:00–22:30 | sábado 12:00–23:00 | domingo 14:00 22:00

        Lunes cerrado
    </vue-section>
    <vue-section>
        Teléfono
        05 3087308
    </vue-section>
</section>
@endsection
