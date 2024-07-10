@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Cadastrar Novo Funcionário</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
        </div>
        <div class="form-group mb-3">
            <label for="address">Endereço</label>
            <input type="text" name="address" class="form-control" id="address" value="{{ old('address') }}">
        </div>
        <div class="form-group mb-3">
            <label for="department">Departamento</label>
            <input type="text" name="department" class="form-control" id="department" value="{{ old('department') }}">
        </div>
        <div class="form-group mb-3">
            <label for="role">Cargo</label>
            <select class="form-control" id="role" name="role" onchange="showClassField()">
                <option value="">Selecione o Cargo</option>
                <option value="professor">Professor</option>
                <option value="diretor">Diretor</option>
            </select>
        </div>
        <div class="form-group mb-3">
            <label for="assignments">Atribuições</label>
            <textarea name="assignments" class="form-control" id="assignments" value="{{ old('assignments') }}"></textarea>
        </div>
        <div class="form-group mb-4">
            <label for="start_date">Data de Início</label>
            <input type="date" name="start_date" class="form-control" id="start_date" value="{{ old('start_date') }}">
        </div>
        <button type="submit" class="btn btn-primary mb-5">Cadastrar</button>
    </form>
</div>

@endsection
