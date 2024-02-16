<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.main');
    }

    public function student(){
        return view('dashboard.student.all', [
            'student' => Student::all()
        ]);
    }

    public function kelas(){
        return view('dashboard.grade.all',[
            'kelass' => Kelas::all()
        ]);
    }
}
