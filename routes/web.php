<?php

use App\Http\Controllers\Conseil;
use App\Http\Controllers\Outils as ControllersOutils;
use App\Livewire\PageConseils;
use App\Models\Alertes;
use App\Models\Conseils;
use App\Models\Outils;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $conseil = Conseils::all();
    $alerte = Alertes::all();
    return view('welcome',compact('conseil','alerte'));
});
Route::get('/bonne-pratiques', function () {
   
    return view('bestPratique');
});

Route::get('/conseil/{id}',[Conseil::class, 'showConseil']);
Route::get('/alertes',[Conseil::class, 'showAlerte']);
Route::get('/outils',[ControllersOutils::class, 'showOutil']);



