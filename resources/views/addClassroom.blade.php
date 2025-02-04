@extends('layout')


@section('content')
    <div class="container">
        <h2>Add Classroom</h2>
        <form action="{{ route('classrooms.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Classroom Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="roomNo">Location:</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Classroom</button>
        </form>
    </div>

    @endsection
