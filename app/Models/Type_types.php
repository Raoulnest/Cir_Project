<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_types extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_libelle',
    ];

    public function probleme_problemes(){
        return $this->hasMany(Probleme_problemes::class);
    }
    public function solution_solutions(){
        return $this->hasMany(Solution_solutions::class);
    }
}
