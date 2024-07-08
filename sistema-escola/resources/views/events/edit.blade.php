@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Editar Evento</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach 
            </ul>
        </div>
    @endif

      <form action="{{ route('events.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $event->title }}">
        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <input type="text" name="description" class="form-control" id="description" value="{{ $event->description }}">
        </div>
        <div class="form-group">
            <label for="date">Data</label>
            <input type="date" name="date" class="form-control" id="date" value="{{ $event->date }}">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>