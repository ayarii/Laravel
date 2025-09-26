<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdvisorController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});
#basic route
Route::get('/coucou', function () {
    return 'Bienvenue sur la page d’accueil';
});
#paramétré
Route::get('/user/{id}', function ($id) {
    return "Utilisateur : " . $id;
});
Route::get('/users/{username?}', function ($username) {
    return "username_utilisateur : " . $username;
});

Route::get('freegaza',function (){
    return "'Im here !";})->name('testroute3');

#interface blade simple
Route::get('/contact', function () {
    return view('contact'); //
});

# php +route
Route::get('/dashboard', [ProductController::class, 'index']);

Route::get('/addProduct',[ProductController::class,'create']);

Route::get('/advisor', [AdvisorController::class, 'show'])->name('advisor');

#Middleware
Route::get('/cours/', [\App\Http\Controllers\CoursController::class, 'index'])
    ->middleware('check-age');
Route::get('/coucou',[CategoryController::class,'home'])->name('hello');
Route::get('/allCours',[\App\Http\Controllers\CoursController::class,'index'])->name('listCours');
Route::get('/cours/{id}', [\App\Http\Controllers\CoursController::class, 'show'])->name('cours.show');

