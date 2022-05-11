<?php

use Illuminate\Support\Facades\Route;
//<<<<<<< HEAD
use App\Http\Controllers\ArticuloController;
//12

Route ::resources([
'articulos' => ArticuloController::class,
]);
// emanem=======
use App\Http\Controllers\MateriaPrimaController;

Route::resources([
    'materiaPrima' => MateriaPrimaController::class
]);
//>>>>>>> be7743ee62fdef2eedc02818df4351c62a69aa4d

Route::get('/', function () {
    return view('welcome');
});
