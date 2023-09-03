<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WebhookController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('redirects','App\Http\Controllers\HomeController@index');
Route::get('edit/{id}','App\Http\Controllers\HomeController@edit')->name('edit');
Route::post('update/{id}','App\Http\Controllers\HomeController@update')->name('update');
Route::resource('task',App\Http\Controllers\TaskController::class);
//Payment Routes
Route::post('/process-payment', [PaymentController::class,'initiatePayment'])->name('process-payment');
//webhook configuration
Route::post('/stripe/webhook', [WebhookController::class,'handleStripeWebhook'])->name('stripe.webhook');
Route::get('payment',function (){
    return view('payment');
});
//Rating Routes
Route::get('/rate/{task}', 'RatingController@showRatingForm')->name('rate.task');
Route::post('/rate/{task}', 'RatingController@storeRating')->name('rate.store');
