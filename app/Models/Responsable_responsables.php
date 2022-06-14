<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsable_responsables extends Model
{
    use HasFactory;
    protected $table = 'responsable_responsables';
    protected $fillable = [
        'service_responsable',
        'localisation_responsable'
    ];

    public function solution_solutions(){
        return $this->hasMany(Solution_solutions::class);
    }
}
