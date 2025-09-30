<?php

use App\Http\Controllers\Conseil;
use App\Livewire\PageConseils;
use App\Models\Alertes;
use App\Models\Conseils;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $conseil = Conseils::all();
    $alerte = Alertes::all();
    return view('welcome',compact('conseil','alerte'));
});

Route::get('/conseil/{id}',[Conseil::class, 'showConseil']);
Route::get('/alertes',[Conseil::class, 'showAlerte']);



