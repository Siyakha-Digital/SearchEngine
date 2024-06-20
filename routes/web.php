<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SMMEController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SmmeCategoryController;
use Illuminate\Support\Facades\Auth;


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

// Home route
Route::get('/', function () {
    if (Auth::check()) {
        // The user is logged in, redirect to dashboard
        return redirect()->route('dashboard');
    } else {
        // The user is not logged in, show the welcome view
        return redirect()->route('register');
    }
})->named('home');

// Dashboard route
Route::get('/dashboard', function () {
    return view('main_dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Auth routes
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register2', function () {
    return view('auth.register2');
})->name('register2');
Route::get('/login2', function () {
    return view('auth.login2');
})->name('login2');

// SMME Routes
Route::get('/smmes', [SMMEController::class, 'index'])->name('smmes.index');
Route::get('/smmes/create', [SMMEController::class, 'create'])->name('smmes.create');
Route::post('/smmes', [SMMEController::class, 'store'])->name('smmes.store');
Route::get('/smmes/{smme}', [SMMEController::class, 'show'])->name('smmes.show');
Route::get('/smmes/{smme}/edit', [SMMEController::class, 'edit'])->name('smmes.edit');
Route::delete('/smmes/{smme}', [SMMEController::class, 'destroy'])->name('smmes.destroy');
Route::put('/smmes/{smme}', [SMMEController::class, 'update'])->name('smmes.update');


//question route
Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index');
Route::get('/questions/create', [QuestionController::class, 'create'])->name('questions.create');
Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');
Route::get('/questions/{question}', [QuestionController::class, 'show'])->name('questions.show');
Route::get('/questions/{question}/edit', [QuestionController::class, 'edit'])->name('questions.edit');
Route::delete('/questions/{question}', [QuestionController::class, 'destroy'])->name('questions.destroy');
Route::put('/questions/{question}', [QuestionController::class, 'update'])->name('questions.update');

//answer routete
Route::get('/answers/create', [AnswerController::class, 'create'])->name('answers.create');
Route::get('/answers/{answer}/edit', [AnswerController::class, 'edit'])->name('answers.edit');
Route::post('/answers', [AnswerController::class, 'store'])->name('answers.store');
Route::get('/answers/{answer}', [AnswerController::class, 'show'])->name('answers.show');
Route::put('/answers/{answer}', [AnswerController::class, 'update'])->name('answers.update');

//categories route
Route::get('/categories/store', function () {
    return view('categories.store');
})->name('categories.store');

// Route to handle the form submission
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store.submit');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
// Route::view('/categories/store', 'categories.store')->name('categories.store');
//smme categories


Route::resource('smmes', SmmeController::class);
Route::get('smmescategories', [SmmeController::class, 'index'])->name('smmescategories.index');
Route::post('smmes/{id}/add-category', [SmmeController::class, 'addCategory'])->name('smmes.add_category');
Route::post('smmes/{id}/remove-category', [SmmeController::class, 'removeCategory'])->name('smmes.remove_category');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
