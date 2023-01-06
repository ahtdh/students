<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User\Models\User;

class course extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function terms()
    {
        return $this->belongsToMany(Term::class);
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
