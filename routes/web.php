<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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
// admin route starts here 

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'Index'])->name('login_form');

    Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');

    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
    Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout')->middleware('admin');
    Route::get('/jobform', [JobController::class, 'getJobPage'])->name('admin.jobform')->middleware('admin');
    Route::post('/posted-jobs-data', [JobController::class, 'sendPostedJobsData'])->middleware('admin');


    Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('admin')
        ->name('register');

    Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('admin');
});



// admin route ends here 




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'getDashboard'])
    ->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'showJobs'])
    ->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__ . '/auth.php';
