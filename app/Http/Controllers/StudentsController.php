<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentsController extends Controller
{
    public function index(){
        return view('student.all', [
            'student' => Student::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    public function show($id){
        return view('student.detail',[
            'student' => Student::find($id)
        ]);
    }


    public function home(){
        return view('home', [
            'satu' => 'ini adalah homepage',
            'dua' => 'saya sedang belajar laravel'
        ]);
    }

    public function about(){
        return view('about', [
        'name' => 'Rafiu Sidqi',
        'class' => '11 pplg 2',
        'image' => 'img/piu.jpg'
        ]);
    }

    public function create(){
        return view('student.create', [
            "kelass" => Kelas::all()
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'birthdate' => 'required|date',
            'kelas_id' => 'required',
            'address' => 'required',
        ]);
        Student::create($validatedData);
        return redirect('dashboard/student')->with('success', 'data berhasil ditambahkan');
    }

    public function edit(Student $student){
        return view('student.edit',[
            'student' => $student,
            'kelass' => Kelas::all()
        ]);
    }

    public function update(Request $request, Student $student) {
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'kelas_id' => 'required',
            'birthdate' => 'required',
            'address' => 'required',
        ]);

        Student::where('id', $student->id)->update([
            'name' => $request->name,
            'nis' => $request->nis,
            'kelas_id' => $request->kelas_id,
            'birthdate' => $request->birthdate,
            'address' => $request->address, 
        ]);
        Session::flash('success', 'Data berhasil diubah');
        return redirect('/dashboard/student');
    }

    public function destroy(Student $student){
        Student::destroy($student->id);

        return redirect('/dashboard/student');
    }
}
