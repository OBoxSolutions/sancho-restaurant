@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
<vue-section>
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <h1>Subscríbase a nuestro buzón</h1>
            <p>Subscríbete a nuesrto buzón de correos para obtener correos cuando nuevas especialidades u ofertas se añadan al restaurante.</p>
            <form action="{{route('email.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Dirección de correo</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Entre su dirección de correo">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</vue-section>
<vue-back-to-top></vue-back-to-top>
@endsection
