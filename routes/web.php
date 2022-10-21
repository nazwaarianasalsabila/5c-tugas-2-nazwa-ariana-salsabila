<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// bikin 3 route(dosen,mahasiswa,matkul)
// Route::get('/dosen', function () {});
// Route::get('/mahasiswa', function () {});
// Route::get('/matkul', function () {});

// routes with controller
Route::get('/dosen', [DosenController::class, 'index']);
Route::get('/dosenSelectRaw', [DosenController::class, 'selectRaw']);
Route::get('/dosenSelectQueryBuilder', [DosenController::class, 'selectQueryBuilder']);
Route::get('/dosenSelectEloquent', [DosenController::class, 'selectEloquent']);
Route::get('/dosenInsertRaw', [DosenController::class, 'insertRaw']);
Route::get('/dosenInsertQueryBuilder', [DosenController::class, 'insertQueryBuilder']);
Route::get('/dosenInsertEloquent', [DosenController::class, 'insertEloquent']);
Route::get('/dosenUpdateRaw', [DosenController::class, 'updateRaw']);
Route::get('/dosenUpdateQueryBuilder', [DosenController::class, 'updateQueryBuilder']);
Route::get('/dosenUpdateEloquent', [DosenController::class, 'updateEloquent']);
Route::get('/dosenDeleteRaw', [DosenController::class, 'deleteRaw']);
Route::get('/dosenDeleteQueryBuilder', [DosenController::class, 'deleteQueryBuilder']);
Route::get('/dosenDeleteEloquent', [DosenController::class, 'deleteEloquent']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/mahasiswaSelectRaw', [MahasiswaController::class, 'selectRaw']);
Route::get('/mahasiswaSelectQueryBuilder', [MahasiswaController::class, 'selectQueryBuilder']);
Route::get('/mahasiswaSelectEloquent', [MahasiswaController::class, 'selectEloquent']);
Route::get('/mahasiswaInsertRaw', [MahasiswaController::class, 'insertRaw']);
Route::get('/mahasiswaInsertQueryBuilder', [MahasiswaController::class, 'insertQueryBuilder']);
Route::get('/mahasiswaInsertEloquent', [MahasiswaController::class, 'insertEloquent']);
Route::get('/mahasiswaUpdateRaw', [MahasiswaController::class, 'updateRaw']);
Route::get('/mahasiswaUpdateQueryBuilder', [MahasiswaController::class, 'updateQueryBuilder']);
Route::get('/mahasiswaUpdateEloquent', [MahasiswaController::class, 'updateEloquent']);
Route::get('/mahasiswaDeleteRaw', [MahasiswaController::class, 'deleteRaw']);
Route::get('/mahasiswaDeleteQueryBuilder', [MahasiswaController::class, 'deleteQueryBuilder']);
Route::get('/mahasiswaDeleteEloquent', [MahasiswaController::class, 'deleteEloquent']);

Route::get('/matkul', [MatkulController::class, 'index']);
Route::get('/matkulSelectRaw', [MatkulController::class, 'selectRaw']);
Route::get('/matkulSelectQueryBuilder', [MatkulController::class, 'selectQueryBuilder']);
Route::get('/matkulSelectEloquent', [MatkulController::class, 'selectEloquent']);
Route::get('/matkulInsertRaw', [MatkulController::class, 'insertRaw']);
Route::get('/matkulInsertQueryBuilder', [MatkulController::class, 'insertQueryBuilder']);
Route::get('/matkulInsertEloquent', [MatkulController::class, 'insertEloquent']);
Route::get('/matkulUpdateRaw', [MatkulController::class, 'updateRaw']);
Route::get('/matkulUpdateQueryBuilder', [MatkulController::class, 'updateQueryBuilder']);
Route::get('/matkulUpdateEloquent', [MatkulController::class, 'updateEloquent']);
Route::get('/matkulDeleteRaw', [MatkulController::class, 'deleteRaw']);
Route::get('/matkulDeleteQueryBuilder', [MatkulController::class, 'deleteQueryBuilder']);
Route::get('/matkulDeleteEloquent', [MatkulController::class, 'deleteEloquent']);