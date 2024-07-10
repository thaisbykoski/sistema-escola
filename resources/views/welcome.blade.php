@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 100px;">
        <h1>Bem-vindo ao Sistema de Gestão Escolar</h1>
        <p>Gerencie os registros de alunos, funcionários e eventos escolares de forma eficiente.</p>

        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 19rem;">
                        <img src="{{ asset('images/criancas.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Adicione e gerencie informações dos alunos de forma fácil e rápida.</p>
                            <a class="card-text btn btn-primary" href="{{ route('students.index') }}">Registro de Alunos</a>
                        </div>
                        </div>
                    </div>
                <div class="col">
                    <div class="card" style="width: 19rem;">
                        <img src="{{ asset('images/professor.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Adicione e gerencie informações dos funcionários de forma fácil e rápida.</p>
                            <a class="card-text btn btn-primary" href="{{ route('employees.index') }}">Registro de Funcionários</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 19rem;">
                        <img src="{{ asset('images/evento.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Adicione e gerencie informações dos eventos de forma fácil e rápida.</p>
                            <a class="card-text btn btn-primary" href="{{ route('events.index') }}">Registro de Eventos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection