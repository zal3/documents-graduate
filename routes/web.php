<?php

use Illuminate\Support\Facades\Route;

    use App\Http\Livewire\Pages\{
        Home\Main as Home,
        Document\Main as Document,
        Unid\Main as Unid,
        Department\Main as Department,
        Graduate\Main as Graduate,
    };

    use App\Http\Livewire\Pages\Document\{
        ArabicDoc as ArabicDoc,
        EnglishDoc as EnglishDoc,
        GraduateDoc as GraduateDoc ,
        MasterDoc as MasterDoc,
        ShowArDoc as ShowArDoc,
        ShowEngDoc as ShowEngDoc,
    };

    use App\Http\Livewire\Pages\Graduate\{
        Add as AddGraduate,
        Profile as ProfileGraduate,
    };

    use App\Http\Livewire\Pages\Department\{
        Student\Science as ScienceStudent,
        Student\Information as InformationStudent,
        Subject\Science as ScienceSubject,
        Subject\Information as InformationSubject,
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
    Route::get('/document/graduate', GraduateDoc::class)->name('graduate-doc');
    Route::get('/document/master', MasterDoc::class)->name('master');
    Route::get('/document/show-ar-doc/[{student_id}]/[{selected}]', ShowArDoc::class)->name('show-ar-doc');
    Route::get('/document/show-eng-doc/[{student_id}]/[{selected}]', ShowEngDoc::class)->name('show-eng-doc');

    //unid
    Route::get('/unid', Unid::class)->name('unid');

    //department
    Route::get('/department', Department::class)->name('department');
    Route::get('/department/science-student', ScienceStudent::class)->name('science-student');
    Route::get('/department/information-student', InformationStudent::class)->name('information-student');
    Route::get('/department/science-subject', ScienceSubject::class)->name('science-subject');
    Route::get('/department/information-subject', InformationSubject::class)->name('information-subject');

    //graduate
    Route::get('/graduate', Graduate::class)->name('graduate');
    Route::get('/graduate/add', AddGraduate::class)->name('add-graduate');
    Route::get('/graduate/profile/{id}', ProfileGraduate::class)->name('profile-graduate');


    });

