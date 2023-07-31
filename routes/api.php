<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('APILogIn', [APIController::class, 'APILogIn']);

Route::post('APIClass', [APIController::class, 'APIClass']);
Route::post('APIClassSave', [APIController::class, 'APIClassSave']);
Route::post('APIClassUpdate', [APIController::class, 'APIClassUpdate']);
Route::post('APIClassDelete', [APIController::class, 'APIClassDelete']);

Route::post('APIYear', [APIController::class, 'APIYear']);
Route::post('APIYearSave', [APIController::class, 'APIYearSave']);
Route::post('APIYearUpdate', [APIController::class, 'APIYearUpdate']);
Route::post('APIYearDelete', [APIController::class, 'APIYearDelete']);

Route::post('APISubject', [APIController::class, 'APISubject']);
Route::post('APISubjectSave', [APIController::class, 'APISubjectSave']);
Route::post('APISubjectUpdate', [APIController::class, 'APISubjectUpdate']);
Route::post('APISubjectDelete', [APIController::class, 'APISubjectDelete']);

Route::post('APIMarksEntry', [APIController::class, 'APIMarksEntry']);
Route::post('API/Marks/Entry/Save', [APIController::class, 'APIMarksEntrySave']);
Route::post('APIMarksEntryUpdate', [APIController::class, 'APIMarksEntryUpdate']);
Route::post('APIMarksEntryDelete', [APIController::class, 'APIMarksEntryDelete']);

Route::post('APIMarksGrade', [APIController::class, 'APIMarksGrade']);
Route::post('APIMarksGradeSave', [APIController::class, 'APIMarksGradeSave']);
Route::post('APIMarksGradeUpdate', [APIController::class, 'APIMarksGradeUpdate']);
Route::post('APIMarksGradeDelete', [APIController::class, 'APIMarksGradeDelete']);

Route::post('APIStudentReg', [APIController::class, 'APIStudentReg']);
Route::post('APIStudentRegSave', [APIController::class, 'APIStudentRegSave']);
Route::post('APIStudentRegUpdate', [APIController::class, 'APIStudentRegUpdate']);
Route::post('APIStudentRegDelete', [APIController::class, 'APIStudentRegDelete']);

Route::post('APIAdmin', [APIController::class, 'APIAdmin']);
Route::post('APIAdminSave', [APIController::class, 'APIAdminSave']);
Route::post('APIAdminUpdate', [APIController::class, 'APIAdminUpdate']);
Route::post('APIAdminDelete', [APIController::class, 'APIAdminDelete']);