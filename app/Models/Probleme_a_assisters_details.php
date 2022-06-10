<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Probleme_a_assisters_details extends Model
{
    use HasFactory;

    public function Probleme_a_assisters(){
        return $this->belongsTo(Probleme_a_assisters::class);
    }

    public function solution_solutions(){
        return $this->belongsTo(Solution_solutions::class);
    }
}
