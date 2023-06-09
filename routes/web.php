<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); 
Route::get('/index', function () {
    return view('pages.layouts.index');
});*/
Route::get('/admin', function () {
    return view('admin.layouts.admin');
})->name('admin');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('index');


Route::resource('skills', App\Http\Controllers\SkillController::class)->names([
    'index'   =>  "skill.admin.index",
    'create'  =>  "skill.admin.create",
    'store'   =>  "skill.admin.store",
    'show'    =>  "skill.admin.show",
    'edit'    =>  "skill.admin.edit",
    'update'  =>  "skill.admin.update",
    'destroy' =>  "skill.admin.destroy",
]);
Route::resource('experiences', App\Http\Controllers\ExperienceController::class)->names([
    'index'   =>  "experience.admin.index",
    'create'  =>  "experience.admin.create",
    'store'   =>  "experience.admin.store",
    'show'    =>  "experience.admin.show",
    'edit'    =>  "experience.admin.edit",
    'update'  =>  "experience.admin.update",
    'destroy' =>  "experience.admin.destroy",
]);
Route::resource('formations', App\Http\Controllers\FormationController::class)->names([
    'index'   =>  "formation.admin.index",
    'create'  =>  "formation.admin.create",
    'store'   =>  "formation.admin.store",
    'show'    =>  "formation.admin.show",
    'edit'    =>  "formation.admin.edit",
    'update'  =>  "formation.admin.update",
    'destroy' =>  "formation.admin.destroy",
]);

Route::resource('messages', App\Http\Controllers\ContactController::class)->names([
    'index'   =>  "message.admin.index",
    'create'  =>  "message.admin.create",
    'store'   =>  "message.admin.store",
    'show'    =>  "message.admin.show",
    'edit'    =>  "message.admin.edit",
    'update'  =>  "message.admin.update",
    'destroy' =>  "message.admin.destroy",
]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
