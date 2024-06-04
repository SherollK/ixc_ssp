<?php

use App\Http\Controllers\BusinessController;
use App\Http\Controllers\InfluencerController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/redirects', [HomeController::class, "index"]);

//Business Controller

Route::get('/business/campaign', [BusinessController::class, 'showCampaign'])->name('business.campaign');

//Influencer Controller
Route::get('/influencer/campaign', [InfluencerController::class, 'showCampaign'])->name('influencer.campaign');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
