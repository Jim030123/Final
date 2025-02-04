<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

use App\Models\Classroom;

class SubjectController extends Controller
{
    public function add()
    {
        $r = request();

        $imageName = 'empty.jpg';
        if ($r->file('image')) {
            $image = $r->file('image');
            $image->move('images', $image->getClientOriginalName());   //images is the location
            $imageName = $image->getClientOriginalName();
        }

        $addSubject = Subject::create([
            'name' => $r->name,
            'days' => $r->days,
            'time' => $r->time,
            'seats' => $r->seats,
            'roomID' => $r->classroom,
            'image' => $imageName
        ]);

        return redirect('addSubject')->with('Add Successfully', 'Add a Subject');

    }


    public function create()
    {
        $classrooms = Classroom::all();
        return view('addSubject', compact('classrooms'));
    }

    public function show()
    {
        $subject = Subject::All();


        return view('showSubject')->with('subjects', $subject);
    }


    public function edit($id)
    {

        $subject = Subject::all()->where('id', $id);

        return view('editSubject')->with('subjects', $subject)->with('classrooms', Classroom::all());

    }

    public function update()
    {
        $r = request();

        $subject = Subject::find($r->id);

        $subject->name = $r->name;
        $subject->days = $r->days;

        $subject->time = $r->time;

        $subject->seats = $r->seats;

        $subject->roomID = $r->classroom;

        $subject->save();

        return redirect('showSubject')->with('subjects', $subject);



    }




    public function delete($id)
    {

        $subject = Subject::find($id);

        $subject->delete();

        return redirect('showSubject')->with('subjects', $subject);
    }

    public function search_2(Request $request){

        $keyword = $request->input('keyword'); // Get the search keyword

        if ($keyword) {
            // Search for products by name
            $showClassroom = Subject::where('name', 'LIKE','%' .$keyword. '%'
            )->get();
        } else {
            // Display all products if no keyword is entered
            $showClassroom = Subject::all();
        }

        return view('showClassroom', [
            'classrooms' => $showClassroom, //table name
            'keyword' => $keyword,
        ]);




    }

}
