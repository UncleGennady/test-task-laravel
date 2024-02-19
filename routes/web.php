<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Models\Contact;
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

Route::get('/', [UserController::class, "index"])->name('users');
Route::post('/', [UserController::class, "store"])->name('users.store');

Route::get("/{user}/edit", [UserController::class, "edit"])->name('users.edit')->whereNumber('user');
Route::patch("/{user}", [UserController::class, "update"])->name('users.update')->whereNumber('user');
Route::delete('/{user}', [UserController::class, "destroy"])->name('users.destroy')->whereNumber('user');

Route::get("/contacts/{user}/create", [ContactController::class, "create"])->name('contacts.create')->whereNumber('user');
Route::post('/contacts/', [ContactController::class, "store"])->name('contacts.store');
Route::get("/contacts/{contact}/edit", [ContactController::class, "edit"])->name('contacts.edit')->whereNumber('contact');
Route::patch("/contacts/{contact}", [ContactController::class, "update"])->name('contacts.update')->whereNumber('contact');
Route::delete("/contacts/{contact}", [ContactController::class, "destroy"])->name('contacts.destroy')->whereNumber('contact');
