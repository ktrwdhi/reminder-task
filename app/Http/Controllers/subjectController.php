<?php

namespace App\Http\Controllers;

use App\Models\subject;
use App\Models\task;
use Illuminate\Http\Request;

class subjectController extends Controller
{
    public function index(){
        $subjects = subject::select('id','uuid','subject_name','lecturer_name')->get();
        return view('pelajaran',compact('subjects'));
    }
    public function show($id){
        // $tasks = task::join('subjects','tasks.subject_id', '=', 'subjects.id')
        //         ->where('subjects.uuid',$id)
        //         ->select('tasks.id','tasks.task_name','tasks.task','tasks.deadline','tasks.status','subjects.subject_name')
        //         ->get();

        $tasks = task::with('subject:id,subject_name')
                    ->whereHas('subject', function($query) use ($id){
                        $query->where('uuid',$id);
                    })
                    ->select('id','subject_id','task_name','task','deadline','status')  
                    ->get();
        return view("tugas",compact("tasks"));
        // return $tasks;
    }
}
