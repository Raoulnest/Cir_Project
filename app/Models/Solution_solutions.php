<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution_solutions extends Model
{
    use HasFactory;
    public function type_types(){
        return $this->belongsTo(Type_types::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
    
    public function responsable_responsables(){
        return $this->belongsTo(Responsable_responsables::class);
    }
    public function probleme_problemes(){
        return $this->belongsTo(Probleme_problemes::class);
    }
    
    public function pro_assister_details(){
        return $this->hasMany(Probleme_a_assisters_details::class);
    }
}
