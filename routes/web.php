<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\Admin\AdminPage;
use App\Http\Controllers\DepartmentController;


Route::get('/home', [HomeController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/student', [StudentController::class, 'index']);

Route::get('/grade', [GradeController::class, 'index']);

Route::get('/department', [DepartmentController::class, 'index']);

Route::get('contact', function () {
    return view('contact', [
        'title' => 'Contact Us',
        'name' => 'Rionaldo Rizky Setyawan',
        'class' => '11 PPLG 2',
        'linkedin' => 'https://www.linkedin.com/in/rionaldo-rizky-setyawan-5aa5162a1/',
        'github' => 'https://github.com/rionaldoriskysetyawan4',
    ]);
});


// Group routes with 'admin' prefix
Route::prefix('admin')->group(function () {
    Route::get('/home', [AdminPage::class, 'index'])->name('admin.home');

    // Students
    Route::get('/students', [AdminPage::class, 'index2'])->name('admin.students');
    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');

    // Grades
    Route::get('/grades', [AdminPage::class, 'index3'])->name('admin.grades');
    Route::post('/grades', [GradeController::class, 'store'])->name('grades.store');
    Route::put('/grades/{id}', [GradeController::class, 'update'])->name('grades.update');
    Route::delete('/grades/{id}', [GradeController::class, 'destroy'])->name('grades.destroy');

    // Departments
    Route::get('/departments', [AdminPage::class, 'index4'])->name('admin.departments');
    Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');
    Route::put('/departments/{id}', [DepartmentController::class, 'update'])->name('departments.update');
    Route::delete('/departments/{id}', [DepartmentController::class, 'destroy'])->name('departments.destroy');

    // Contact Admin
    Route::get('/contact', function () {
        return view('Pages/Admin/contact-admin', [
            'title' => 'Contact Us',
            'name' => 'Rionaldo Rizky Setyawan',
            'class' => '11 PPLG 2',
            'linkedin' => 'https://www.linkedin.com/in/rionaldo-rizky-setyawan-5aa5162a1/',
            'github' => 'https://github.com/rionaldoriskysetyawan4',
        ]);
    })->name('admin.contact');
});
