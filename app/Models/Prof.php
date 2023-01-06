<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function terms()
    {
        return $this->belongsToMany(Term::class);
    }
    public function students()
    {
        return $this->belongsToMany(Student::class);
    }
    public function courses()
    {
        return $this->belongsToMany(course::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
