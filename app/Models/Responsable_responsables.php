<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable_responsables extends Model
{
    use HasFactory;
    public function solution_solutions(){
        return $this->hasMany(Solution_solutions::class);
    }
}
