<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    use HasFactory;

    public function citas (){
        return $this->hasMany(PacientConsultation::class);
    }

    public function clinicHistorial (){
        return $this->hasOne(ClinicAntecedentsPacient::class);
    }
}

