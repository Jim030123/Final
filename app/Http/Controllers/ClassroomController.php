<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
use DB;

class ClassroomController extends Controller
{
    public function add(){
        $r=request();

        $addClassroom = Classroom::create([
            'name' => $r->name,
            'roomNo' => $r->roomNo
        ]);


    // return view('addClassroom');
    return redirect('addClassroom')->with('success', "Admin successfully created");
    }


    public function show(){
        $classrooms = Classroom::all();
        return view('showClassroom')->with('classrooms',$classrooms);
    }

    public function edit($id){
        $classrooms=Classroom::all()->where('id',$id);
        //select * from classrooms where id='$id'
        return view('editClassroom')->with('classrooms',$classrooms);
    }

    public function update(){
        $r=request();
        $classroom=Classroom::find($r->id);

        $classroom->name=$r->name;
        $classroom->roomNo=$r->roomNo;

        $classroom->save();//update classrooms set name='$classroomname', price='$classroomPrice'....where id='$id'
        return redirect()->route('showClassroom');
    }

    public function delete($id){
        $product=Classroom::find($id);
        $product->delete();//delete from products where id='$id'
        return redirect()->route('showClassroom');
    }

    public function search(Request $request) {
        $keyword = $request->input('keyword'); // Get the search keyword

        if ($keyword) {
            // Search for products by name
            $showClassroom = Classroom::where('name', 'LIKE','%' .$keyword. '%'
            )->get();
        } else {
            // Display all products if no keyword is entered
            $showClassroom = Classroom::all();
        }

        return view('showClassroom', [
            'classrooms' => $showClassroom, //table name
            'keyword' => $keyword,
        ]);
    }
}
