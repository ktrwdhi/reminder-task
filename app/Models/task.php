<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    protected $fillable = ['id','subject_id','task_name','task','deadline','status'];

    public function subject(){
        $subject = $this->belongsTo(subject::class);
        return $subject;
    }
}
