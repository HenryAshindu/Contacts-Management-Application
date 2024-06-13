<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'home'])-> name('contact.home');
Route::get('/create', [ContactController::class, 'create'])-> name('contact.create');
Route::post('/contact/store', [ContactController::class, 'store'])-> name('contact.store');
Route::get('/edit_contact/{id}', [ContactController::class, 'edit'])-> name('contact.edit');
Route::put('/update_contact/{id}', [ContactController::class, 'update'])-> name('contact.update');
Route::get('/delete_contact/{id}', [ContactController::class, 'destroy'])-> name('contact.delete');
Route::get('/groups', [ContactController::class, 'group'])->name('contact.group');