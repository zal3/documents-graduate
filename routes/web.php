<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PdfController;
    use App\Http\Livewire\Pages\{
        Home\Main as Home,
        Document\Main as Document,
        About\Main as About,
        Developers\Main as Developers,
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
        ShowGrad as ShowGrad,
        ShowMast as ShowMast,
    };

    use App\Http\Livewire\Pages\Graduate\{
        Add as AddGraduate,
        Edit as EditGraduate,
        Profile as ProfileGraduate,
    };

    use App\Http\Livewire\Pages\Department\{
        Student\Science as ScienceStudent,
        Student\Information as InformationStudent,
        Subject\Science as ScienceSubject,
        Subject\Information as InformationSubject,
        Subject\Add as AddSubject,
        Subject\Add2 as AddSubject2,
    };

    use App\Http\Livewire\Pages\Unid\{
        Add as AddUnid,
        Unidstu as Unidstu ,
        // Edit as EditUnid,
        // Profile as ProfileUnid,
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

    //document
    Route::get('/document', Document::class)->name('document');
    Route::get('/document/arabic', ArabicDoc::class)->name('arabic');
    Route::get('/document/english', EnglishDoc::class)->name('english');
    Route::get('/document/graduate', GraduateDoc::class)->name('graduate-doc');
    Route::get('/document/master', MasterDoc::class)->name('master');
    Route::get('/document/show-ar-doc/[{student_id}]/[{selected}]/[{selected2}]', ShowArDoc::class)->name('show-ar-doc');
    Route::get('/document/show-eng-doc/[{student_id}]/[{selected}]/[{selected2}]', ShowEngDoc::class)->name('show-eng-doc');
    Route::get('/document/show-grad/[{student_id}]/[{selected}]', ShowGrad::class)->name('show-grad');
    Route::get('/document/show-mast/[{student_id}]/[{selected}]', ShowMast::class)->name('show-mast');

    //unid
    Route::get('/unid', Unid::class)->name('unid');
    Route::get('/unid/add', AddUnid::class)->name('add-unid');
    Route::get('/unid/{unid_id}', Unidstu::class)->name('unidstu');


    //department
    Route::get('/department', Department::class)->name('department');
    Route::get('/department/science-student', ScienceStudent::class)->name('science-student');
    Route::get('/department/information-student', InformationStudent::class)->name('information-student');
    Route::get('/department/science-subject', ScienceSubject::class)->name('science-subject');
    Route::get('/department/information-subject', InformationSubject::class)->name('information-subject');
    Route::get('/department/add-subject', AddSubject::class)->name('add-subject');
    Route::get('/department/add-subject2', AddSubject2::class)->name('add-subject2');

    //graduate
    Route::get('/graduate', Graduate::class)->name('graduate');
    Route::get('/graduate/add', AddGraduate::class)->name('add-graduate');
    Route::get('/graduate/edit/{id}', EditGraduate::class)->name('edit-graduate');
    Route::get('/graduate/profile/{id}', ProfileGraduate::class)->name('profile-graduate');

    Route::get('pdf', [PdfController::class, 'index']);


});
