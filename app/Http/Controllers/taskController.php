<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class taskController extends Controller
{
    public function index(){
        $tasks = task::with('subject:id,subject_name')->select('id','subject_id','task_name','task','deadline','status')
                ->orderBy('deadline','asc')
                ->get();
       
        return view("tugas",compact("tasks"));
        // return $tasks;
    }
}
