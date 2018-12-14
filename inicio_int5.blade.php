@extends('layouts.app')

@section('elementos-navBar')
    <p style="color: orange"><</p>
    <a class="navbar-brand" href="{{ url('/inicio') }}" style="color: orange">
        Juegos
    </a>
    <p style="color: orange">|</p>
    <a class="navbar-brand " href="{{ url('/receta') }}" >
        Recetas
    </a>
@endsection

@section('content')
                <modalidades></modalidades>
@endsection