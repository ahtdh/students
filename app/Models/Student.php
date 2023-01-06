<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function terms()
    {
        return $this->belongsToMany(Term::class);
    }
    public function Courses()
    {
        return $this->belongsToMany(course::class);
    }
    public function profs()
    {
        return $this->belongsToMany(Prof::class);
    }
}
