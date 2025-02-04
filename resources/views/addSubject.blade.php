@extends('layout')

@section('content')

<h3> Add Subject </h3>

<form action="{{route('addSubject')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-control">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>

    </div>

    <div class="form-control">
        <label for="days">Days</label>
        <input type="text" name="days" id="days" class="form-control" required>

    </div>

    <div class="form-control">
        <label for="time">Time</label>
        <input type="text" name="time" id="time" class="form-control" required>
    </div>


    <div class="form-control">
        <label for="seats">Seats</label>
        <input type="number" name="seats" id="seats" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="productImage">Image</label>
        <input class="form-control" type="file" id="productImage" name="productImage" >
    </div>

    <div class="form-control">
     <select name="classroom" id="classroom" class="form-control">
        @foreach ($classrooms as $classroom)
        <option value="{{ $classroom->roomNo }}">{{ $classroom->roomNo }}</option>

        @endforeach
     </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
