@extends('formatoEstudiantes')

@section('titulo','Estudiantes')

@section('contenido')
    <h1 class="page-header" align="center">Estudiantes</h1>
    <table class ="table table-bordered">
        <tr>
            <td><b>Pregunta</b></td>
            <td><b>a) </b></td>
            <td><b>b) </b></td>
            <td><b>c) </b></td>
            <td><b>d) </b></td>

        </tr>

        @foreach($listaEstudiantes as $estudiante)

            <tr>
                <td> <a method = 'GET' href="/preguntas/{{id}}"    ></td>
                <td>{{$pregunta->pregunta}}</td>
                <td>{{$pregunta->respuesta1}}</td>
                <td>{{$pregunta->respuesta2}}</td>
                <td>{{$pregunta->respuesta3}}</td>
                <td>{{$pregunta->respuesta4}}</td> 
            </tr>

        @endforeach
    </table>

@endsection

