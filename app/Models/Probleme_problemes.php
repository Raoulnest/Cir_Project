<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Probleme_problemes extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle_probleme',
        'probleme_parent_id',
        'type_id',
        'user_id',
    ];
    
    public function type_types(){
        return $this->belongsTo(Type_types::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }

    public function pro_assisters(){
        return $this->hasMany(Probleme_a_assisters::class);
    }
    
}
