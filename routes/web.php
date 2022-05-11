<?php
use Illuminate\Support\Facades\Route;
//<<<<<<< HEAD
use App\Http\Controllers\ArticuloController;
<<<<<<< HEAD
//12
=======
//marck
>>>>>>> 1641c2a0e2a307cc2fa02d5d9430f4acaf21077f
//1
Route ::resources([
'articulos' => ArticuloController::class,
]);
<<<<<<< HEAD
// emanem=======
=======
// emanems
//======
>>>>>>> 1641c2a0e2a307cc2fa02d5d9430f4acaf21077f
use App\Http\Controllers\MateriaPrimaController;

Route::resources([
    'materiaprimas' => MateriaPrimaController::class
]);
//>>>>>>> be7743ee62fdef2eedc02818df4351c62a69aa4d

Route::get('/', function () {
    return view('welcome');
});
