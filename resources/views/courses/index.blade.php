@extends('layouts.app')

@section('content')
    <h1>Listado de cursos</h1>
    <ul>
        @foreach($courses as $course)
            <li>{{ $course->title }} - Duracion: {{ $course->duration}} horas</li>
        @endforeach

    </ul>
@endsection