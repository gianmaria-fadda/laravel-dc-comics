<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\ComicController;
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
    $firstName = 'Gino';
    $lastName = 'Paoli';

    return view('welcome', [
        'firstName' => $firstName,
        'lastName' => $lastName,
    ]);
});

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});

Route::resource('comics', ComicController::class);