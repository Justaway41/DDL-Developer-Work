<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;



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
//All Users
Route::get('/', [ListingController::class,'index'] );

// Store User data
Route::post('/listings', [ListingController::class,'store'] );

//Show edit form
Route::get('/listings/{listing}/edit',[ListingController::class, 'edit']);

//Edit User Detail
Route::put('/listings/{listing}',[ListingController::class, 'update']);

//Delete User Detail
Route::delete('/listings/{listing}',[ListingController::class, 'delete']);


//Show Create Form
Route::get('/listings/create', [ListingController::class,'create'] );

