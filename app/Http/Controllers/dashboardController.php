<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        $tasks = task::select("task_name","deadline")
                ->limit(5)
                ->orderBy('deadline')
                ->get();
        $totalTugas = task::all()->count();
        $tugasSelesai = task::where('status','selesai')->count();
        $tugasBelumSelesai = task::where('status','belum selesai')->count();
        $tugasTerlewat = task::where('status','terlewat')->count();
        return view('index',compact("tasks","totalTugas","tugasSelesai","tugasBelumSelesai","tugasTerlewat"));
    }
}
