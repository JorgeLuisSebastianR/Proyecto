<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;


Route ::resources([
'articulos' => ArticuloController::class,
]);
// emanems

Route::get('/', function () {
    return view('welcome');
});
