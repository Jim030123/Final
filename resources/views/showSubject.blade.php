@extends('layout')

@section('content')

<table>
    <thread>
    <tr>
        <th>Name</th>
        <th>Days</th>
        <th>Time</th>
        <th>Seats</th>
        <th>Classroom</th>
        <th>Image</th>
        <th>Actions</th>
    </tr>
</thread>
<tbody>

    @foreach ($subjects as $subject)
    <tr>
        <td>{{ $subject->name }}</td>
        <td>{{ $subject->days }}</td>
        <td>{{ $subject->time }}</td>
        <td>{{ $subject->seats }}</td>
        <td>{{ $subject->roomID }}</td>
        <td><img src="{{ asset('storage/' . $subject->image) }}" alt="image" style="width: 100px; height: 100px;"></td>
   <td>
    <a href="{{route('editSubject',['id'=>$subject->id])}}" class="btn btn-primary">Edit</a>
    <a href="{{route('deleteSubject',['id'=>$subject->id])}}" class="btn btn-danger">Delete </a>
   </td>

    </tr>
    @endforeach
</tbody>

</table>
