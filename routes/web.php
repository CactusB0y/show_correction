<?php

use App\Http\Controllers\IngredientController;
use App\Models\Ingredient;
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

Route::get('/', function () {
    $ingredients = Ingredient::all();
    return view('welcome',compact('ingredients'));
});

Route::get('/create', [IngredientController::class, 'create']);
Route::post('/ingredient-store', [IngredientController::class, 'store']);
Route::post('/delete-ingredient/{id}', [IngredientController::class, 'destroy']);
Route::get('/show-ingredient/{id}', [IngredientController::class, 'show']);
