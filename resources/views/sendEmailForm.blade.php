@extends('layouts.app')

@section('route', Route::currentRouteName())

@section('content')
<vue-back-to-top></vue-back-to-top>
<section>
    <vue-section>
        <form action="/email/send" method="post">
            @csrf
            <div class="form-group">
                <label for="emailBody">Cuerpo del correo</label>
                <textarea class="form-control" name="emailBody" id="emailBody" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </vue-section>
</section>
@endsection
