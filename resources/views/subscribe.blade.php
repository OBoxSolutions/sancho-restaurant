@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
<vue-section>
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <h1>Subscríbase a nuestro buzón</h1>
            <p>Subscríbete a nuesrto buzón de correos para obtener correos cuando nuevas especialidades u ofertas se añadan al restaurante.</p>
<<<<<<< HEAD
            <form action="{{route('email.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Dirección de correo</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Entre su dirección de correo">
=======
            <form action="/email/store" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Dirección de correo</label>
                    <input type="email" class="form-control @error('title') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="Entre su dirección de correo">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
>>>>>>> b57af749d58617333915ea45baf179054bbd6832
                </div>
                <app-golden-btn type="submit">Subscribirme</app-golden-btn>
            </form>
        </div>
    </div>
</vue-section>
<vue-back-to-top></vue-back-to-top>
@endsection
