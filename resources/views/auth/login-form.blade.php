@extends('layouts.main')

@section('title', 'Inicio de Sesion')

@section('content')

<div>
    <div>
        <h1>Ingresar a mi cuenta</h1>
            <form action="{{ route('auth.login.process') }}" method="POST">
                @csrf
                <div>
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}">
                </div>
                <div>
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password">
                </div>
                <button type="submit">Ingresar</button>
            </form>
    </div>
</div>

@endsection
