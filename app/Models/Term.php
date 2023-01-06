<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function Courses()
    {
        return $this->belongsToMany(course::class);
    }
    public function Students()
    {
        return $this->belongsToMany(Student::class);
    }
    public function profs()
    {
        return $this->belongsToMany(Prof::class);
    }
}
