@extends('layouts.app')

@section('content')

<div class="container">
    <h1> Detalhes do Aluno </h1>
    <div class="card">
        <div class="card-header">
            {{ $student->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title"> Idade: {{ $student->age }} </h5>
            <p class="card-text"> Endereço: {{ $student->address }} </p>
            <p class="card-text"> Responsável: {{ $student->responsible }} </p>
            <p class="card-text"> Turma: {{ $student->class }} </p>
            <p class="card-text"> Mensalidade em dia? {{ $student->paid }} </p>
            <a href="{{ route('students.index') }}" class="btn btn-primary"> Voltar para a Lista </a>
            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
            </form>
        </div>
    </div>  
</div>
@endsection