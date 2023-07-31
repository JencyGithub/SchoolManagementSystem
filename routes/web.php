<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ForgetController;
use App\Http\Controllers\FrontedController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\YearController;
use App\Http\Controllers\MarksEntryController;
use App\Http\Controllers\MarksGradeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\StudentController;

// -----------------------------
// Log in Check process
// -----------------------------


// Login Page
Route::get('LogIn', [SchoolController::class, 'Login'])->name('Login');

// Login Check
Route::get('LoginId', [SchoolController::class, 'LoginId'])->name('LoginId');

// LogOut page
Route::get('LogOut', [SchoolController::class, 'LogOut'])->name('LogOut');



// ---------------------
// Forget Password
// ----------------------

// Forget Password
Route::get('Forget', [ForgetController::class, 'Forget'])->name('ForgetPage');

// Change Password
Route::get('ChangePass', [ForgetController::class, 'ChangePass'])->name('ChangePass');

// Save page call
Route::get('SavePage', [ForgetController::class, 'SavePage'])->name('SavePage');
Route::get('SavePassword', [ForgetController::class, 'SavePassword'])->name('SavePassword');



Route::group(['middleware' => 'logedin'], function () {
    // Class Start here
    Route::get('Class', [ClassController::class, 'Class'])->name('Class');
    Route::get('Class/Save', [ClassController::class, 'DataSave'])->name('Class.Save');
    Route::get('Class/Update{id}', [ClassController::class, 'DataUpdate'])->name('Class.Update');
    Route::get('Class/UpdateSave/{id}', [ClassController::class, 'DataUpdateSave'])->name('UpdateSave');
    Route::get('Class/Delete/{id}', [ClassController::class, 'DeleteData'])->name('DeleteClass');

    // Year start here
    Route::get('Year', [YearController::class, 'Year'])->name('Year');
    Route::get('Year/Save', [YearController::class, 'DataSave'])->name('Year.Save');
    Route::get('Year/Update{id}', [YearController::class, 'DataUpdate'])->name('Year.Update');
    Route::get('Year/UpdateSave/{id}', [YearController::class, 'DataUpdateSave'])->name('Year.UpdateSave');
    Route::get('Year/Delete/{id}', [YearController::class, 'DeleteData'])->name('DeleteYear');

    // Subject start here
    Route::get('Subject', [SubjectController::class, 'Subject'])->name('Subject');
    Route::get('Subject/Save', [SubjectController::class, 'SubjectDataSave'])->name('Subject.Save');
    Route::get('Subject/Update{id}', [SubjectController::class, 'DataUpdate'])->name('Subject.Update');
    Route::get('Subject/UpdateSave/{id}', [SubjectController::class, 'DataUpdateSave'])->name('Subject.UpdateSave');
    Route::get('Subject/Delete/{id}', [SubjectController::class, 'DeleteData'])->name('DeleteSubject');

    //MarksEntry start here
    Route::get('MarksEntry', [MarksEntryController::class, 'MarksEntry'])->name('MarksEntry');
    Route::get('MarksEntry/Save', [MarksEntryController::class, 'MarksEntrySave'])->name('MarksEntry/Save');
    Route::get('MarksEntry/Update/{id}', [MarksEntryController::class, 'MarksEntryUpdate'])->name('MarksEntry.Update');
    Route::get('MarksEntry/UpdateSave/{id}', [MarksEntryController::class, 'MarksEntryUpdateSave'])->name('MarksEntry.UpdateSave');
    Route::get('MarksEntry/Delete/{id}', [MarksEntryController::class, 'MarksEntryDelete'])->name('MarksEntry.Delete');

    //MarksGrade start here
    Route::get('MarksGrade', [MarksGradeController::class, 'MarksGrade'])->name('MarksGrade');
    Route::get('MarksGrade/Save', [MarksGradeController::class, 'MarksGradeSave'])->name('MarksGrade/Save');
    Route::get('MarksGrade/Update/{id}', [MarksGradeController::class, 'MarksGradeUpdate'])->name('MarksGrade.Update');
    Route::get('MarksGrade/UpdateSave/{id}', [MarksGradeController::class, 'MarksGradeUpdateSave'])->name('MarksGrade.UpdateSave');
    Route::get('MarksGrade/Delete/{id}', [MarksGradeController::class, 'MarksGradeDelete'])->name('MarksGrade.Delete');

    // Profile start here
    Route::get('Profile', [ProfileController::class, 'Profile'])->name('Profile');
    Route::get('ChangePassword', [ProfileController::class, 'ChangePassword'])->name('ChangePassword');
    Route::get('Change/Pass', [ProfileController::class, 'ChangePass'])->name('ChangePassCheck');
    Route::get('ProfileUpdate{id}', [ProfileController::class, 'ProfileUpdate'])->name('ProfileUpdate');
    Route::get('Profile/UpdateSave{id}', [ProfileController::class, 'ProfileUpdateSave'])->name('Profile.UpdateSave');

    //Student start here
    Route::get('Studentreg', [StudentController::class, 'Studentreg'])->name('Studentreg');
    Route::get('Studentreg/Save', [StudentController::class, 'DataSave'])->name('Studentreg.Save');
    Route::get('StudentTable', [StudentController::class, 'StudentTable'])->name('StudentTable');
    Route::get('UpdateStudent{id}', [StudentController::class, 'UpdateStudent'])->name('UpdateStudent');
    Route::get('Update/Student/Save{id}', [StudentController::class, 'UpdateStudentSave'])->name('UpdateStudentSave');
    Route::get('Delete/Student/{id}', [StudentController::class, 'DeleteData'])->name('DeleteData');

    //Result start here
    Route::get('Result', [ResultController::class, 'Result'])->name('Result');
    Route::get('AResult', [ResultController::class, 'AResult'])->name('AResult');

    // Home Page
    Route::get('Home', [SchoolController::class, 'Home'])->name('Home');
});

// ---------------------
// Fronted Website
// ----------------------


Route::get('/', [FrontedController::class, 'FHome'])->name('FHome');

Route::get('CorseDataSave', [FrontedController::class, 'CorseDataSave'])->name('CorseDataSave');

Route::get('FAbout', [FrontedController::class, 'FAbout'])->name('FAbout');

Route::get('FCourses', [FrontedController::class, 'FCourses'])->name('FCourses');

Route::get('FTeacher', [FrontedController::class, 'FTeacher'])->name('FTeacher');

Route::get('FContact', [FrontedController::class, 'FContact'])->name('FContact');

Route::get('FContactSave', [FrontedController::class, 'ContactDataSave'])->name('FContactSave');

//Student middelware

Route::group(['middleware' => ['Slogedin']], function () {
    Route::get('Slogout', [FrontedController::class, 'Slogout'])->name('Slogout');
    Route::get('SResult', [FrontedController::class, 'SResult'])->name('SResult');
    Route::get('FProfile', [FrontedController::class, 'FProfile'])->name('FProfile');
    Route::get('FProfileSave', [FrontedController::class, 'FProfileSave'])->name('FProfileSave');
    Route::get('CPass', [FrontedController::class, 'CPass'])->name('CPass');
    Route::post('CPassSave', [FrontedController::class, 'CPassSave'])->name('CPassSave');
});

Route::get('SloginUser', [FrontedController::class, 'SloginUser'])->name('SloginUser');
Route::get('FLogin', [FrontedController::class, 'FLogin'])->name('FLogin');
Route::get('FForgetPassopen', [FrontedController::class, 'FForgetPassopen'])->name('FForgetPassopen');
Route::get('FForgetPassSave', [FrontedController::class, 'FForgetPassSave'])->name('FForgetPassSave');

Route::get('FRegistration', [FrontedController::class, 'FRegistration'])->name('FRegistration');
Route::get('StudentDataSave', [FrontedController::class, 'StudentDataSave'])->name('StudentDataSave');
