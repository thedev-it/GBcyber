<?php

use App\Models\Alertes;
use App\Models\Conseils;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $conseil = Conseils::all();
    $alerte = Alertes::all();
    return view('welcome',compact('conseil','alerte'));
});



