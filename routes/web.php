<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin\CareerController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\GaleriController;
use App\Http\Controllers\admin\kategori_galeri;
use App\Http\Controllers\admin\KategoriGaleriController;
use App\Http\Controllers\admin\KonfigurasiController;
use App\Http\Controllers\admin\PesanController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\BreakBulkController;
use App\Http\Controllers\BulkCargoController;
use App\Http\Controllers\CargoBreakBulkController;
use App\Http\Controllers\CompactorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContainerController;
use App\Http\Controllers\CraneController;
use App\Http\Controllers\ExcavatorController;
use App\Http\Controllers\ForkcliftController;
use App\Http\Controllers\HeavyDutyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginbi;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\JobKarirController;
use App\Http\Controllers\WheelLoaderController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\authbi;

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
Route::get('loginbi',[loginbi::class,'index']);
Route::post('loginbi/proses_bi',[loginbi::class,'proses_bi']);
Route::get('loginbi/logoutbi',[loginbi::class,'logoutbi']);

    Route::get('admin/dashboard',[DashboardController::class,'index']);

    //kategorigaleri
    Route::get('admin/kategorigaleri',[KategoriGaleriController::class,'index']);
    Route::post('admin/kategorigaleri/tambah',[KategoriGaleriController::class,'tambah']);
    Route::post('admin/kategorigaleri/edit',[KategoriGaleriController::class,'update']);
    Route::get('admin/kategorigaleri/hapus/{part1}',[KategoriGaleriController::class,'delete']);

    //galeri
    Route::get('admin/galeri',[GaleriController::class,'index']);
    Route::get('admin/galeri/create',[GaleriController::class,'create']);
    Route::post('admin/galeri/store',[GaleriController::class,'store']);
    Route::get('admin/galeri/edit/{id_galeri}',[GaleriController::class,'edit']);
    Route::post('admin/galeri/edit_proses',[GaleriController::class,'edit_proses']);
    Route::get('admin/galeri/delete/{id_galeri}',[GaleriController::class,'delete']);
    Route::get('admin/galeri/cari',[GaleriController::class,'cari']);
    //slider
    Route::get('admin/slider',[SliderController::class,'index']);
    Route::get('admin/slider/create',[SliderController::class,'create']);
    Route::post('admin/slider/create_proses',[SliderController::class,'create_proses']);
    Route::get('admin/slider/delete/{id_slider}',[SliderController::class,'delete']);
    Route::get('admin/slider/edit/{id_slider}',[SliderController::class,'edit']);
    Route::post('admin/slider/edit_proses',[SliderController::class,'edit_proses']);

    //user
    Route::get('admin/user',[UserController::class,'index']);
    Route::post('admin/user/create_proses',[UserController::class,'create_proses']);
    Route::get('admin/user/edit/{id_user}',[UserController::class,'edit']);
    Route::post('admin/user/update_proses',[UserController::class,'update_proses']);
    Route::get('admin/user/delete/{id_user}',[UserController::class,'delete']);

    //pesan
    Route::get('admin/pesan',[PesanController::class,'index']);
    Route::get('admin/pesan/delete/{id_pesan}',[PesanController::class,'delete']);

    //konfigurtasi
    Route::get('admin/konfigurasi',[KonfigurasiController::class,'index']);
    Route::post('admin/konfigurasi/proses_konfigurasi',[KonfigurasiController::class,'proses_konfigurasi']);
    Route::get('admin/konfigurasi/logo',[KonfigurasiController::class,'logo']);
    Route::post('admin/konfigurasi/proses_logo',[KonfigurasiController::class,'proses_logo']);

    //career
    Route::get('admin/career',[CareerController::class,'index']);
    Route::get('admin/career/tambah',[CareerController::class,'tambah']);
    Route::post('admin/career/proses_tambah',[CareerController::class,'proses_tambah']);
    Route::get('admin/career/edit/{id_career}',[CareerController::class,'edit']);
    Route::post('admin/career/edit_proses',[CareerController::class,'edit_proses']);
    Route::get('admin/career/delete/{id_career}',[CareerController::class,'delete']);

    //contact

Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::post('contact/send',[ContactController::class,'send']);


//menu transport

Route::get('/breakbulk',[BreakBulkController::class,'index']);
Route::get('/bulkcargo',[BulkCargoController::class,'index']);
Route::get('/cargobreak',[CargoBreakBulkController::class,'index']);
Route::get('/container',[ContainerController::class,'index']);
Route::get('/heavyduty',[HeavyDutyController::class,'index']);
Route::get('cargobreakbulk',[CargoBreakBulkController::class,'index']);

//menu heavy

Route::get('/crane',[CraneController::class,'index']);
Route::get('/excavator',[ExcavatorController::class,'index']);
Route::get('/forkclift',[ForkcliftController::class,'index']);
Route::get('/wheelloader',[WheelLoaderController::class,'index']);
Route::get('/compactor',[CompactorController::class,'index']);

//jobkarir
Route::get('jobkarir',[JobKarirController::class,'index']);
Route::get('jobkarir/details/{id_career}',[JobKarirController::class,'details']);

Route::get('locale/{locale}', function($locale){
    Session()->put('locale',$locale);

    return redirect()->back();
});
