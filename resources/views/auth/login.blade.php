@extends('adminlte::auth.auth-page', ['auth_type' => 'login'])

@section('auth_body')
<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-envelope"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">Recordarme</label>
            </div>
        </div>
        <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
        </div>
    </div>
</form>
@endsection