@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Add New Classroom</h3>
        <form action="{{route('addClassroom')}}" method="POST">
            @csrf
            <div class="form-group">
            <label for="name">Classroom Name</label>
            <input class="form-control" type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
            <label for="roomNo">Room Number</label>
            <input class="form-control" type="text" id="roomNo" name="roomNo" required>
            </div>


            <button type="submit" class="btn btn-primary">Add New</button>
        </form>


        <br><br>
    </div>
</div>
@endsection
