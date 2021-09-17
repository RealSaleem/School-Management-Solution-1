<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewStudentTC extends Model
{
    use HasFactory;
    protected $table = 'tcs';


    public function StudentTC(){
        return $this->belongsTo(Student::class,'student_id');
    }
}
