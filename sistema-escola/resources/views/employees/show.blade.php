@extends ('layouts.app')

@section('content')

<div class="container">
    <h1>Detalhes do Funcionário</h1>
    <div class="card">
        <div class="card-header">
            {{ $employee->name }}
        </div>
        <div class="body">
            <h5 class="card-title">Cargo: {{ $employee->role }} </h5>
            <p class="card-text">Endereço: {{ $employee->address }} </p>
            <p class="card-text">Departamento: {{ $employee->department }} </p>
            <p class="card-text">Atribuições: {{ $employee->assignments }}  </p>
            <p class="card-text">Data de Início: {{ $employee->start_date }} </p>
        </div>  
    </div>
</div>
@endsection