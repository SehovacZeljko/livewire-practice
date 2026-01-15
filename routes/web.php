<?php

use App\Livewire\BookList;
use App\Livewire\CreateBook;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', BookList::class);
// Route::get('/create', CreateBook::class);


Route::get('/', BookList::class)->name('home');
Route::get('/create', CreateBook::class)->name('create.book');
