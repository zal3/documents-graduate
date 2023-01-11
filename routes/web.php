<?php

use Illuminate\Support\Facades\Route;

    use App\Http\Livewire\Pages\{
        Home\Main as Home,
        Document\Main as Document,
    };

    use App\Http\Livewire\Pages\Document\{
        ArabicDoc as ArabicDoc,
        EnglishDoc as EnglishDoc,
        GraduateDoc as GraduateDoc ,
        MasterDoc as MasterDoc,
        ShowArDoc as ShowArDoc,
        ShowEngDoc as ShowEngDoc,
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
Route::middleware(['auth:sanctum'])->group(function () {

    //document
    Route::get('/document', Document::class)->name('document');
    Route::get('/document/arabic', ArabicDoc::class)->name('arabic');
    Route::get('/document/english', EnglishDoc::class)->name('english');
    Route::get('/document/graduate', GraduateDoc::class)->name('graduate');
    Route::get('/document/master', MasterDoc::class)->name('master');
    Route::get('/document/show-ar-doc', ShowArDoc::class)->name('show-ar-doc');
    Route::get('/document/show-eng-doc', ShowEngDoc::class)->name('show-eng-doc');


    });

