<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sevice extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'texte',
        'image',

    ];
}
