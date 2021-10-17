<?php

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


Auth::routes();
Route::get('/project/{project}', [App\Http\Controllers\HomeController::class, 'projectDetail'])->name('projectDetail');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin_', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/admin_/projects', [App\Http\Controllers\AdminController::class, 'projectsIndex'])->name('projectsIndex');
Route::get('/admin_/add-project', [App\Http\Controllers\AdminController::class, 'projectsAdd'])->name('projectsAdd');
Route::post('/admin_/save-project', [App\Http\Controllers\AdminController::class, 'projectsSave'])->name('projectSave');
Route::post('/admin_/save-project/{project}', [App\Http\Controllers\AdminController::class, 'projectsEditSave'])->name('projectEditSave');
Route::get('/admin_/projects-view/{project}', [App\Http\Controllers\AdminController::class, 'projectsView'])->name('projectsView');
Route::get('/admin_/projects-edit/{project}', [App\Http\Controllers\AdminController::class, 'projectsEdit'])->name('projectsEdit');
Route::get('/admin_/projects-delete/{project}', [App\Http\Controllers\AdminController::class, 'projectsDelete'])->name('projectsDelete');
Route::get('/softcap-reach/{project}', [App\Http\Controllers\HomeController::class, 'softCapReach'])->name('softCapReach');
Route::get('/hardcap-reach/{project}', [App\Http\Controllers\HomeController::class, 'hardCapReach'])->name('hardCapReach');
Route::get('/project-success/{project}', [App\Http\Controllers\HomeController::class, 'projectSuccess'])->name('projectSuccess');
Route::get('/project-fail/{project}', [App\Http\Controllers\HomeController::class, 'projectFail'])->name('projectFail');
Route::get('/open-time/{project}/{date}', [App\Http\Controllers\HomeController::class, 'openTime'])->name('openTime');
Route::get('/close-time/{project}/{date}', [App\Http\Controllers\HomeController::class, 'closeTime'])->name('closeTime');

Route::get('/set-upcoming/{project}', [App\Http\Controllers\HomeController::class, 'setUpcoming'])->name('setUpcoming');
Route::get('/set-upcoming-false/{project}', [App\Http\Controllers\HomeController::class, 'setUpcomingFalse'])->name('setUpcomingFalse');

Route::post('/set-data', [App\Http\Controllers\HomeController::class, 'setData'])->name('setData');
