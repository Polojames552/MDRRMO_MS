<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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
    
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return Redirect::to('login');
});

// Route::get('/', function () {
//     return view('auth.login');
// })->name('auth.login');

// Route::middleware(['auth','isAdmin'])->group(function(){
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     });
// });

Route::middleware('auth','isAdmin')->group(function () {
    Route::get('/sampledash', function () {
        return view('sampledash');
    });
    Route::get('/Adduser', function () {
        return view('Adduser');
    });
    Route::get('/Unreviewed', function () {
        return view('Unreviewed');
    });
 
});
 Route::get('/dashboard', function () {
     return view('dashboard');
 })->middleware(['auth','isAdmin'])->name('dashboard');

//   Route::middleware(['auth'])->group(function(){
     Route::get('/UserDash', function () {
       return view('UserDash');
    });
//  });

Route::get('/Employee', function () {
    return view('Employee');
});

Route::get('/NewReport', function () {
    return view('NewReport');
});

Route::get('/Report', function () {
    return view('Report');
});

require __DIR__.'/auth.php';
