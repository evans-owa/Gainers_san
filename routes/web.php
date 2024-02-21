<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/products', function () {
    return view('frontend\products');
});

// Route::get('/', function () {
//     return view('frontend\products');
// });

Route::get('/about', function () {
    return view('frontend\about');
});

Route::get('/workers', function () {
    return view('frontend\workers');
});
Route::get('/blog', function () {
    return view('frontend\blog');
});

Route::get('/contacts', function () {
    return view('frontend\contacts');
});

Route::get('/dashboard', function () {
    return view('backend\dashboard');
});

Route::get('/productAdd', function () {
    return view('backend\productAdd');
});

Route::get('/notification', function () {
    return view('backend\notification');
});















// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
