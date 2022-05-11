<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
Route ::resources([
'articulos' => ArticuloController::class,]);
use App\Http\Controllers\MateriaPrimaController;
Route::resources([
    'materiaprimas' => MateriaPrimaController::class
]);
Route::get('/', function () {
    return view('welcome');
});
