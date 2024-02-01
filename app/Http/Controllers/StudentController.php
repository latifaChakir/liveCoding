<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function index(){
        $students = Student::latest()->simplePaginate(2);
        return view('etudiant',compact('students'));
    }

    public function ajouter(){
        return view('ajouter');
    }

    public function insertStudent(Request $request){

        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'image_path' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:1000',
        ]);
        $uploadDir='images/';
        $uploadfileName=uniqid() . '.' .$request->file('image_path')->getClientOriginalExtension();
        $request->file('image_path')->move($uploadDir, $uploadfileName);
        // dd($request);
        $student = new Student();
        $student->name = $request->name;
        $student->class = $request->class;
        $student->image_path = $uploadfileName;
        $student->save();
        return redirect('/');
        

    }

    public function supprimerStudent($id) {
        $student =Student::find($id);
        $student->delete();
        return redirect('/');
    }

    public function modifier($id){
        $student =Student::find($id);
        return view('edit',compact('student'));
    }
    public function modifierStudent(Request $request) {
        $request->validate([
            'name' => 'required',
            'class' => 'required',
            'image_path' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:1000',
        ]);
        $uploadDir = 'images/';
        $uploadfileName = uniqid() . '.' . $request->file('image_path')->getClientOriginalExtension();
        $request->file('image_path')->move($uploadDir, $uploadfileName);
        $student =Student::find($request->id);
        $student->name = $request->name;
        $student->class = $request->class;
        $student->image_path = $uploadfileName;
        $student->update();
        return redirect('/');


    }
}
