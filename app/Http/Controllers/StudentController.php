<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class StudentController extends Controller
{
    public function index()
    {
        $students = Student::latest()->paginate(5);


        return view('pages.backend.student.index',compact('students'));
    }

    public function create ()

    {

        return view ('pages.backend.student.create');

    }


    public function store(Request $request)

    {



        if ($request->hasfile('image') ) {
            $image =  time() . '.' . $request->image->extension();
            $request->image->move(public_path("/images"), $image);
        }

        Student::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'program'=>$request->program,
            'university'=>$request->university,
            'image' =>  $image,

         ]);

         return redirect()->route('student.index')
         ->with('success','student created successfully.');



        }

        public function edit(Student $student)
    {
        return view('pages.backend.student.update',compact('student'));


}


public function update(Request $request, $id)
    {
        $student=  student::where('id',$id)->first();

        if ($request->hasfile('image') ) {
            $image =  time() . '.' . $request->image->extension();
            $request->image->move(public_path("/images"), $image);
        }else {
            $image=$student->image;
        }

        $student->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'program'=>$request->program,
            'university'=>$request->university,
            'image' =>  $image,

        ]);











        return redirect()->route('student.index')
        ->with('success','student updated successfully');

    }


public function destroy($id)
{

    Student::where('id',$id)->delete();
    return back()->with('success','student has been deleted successfully!');

}

}


