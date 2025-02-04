@extends('layout')

@section('content')

<h3> Add Subject </h3>

<form action="{{route('updateSubject')}}" method="post" enctype="multipart/form-data">
    @csrf

    @foreach ($subjects as $subject)


    <div class="form-control">
        <input type="hidden" name="id" value="{{$subject->id}}">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" required value="{{$subject->name}}">

    </div>

    <div class="form-control">
        <label for="days">Days</label>
        <input type="text" name="days" id="days" class="form-control" required value="{{$subject->days}}">

    </div>

    <div class="form-control">
        <label for="time">Time</label>
        <input type="text" name="time" id="time" class="form-control" required value="{{$subject->time}}">
    </div>


    <div class="form-control">
        <label for="seats">Seats</label>
        <input type="number" name="seats" id="seats" class="form-control" required value="{{$subject->seats}}">
    </div>

    <div class="form-group">
        <label for="subjectImage">Image</label>
        <input class="form-control" type="file" id="subjectImage" name="subjectImage" >
    </div>

    <div class="form-group">
        <select name= "classroom" id= "classroom" class="form-control">
            @foreach($classrooms as $classroom)
            <option  value="{{ $classroom->roomNo }}"
            @if($classroom->roomNo)
            selected
            @endif
            >{{$classroom->roomNo}}</option>
            @endforeach
        </select>
    </div>
    @endforeach

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
