<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    public $incrementing = false;

    protected $keyType = 'string';
    protected $fillable = ['id','uuid','subject_name','lecturer_name'];

    public function tasks(){
        $tasks = $this->hasMany(task::class);
    }
    
}
