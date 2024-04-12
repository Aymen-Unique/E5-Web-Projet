<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\websiteController;
use App\Http\Controllers\CategoriesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[SiteController::class,'accueil'])->name("accueil"); 
Route::get('/produits',[SiteController::class,'produits'])->name("produits"); 
Route::get('/presntation',[SiteController::class,'presntation'])->name("presntation");

Route::get('/contact',[SiteController::class,'contact'])->name("contact");
Route::post('/contact/save',[SiteController::class,'save'])->name("save");
Route::resource('categories',CategoriesController::class);
Route::post('/categories/create', [CategoriesController::class,'create']);


