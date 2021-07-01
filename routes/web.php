<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\VacanciesController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\VacancyController;


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

Route::get('/', function () {
    return view('welcome');
});
// ->name('inicio');



Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('vacante/{vacancy:id}', [pageController::class, 'vacancy'])->name('vacancy');


// Route::get('/', [VacancyController::class, 'vacancy'])->name('vacancy');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth:sanctum', 'verified'])->name('dashboard');



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');



Route::get('vacante',[VacanciesController::class, 'vacancies'])->name('course');


Route::resource('vacancies', VacanciesController::class)->except('show')->names('admin.vacancies');



Route::get('/prueba', function () {
     return view('prueba');
 })->name('prueba');