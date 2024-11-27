<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\DepartmentController;



Route::get('/home', [HomeController::class, 'index']);  

Route::get('/contact', [ContactController::class, 'index']);  

Route::get('/student', [StudentController::class, 'index']);

Route::get('/grade', [GradeController::class, 'index']);

Route::get('/department', [DepartmentController::class, 'index']);

Route::get('contact', function() {     
    return view('contact', [
        'title' => 'Contact Us',
        'name' => 'Rionaldo Rizky Setyawan',
        'class' => '11 PPLG 2',
        'linkedin' => 'https://www.linkedin.com/in/rionaldo-rizky-setyawan-5aa5162a1/',
        'github' => 'https://github.com/rionaldoriskysetyawan4',
    ]); 
});
