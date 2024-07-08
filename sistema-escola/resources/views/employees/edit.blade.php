@extends('layouts.app')

@section('content')

    <div class="container">
    <h1>Editar Funcionário</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach 
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf 
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}">
        </div>
        <div class="form-group">
            <label for="address">Endereço</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $employee->address }}">
        </div>
        <div class="form-group">
            <label for="department">Departamento</label>
            <input type="text" class="form-control" id="department" name="department" value="{{ $employee->department }}">
        </div>
        <div class="form-group">
            <label for="role">Cargo</label>
            <select class="form-control" id="role" name="role">
                <option value="">Selecione o Cargo</option>
                <option value="professor">Professor</option>
                <option value="diretor">Diretor</option>
            </select>
        </div>
        <div class="form-group">
            <label for="assignments">Atribuições</label>
            <input type="text" class="form-control" id="assignments" name="assignments" value="{{ $employee->assignments }}">
        </div>
        <div class="form-group">
            <label for="start_date">Data de Início</label>
            <input type="text" class="form-control" id="start_date" name="start_date" value="{{ $employee->start_date }}">
        </div>
    </form>
    </div>
@endsection