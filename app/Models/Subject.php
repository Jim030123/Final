<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable=['name','days','time','seats','roomID'];

    // public function Classroom(){
    //     return $this->belongTo('App\Models\Classroom');
    // }


}
