<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriaPrimaController;

Route::resources([
    'materiaPrima' => MateriaPrimaController::class
]);

Route::get('/', function () {
    return view('welcome');
});
