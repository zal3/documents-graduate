<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Pages\{
    Home\Main as Home,
    About\Main as About,
    Document\Main as Document,
    Developers\Main as Developers,
};

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

// Route::get('/', function () {
//     return view('welcome');
// });
//home
Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/developers', Developers::class)->name('developers');
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/document', Document::class)->name('document');
});
