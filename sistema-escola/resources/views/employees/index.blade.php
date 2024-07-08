@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Lista de Funcionários</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Cargo</th>
                    <th>Departamento</th>
                    <th>Turma</th>
                    <th>Data de Início</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>{{ $employee->role }}</td>
                        <td>{{ $employee->department }}</td>
                        <td>{{ $employee->assignments }}</td>
                        <td>{{ $employee->start_date ? \Carbon\Carbon::parse($employee->start_date)->format('d/m/Y') : '-' }}</td>
                        <td>
                            <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info">Show</a>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Editar</a>
                            <button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-employeeid="{{ $employee->id }}">Excluir</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirme a exclusão</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir este funcionário?
                </div>
                <div class="modal-footer">
                    <form id="deleteForm" action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#deleteModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var employeeId = button.data('employeeid');
            var modal = $(this);
            var action = '{{ route("employees.destroy", ":id") }}';
            action = action.replace(':id', employeeId);
            modal.find('#deleteForm').attr('action', action);
        });
    </script>
@endsection
