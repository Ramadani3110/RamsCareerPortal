<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobsController;
use App\Livewire\Admin\Applications;
use App\Livewire\Admin\JobPost;
use App\Livewire\Admin\JobSkils;
use App\Livewire\Applicants\MyApplications;
use App\Livewire\Dashboard;

Route::middleware(['guest'])->group(function () {
    Route::get('/a/login',[AuthController::class,  'index'])->name('login');
});

Route::get('/a/register',[AuthController::class,  'register'])->name('register');
Route::get('/',[JobsController::class, 'index'])->name('landing-page');
Route::get('/jobs/list',[JobsController::class, 'jobs'])->name('jobs-list');

Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/skils', JobSkils::class)->name('skils');
        Route::get('/jobs', JobPost::class)->name('jobs');
        Route::get('/applicans', Applications::class)->name('applicans');
    });
    Route::middleware(['role:applicant'])->group(function () {
        Route::get('/my-applications', MyApplications::class)->name('my-applications');
    });

    Route::get('/jobs/{jobId}', [JobsController::class,'show'])->name('jobs.show');
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::post('/logout', [AuthController::class,'logout'])->name('logout');
});
