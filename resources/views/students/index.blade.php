@extends('layouts.app')

@section('content')       
    <div class="container">
        <h1 class="my-4"> Lista de Alunos </h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Endereço</th>
                    <th>Responsável</th>
                    <th>Turma</th>
                    <th>Pago?</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->responsible }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->paid ? 'Sim' : 'Não' }}</td>
                    <td>
                        <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Editar</a>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-studentid="{{ $student->id }}">Excluir</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a class="btn btn-primary" href="{{ route('students.create') }}" style="font-weight: bold; font-size:2rem; line-height: 1.2; padding-top: 2px;">+</a>

    </div>
    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirme a exclusão</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Tem certeza de que deseja excluir este aluno?
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" method="POST">
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
                var studentId = button.getAttribute('data-studentid');
                var form = document.getElementById('deleteForm');
                var action = '{{ route("students.destroy", ":id") }}';
                action = action.replace(':id', studentId);
                form.action = action;
            });
        });
    </script>
@endsection
