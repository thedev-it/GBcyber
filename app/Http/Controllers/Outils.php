<?php

namespace App\Http\Controllers;

use App\Models\Outils as ModelsOutils;
use Illuminate\Http\Request;

class Outils extends Controller
{
    public function showOutil(){
       $outils = ModelsOutils::all();
       return view('outils',['outils'=>$outils]);
       
    }
}
