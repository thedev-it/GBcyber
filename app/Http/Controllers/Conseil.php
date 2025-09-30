<?php

namespace App\Http\Controllers;

use App\Models\Alertes;
use App\Models\Conseils;
use Illuminate\Http\Request;

class Conseil extends Controller
{
    public function showConseil($id){
        $conseils = Conseils::find($id);
        return view('conseil',['conseils'=>$conseils]);
       
    }

    public function showAlerte(){
        $alerte = Alertes::all();
        return view('alerte',['alerte'=>$alerte]);
       
    }
}
