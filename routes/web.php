<?php

use Illuminate\Support\Facades\Route;
//<<<<<<< HEAD
use App\Http\Controllers\ArticuloController;


Route ::resources([
'articulos' => ArticuloController::class,
]);
// emanems
//======
use App\Http\Controllers\MateriaPrimaController;

Route::resources([
    'materiaprimas' => MateriaPrimaController::class
]);
//>>>>>>> be7743ee62fdef2eedc02818df4351c62a69aa4d

Route::get('/', function () {
    return view('welcome');
});
