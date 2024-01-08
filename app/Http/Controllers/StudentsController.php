<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Students;

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
        // $dataStudent = new Student();
        // $dataStudent->nis = $request->nis;
        // $dataStudent->name = $request->name;
        // $dataStudent->birthdate = $request->birthdate;
        // $dataStudent->class = $request->class;
        // $dataStudent->address = $request->address;

        // $post = $dataStudent->save();

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
}
