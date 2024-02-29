<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicAntecedentsPacient extends Model
{
    use HasFactory;

    public function pacient (){
        return $this->belongsTo(Pacient::class);
    }
}
