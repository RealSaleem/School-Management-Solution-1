<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeeType extends Model
{
    use HasFactory;
    protected $table='fee_type';

    public function feeType()
    {
        return $this->belongsTo(School::class);
    }


}
