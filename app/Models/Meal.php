<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    public  function food (){
        return $this->hasMany(Food::class);
    }

    public function menuFood (){
        return $this->belongsTo(MenuFood::class);
    }
}
