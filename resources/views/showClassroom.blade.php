@extends('layout')

@section('content')
@if(isset($keyword) && $keyword)
        <h2 class="mb-4">Search Results for: <strong>"{{ $keyword }}"</strong></h2>
    @else
        <h2 class="mb-4">All Products</h2>
        @endif




<div class="container">
<table class="table table-bordered" border="1">

        <thead>
            <tr>
                <th>ID</th>
                <th>Classroom Name</th>
                <th>Room No</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classrooms as $classroom)
                <tr>
                    <td>{{ $classroom->id }}</td>
                    <td>{{ $classroom->name }}</td> <!-- Display Category Name -->
                    <td>{{ $classroom->roomNo }}</td>
                    <td>
                        <a href="{{route('editClassroom', ['id' => $classroom->id])}}" class="btn btn-warning"><i class="fas fa-edit">Edit</a>
                    <a href="{{ route('deleteClassroom', ['id' => $classroom->id]) }}" class="btn btn-danger">Delete</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

