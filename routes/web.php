<?php

use App\Http\Controllers\UserInfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
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
    return view('pages/homepage');
})->middleware('response.log');

Route::get('/about', function () {
    return view('pages/about');
})->middleware('response.log');

Route::get('/services', function () {
    return view('pages/services');
})->middleware('response.log');

Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index']);
Route::get('/blog/article/{articleId}', [\App\Http\Controllers\BlogController::class, 'show'])->name('article.show');

// Route::get('/blog/article', function () {
//     return view('pages/blog-article');
// })->middleware('response.log');

Route::get('/contact-us', function () {
    return view('pages/contactUs');
})->middleware('response.log');


Route::match(['get'], '/contact-us', [ContactUsController::class, 'contactUs'])->name('contactUs.show');

Route::post('/store-contact-info', [ContactUsController::class, 'storeContactInfo'])->name('contactUs.store');
Route::get('/manufacturer', [\App\Http\Controllers\ManufacturerController::class, 'create']);


Route::group(['prefix' => '/user'], function () {
    Route::get('/info', ['uses' => UserInfoController::class . '@index']);
    Route::post('/info', ['uses' => UserInfoController::class . '@storeInfo']);
    Route::get('/info/stored', ['uses' => UserInfoController::class . '@stored']);
});
