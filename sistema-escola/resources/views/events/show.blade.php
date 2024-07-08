@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Detalhes do Evento</h1>
    <div class="card">
        <div class="card-header">
            {{ $event->name }}
        </div>
        <div class="card-body"> 
            <h5> {{ $event->date }} </h5>
            <p> {{ $event->description }} </p>
        </div>
    </div>
</div>
@endsection