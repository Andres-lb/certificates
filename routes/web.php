<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;

use App\Models\Certificate;
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


// Route::get('register', [RegisterController::class,'create']);
// Route::post('register', [RegisterController::class,'store']);
// Route::get('allcertificates', [RegisterController::class,'allcertificate']);
// Route::get('allcertificates/{certificate}',[RegisterController::class,'find']);

// Route::patch('allcertificates/{certificate}',[RegisterController::class,'update']);
// Route::delete('allcertificates',[RegisterController::class,'destroy']);
Route::resource('certificates', CertificateController::class);
