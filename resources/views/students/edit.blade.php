@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Student</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
        </div>

        <div class="form-group">
            <label for="age">Age:</label>
            <input type="text" class="form-control" id="age" name="age" value="{{ $student->age }}">
        </div>

        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $student->address }}">
        </div>

        <div class="form-group">
            <label for="responsible">Responsible:</label>
            <input type="text" class="form-control" id="responsible" name="responsible" value="{{ $student->responsible }}">
        </div>

        <div class="form-group">
            <label for="class">Class:</label>
            <input type="text" class="form-control" id="class" name="class" value="{{ $student->class }}">
        </div>

        <div class="form-group">
            <label>Paid:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paid" id="paid_yes" value="1" {{ $student->paid ? 'checked' : '' }}>
                <label class="form-check-label" for="paid_yes">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="paid" id="paid_no" value="0" {{ !$student->paid ? 'checked' : '' }}>
                <label class="form-check-label" for="paid_no">Não</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update Student</button>
    </form>
</div>
@endsection
