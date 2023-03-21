<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index() {
        return view('students.index', [
            'students' => DB::table('students')->orderBy("id", "desc")->get()
        ]);
    }

    public function create(){
        return view('students.create');
    }

    public function addNewStudent(Request $request){
        $request->validate([
            'name' => 'required|max:50',
            'roll' => 'required',
            'class' => 'required',
        ]);

        DB::table('students')->insert([
            'name' => $request->name,
            'roll' => $request->roll,
            'class' => $request->class,
        ]);

        return redirect()->route('students')->with('success', 'New Student Added Successfully!');
    }

    public function editStudent($id) {
        $student = DB::table('students')->find($id);

        return view('students.show', ['student' => $student]);
    }

    public function updateStudent(Request $request, $id){
        $request->validate([
            'name' => 'required|max:50',
            'roll' => 'required',
            'class' => 'required',
        ]);

        DB::table('students')->where('id', $id)
           ->update([
            'name' => $request->name,
            'roll' => $request->roll,
            'class' => $request->class,
           ]);

        return redirect()->route('students')->with('success', 'Student Update Successfully!');

    }

    public function destroy($id)
    {
        DB::table('students')->where('id',$id)->delete();

        return redirect()
            ->route('students')
            ->with('success','Student deleted successfully!');
    }
}
