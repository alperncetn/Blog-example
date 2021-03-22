<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Select2AutocompleteController;
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

Route::get('/blog',[BlogController::class,'index']);


Route::resource('blog',BlogController::class);
Route::resource('user',UserController::class);

Route::get('select2-autocomplete', [Select2AutocompleteController::class,'layout']);
Route::get('select2-autocomplete-ajax', [Select2AutocompleteController::class,'dataAjax']);

Route::get('/deneme',function (){
    return view('deneme');
});

Route::get('users', [UserController::class,'index'])->name('users');

Route::get('usercategories', [UserController::class,'usercategories'])->name('usercategories');

Route::get('/blog/edit/{id}', [BlogController::class,'edit'])->name('BlogEdit');

Route::get('/blog/destroy/{id}', [BlogController::class,'destroy'])->name('BlogDelete');

Route::get('/blog/listele/{id}',function ($id){
    return Blog::find($id);
});

Route::get('/blog/show/{id}', [BlogController::class,'goster'])->name('BlogShow');



Route::resource('categories',CategoryController::class);

Route::get('/categories/edit/{id}', [CategoryController::class,'edit'])->name('CategoriesEdit');

Route::get('/categories/destroy/{id}', [CategoryController::class,'destroy'])->name('CategoriesDelete');
