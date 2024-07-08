@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="my-4">Lista de Eventos</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descrição</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td> {{ event->id }} </td>
                <td> {{ $event->title }} </td>
                <td> {{ $event->description }} </td>
                <td> {{ $event->date ? \Carbon\Carbon::parse($employee->date)->format('d/m/Y') : '-' }} </td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection