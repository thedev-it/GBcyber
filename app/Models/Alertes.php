<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alertes extends Model
{
    protected $fillable =[
        'type_alerte',
        'titre',
        'sous_titre',
        'source_alerte',
         'image',
        'status',
        'description',
       
    ];
}
