<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Pages\{
    Home\Main as Home,};

    use App\Http\Livewire\Pages\{
        Document\Main as Document,};
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
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/document', Document::class)->name('document');

    });

