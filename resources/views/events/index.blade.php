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
                <td>{{ $event->id }}</td>
                <td>{{ $event->title }}</td>
                <td>{{ $event->description }}</td>
                <td>{{ $event->date ? \Carbon\Carbon::parse($event->date)->format('d/m/Y') : '-' }}</td>
                <td>
                    <!-- Aqui você pode adicionar botões de ação como editar ou excluir, se necessário -->
                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning">Editar</a>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-eventid="{{ $event->id }}">Excluir</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-primary" href="{{ route('events.create') }}" style="font-weight: bold; font-size:1.5rem; line-height: 1.2; padding-top: 2px;">+</a>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirme a exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir este evento?
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var deleteModal = document.getElementById('deleteModal');
            deleteModal.addEventListener('show.bs.modal', function (event) {
                var button = event.relatedTarget;
                var eventId = button.getAttribute('data-eventid');
                var form = document.getElementById('deleteForm');
                var action = '{{ route("events.destroy", ":id") }}';
                action = action.replace(':id', eventId);
                form.action = action;
            });
        });
    </script>
</div>

@endsection
