<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Classroom extends Model
{
    use HasFactory;

    protected $fillable=['name','roomNo'];

    public function Subject() {
        return $this->hasMany('App/Models/Subject');
    }
}
