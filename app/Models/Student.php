<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'birthday', 'address', 'department'];

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'student_subject');
    }
}
