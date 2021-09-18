<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    use HasFactory;
    protected $table ='fee';

    public function FeeType()
    {
        return $this->belongsTo(FeeType::class,'fee_type_id');
    }
    public function student(){
        return $this->hasMany(Student::class,'id');
    }
}
