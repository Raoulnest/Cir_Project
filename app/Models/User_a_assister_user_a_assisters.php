<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_a_assister_user_a_assisters extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_user_a_assister',
        'service_user_assister'
    ];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function probleme_a_assisters(){
        return $this->hasMany(Probleme_a_assisters::class); 
    }
}
