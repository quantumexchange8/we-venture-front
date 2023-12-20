<?php

use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('localization/{locale}',[LocalizationController::class, 'setLang']);

Route::get('/',[PageController::class, 'index'])->name('index');
Route::get('about',[PageController::class, 'about'])->name('about');
Route::get('service',[PageController::class, 'service'])->name('service');
Route::prefix('insight')->group(function () {
    Route::get('/core_value',[PageController::class, 'core_value'])->name('core_value');
    Route::get('/portfolio',[PageController::class, 'portfolio'])->name('portfolio');
});
Route::prefix('performance')->group(function () {
    Route::get('/merge_signal_strategy',[PageController::class, 'merge_signal_strategy'])->name('merge_signal_strategy');
    Route::get('/grand_pacific_strategy',[PageController::class, 'grand_pacific_strategy'])->name('grand_pacific_strategy');
});
Route::prefix('resource')->group(function () {
    Route::get('/faqs',[PageController::class, 'faqs'])->name('faqs');
    Route::get('/news',[PageController::class, 'news'])->name('news');
});
Route::get('contact',[PageController::class, 'contact'])->name('contact');
Route::post('send_mail',[PageController::class, 'send_mail'])->name('send_mail');
