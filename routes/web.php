<?php

Use App\Http\Controllers\jenisController;
Use App\Http\Controllers\MereksController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Use App\Http\Controllers\BarangController;
Use App\Http\Controllers\PeminjamanController;

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

Auth::routes();

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('mereks', MereksController::class);
Route::resource('jeniss', JenisController::class);

=======
Route::resource('barangs', BarangController::class);
Route::resource('peminjamans', PeminjamanController::class);

