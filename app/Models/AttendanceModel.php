<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceModel extends Model
{
    use HasFactory;
    protected $table = 'attendance';

    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
}
