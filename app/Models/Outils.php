<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Outils extends Model
{
    protected $fillable = [
        'type_outil',
        'titre',
        'tarification',
        'description',
        'lien_outil'
    ];
}
