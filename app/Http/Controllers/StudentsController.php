<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\Session;

class StudentsController extends Controller
{
    public function index(){
        return view('student.all', [
            'student' => Student::all()
        ]);
    }

    public function show($id){
        return view('student.detail',[
            'student' => Student::find($id)
        ]);
    }


    public function home(){
        return view('home', [
            'satu' => 'halo selamat datang ini adalah homepage',
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
        return view('student.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'birthdate' => 'required|date',
            'class' => 'required',
            'address' => 'required',
        ]);
        Student::create($validatedData);
        return redirect('student/all')->with('success', 'data berhasil ditambahkan');
    }

    public function edit(Student $student){
        return view('student.edit',[
            'student' => $student
        ]);
    }

    public function update(Request $request, Student $student) {
        $request->validate([
            'nis' => 'required',
            'name' => 'required',
            'class' => 'required',
            'birthdate' => 'required',
            'address' => 'required',
        ]);

        Student::where('id', $student->id)->update([
            'name' => $request->name,
            'nis' => $request->nis,
            'class' => $request->class,
            'birthdate' => $request->birthdate,
            'address' => $request->address, 
        ]);
        Session::flash('success', 'data berhasil diupdate');
        return redirect('/student/all');
    }

    public function destroy(Student $student){
        Student::destroy($student->id);
        Session::flash('success', 'Data Siswa Berhasil Dihapus!');

        return redirect('/student/all');
    }
}
