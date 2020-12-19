@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
<vue-back-to-top></vue-back-to-top>
<section>
    <vue-section class="bg-white">
        <div class="row">
            <div class="col-md-6">
                <div class="pt-5 mt-5">
                    <h5>
                        Location
                    </h5>
                    <p>

                        123 Willow Street
                        Austin, TX 78702
                    </p>
                </div>
                <div class="pt-5 mt-5">
                    <h5>
                        Horario

                    </h5>
                    <p>
                        Martes-viernes 12:00–22:30 | sábado 12:00–23:00 | domingo 14:00 22:00

                    </p>
                    <p>
                        Lunes cerrado
                    </p>
                </div>
                <div class="pt-5 mt-5">
                    <h5>
                        Contactos
                    </h5>
                    <p>
                        Teléfono 05 3087308
                    </p>
                    <p>
                        Mail sancho@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <iframe src="https://maps.google.com/maps?q=35.856737, 10.606619&z=15&output=embed" width="100%" height="550" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
    </vue-section>
</section>
@endsection
