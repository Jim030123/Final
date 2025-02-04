@extends('layout')

@section('content')
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <br><br>
        <h3>Edit classroom</h3>
        <form action="{{route('updateClassroom')}}" method="POST" enctype="multipart/form-data">
            @CSRF
            @foreach($classrooms as $classroom)
            <div class="form-group">

            <label for="name">classroom Name</label>
            <input type="hidden" name="id" value="{{$classroom->id}}">
            <input class="form-control" type="text" id="name" name="name" required value="{{$classroom->name}}">

            </div>
            <div class="form-group">
            <label for="roomNo">room No</label>
            <input class="form-control" type="text" id="roomNo" name="roomNo" required value="{{$classroom->roomNo}}">
            </div>


            <button type="submit" class="btn btn-primary">Update</button>
            @endforeach
        </form>
        <br><br>
    </div>
    <div class="col-sm-3"></div>
</div>
@endsection
