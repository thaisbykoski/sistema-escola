@extends('layouts.app')

@section('content')
<div class="container">
    <h1> Cadastrar Novo Aluno </h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
        </div>
        <div class="form-group mb-3">
            <label for="age">Idade</label>
            <input type="number" name="age" class="form-control" id="age" value="{{ old('age') }}">
        </div>
        <div class="form-group mb-3">
            <label for="address">Endereço</label>
            <input type="text" name="address" class="form-control" id="address" value="{{ old('address') }}">
        </div>
        <div class="form-group mb-3">
            <label for="responsible">Responsável</label>
            <input type="text" name="responsible" class="form-control" id="responsible" value="{{ old('responsible') }}">
        </div>
        <div class="form-group mb-3">
            <label for="class">Turma</label>
            <input type="text" name="class" class="form-control" id="class" value="{{ old('class') }}">
        </div>
        <div class="form-group mb-4">
            <label>Mensalidade em dia</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paid" id="paid_yes" value="1" {{ old('paid') == '1' ? 'checked' : '' }}>
                <label class="form-check-label" for="paid_yes">Sim</label>
            </div>
            <div class="form-check ">
                <input class="form-check-input" type="radio" name="paid" id="paid_no" value="0" {{ old('paid') == '0' ? 'checked' : '' }}>
                <label class="form-check-label" for="paid_no">Não</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Cadastrar</button>
    </form>
</div>
@endsection
