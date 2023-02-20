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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/store', function () {
    $filter = request('style');
    if (isset($filter)) {
        return 'this page is viewing <span style="color: red">' . $filter . '<span>';
    } else {
        return 'this page is viewing <span style="color: red">All Product<span>';

    }
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
