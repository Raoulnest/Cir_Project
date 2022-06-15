<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Probleme_a_assisters extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_a_assiter_id',
        'probleme_id',
        'statut',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function Probleme_problemes(){
        return $this->belongsTo(Probleme_problemes::class);
    }

    public function user_a_assister_user_a_assisters(){
        return $this->belongsTo(User_a_assister_user_a_assisters::class);
    }
    
    public function pro_assister_details(){
        return $this->hasMany(Probleme_a_assisters_details::class);
    }
}
