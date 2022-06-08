<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_types extends Model
{
    use HasFactory;
    protected $table = 'type_types';
    protected $fillable = [
        'libelle',
    ];
}
