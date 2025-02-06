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
    Route::prefix('students')->group(function () {
        Route::get('/', [AdminPage::class, 'index2'])->name('admin.students');
        Route::post('/', [StudentController::class, 'store'])->name('students.store');
        Route::put('/{id}', [StudentController::class, 'update'])->name('students.update');
        Route::delete('/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
        Route::get('/{id}', [StudentController::class, 'read'])->name('students.read');
    });

    // Grades
    Route::prefix('grades')->group(function () {
        Route::get('/', [AdminPage::class, 'index3'])->name('admin.grades');
        Route::post('/', [GradeController::class, 'store'])->name('grades.store');
        Route::put('/{id}', [GradeController::class, 'update'])->name('grades.update');
        Route::delete('/{id}', [GradeController::class, 'destroy'])->name('grades.destroy');
    });

    // Departments
    Route::prefix('departments')->group(function () {
        Route::get('/', [AdminPage::class, 'index4'])->name('admin.departments');
        Route::post('/', [DepartmentController::class, 'store'])->name('departments.store');
        Route::put('/{id}', [DepartmentController::class, 'update'])->name('departments.update');
        Route::delete('/{id}', [DepartmentController::class, 'destroy'])->name('departments.destroy');
    });

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