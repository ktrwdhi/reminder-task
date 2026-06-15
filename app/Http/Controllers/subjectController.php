<?php

namespace App\Http\Controllers;

use App\Models\subject;
use Illuminate\Http\Request;

class subjectController extends Controller
{
    public function index(){
        $subjects = subject::select('id','subject_name','lecturer_name')->get();
        return view('pelajaran',compact('subjects'));
    }
    public function show($id)
    {
        return $id;
    }
}
