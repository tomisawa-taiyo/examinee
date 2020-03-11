<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function add()
    {
        return view('student.users');
    }
    
    public function create()
    {
        return view('student.users');
    }
}
