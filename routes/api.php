<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController;
// use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\NilaiController;
<<<<<<< HEAD
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
=======

>>>>>>> 1430a11525376c6a300807478f88f0194ea3e889

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('password', function(){
    return bcrypt('subhan');
});

<<<<<<< HEAD
// Route::apiResource('mahasiswa',MahasiswaController::class);

//Controller Mahassiswa//
Route::get('mahasiswa', [MahasiswaController::class, 'index']);
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])-> middleware('auth:api');
Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show']);
Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])-> middleware('auth:api');
Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])-> middleware('auth:api');
//=====================mahasiswa==========================//

//Controller Matakul//
Route::get('matkul', [MatkulController::class, 'index']);
Route::post('/matkul', [MatkulController::class, 'store'])->middleware('auth:api');
Route::get('/matkul/{id}', [MatkulController::class, 'show']);
Route::put('/matkul/{id}', [MatkulController::class, 'update'])->middleware('auth:api');
Route::delete('/matkul/{id}', [MatkulController::class, 'destroy'])->middleware('auth:api');
//=====================matkul==========================//

//Controller Dosen//
Route::get('dosen', [DosenController::class, 'index']);
Route::post('/dosen', [DosenController::class, 'store'])->middleware('auth:api');
Route::get('/dosen/{id}', [DosenController::class, 'show']);
Route::put('/dosen/{id}', [DosenController::class, 'update'])->middleware('auth:api');
Route::delete('/dosen/{id}', [DosenController::class, 'destroy'])->middleware('auth:api');
//===================== Dosen ==========================//

//Controller Nilai//
Route::get('nilai', [NilaiController::class, 'index']);
Route::post('/nilai', [NilaiController::class, 'store'])->middleware('auth:api');
Route::get('/nilai/{id}', [NilaiController::class, 'show']);
Route::put('/nilai/{id}', [NilaiController::class, 'update'])->middleware('auth:api');
Route::delete('/nilai/{id}', [NilaiController::class, 'destroy'])->middleware('auth:api');
//===================== Nilai ==========================//


// -> middleware('auth:api');

=======

Route::get('mhs', [MahasiswaController::class, 'index']);
Route::post('/mhs', [MahasiswaController::class, 'store'])-> middleware('auth:api');
Route::get('/mhs/{id}', [MahasiswaController::class, 'show']);
Route::put('/mhs/{id}', [MahasiswaController::class, 'update'])-> middleware('auth:api');
Route::delete('/mhs/{id}', [MahasiswaController::class, 'destroy'])-> middleware('auth:api');

Route::get('matakul', [MatkulController::class, 'index']);
Route::post('/matakul', [MatkulController::class, 'store'])-> middleware('auth:api');
Route::get('/matakul/{id}', [MatkulController::class, 'show']);
Route::put('/matakul/{id}', [MatkulController::class, 'update'])-> middleware('auth:api');
Route::delete('/matakul/{id}', [MatkulController::class, 'destroy'])-> middleware('auth:api');

Route::get('dsn', [DosenController::class, 'index']);
Route::post('/dsn', [DosenController::class, 'store'])-> middleware('auth:api');
Route::get('/dsn/{id}', [DosenController::class, 'show']);
Route::put('/dsn/{id}', [DosenController::class, 'update'])-> middleware('auth:api');
Route::delete('/dsn/{id}', [DosenController::class, 'destroy'])-> middleware('auth:api');

Route::get('grade', [NilaiController::class, 'index']);
Route::post('/grade', [NilaiController::class, 'store'])-> middleware('auth:api');
Route::get('/grade/{id}', [NilaiController::class, 'show']);
Route::put('/grade/{id}', [NilaiController::class, 'update'])-> middleware('auth:api');
Route::delete('/grade/{id}', [NilaiController::class, 'destroy'])-> middleware('auth:api');
>>>>>>> 1430a11525376c6a300807478f88f0194ea3e889

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

   
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);

     // Route::post('login', 'AuthController@login');
    // Route::get('login', 'AuthController@login')->name('login');
    // Route::post('refresh', 'AuthController@refresh');
    // Route::post('me', 'AuthController@me');
    // Route::post('logout', 'AuthController@logout');

});


// Route::group(['prefix' => 'v1'], function(){

//     Route::get('/', [ProductController::class, 'index']);
//     Route::get('/task/{id}', [ProductController::class, 'show']);
//     Route::delete('task/{id}', [ProductController::class, 'delete']);



//     // Route::get('/Cost/{id}', [Biaya019Controller::class, 'show']);
//     // Route::post('/Cost/', [Biaya019Controller::class, 'store']);
//     // Route::delete('/Cost/{id}', [Biaya019Controller::class, 'destroy']);
//     // Route::patch('Cost/{id}', [Biaya019Controller::class, 'update']);
//     // Route::delete('Cost/{id}', [Biaya019Controller::class, 'delete']);
// });
