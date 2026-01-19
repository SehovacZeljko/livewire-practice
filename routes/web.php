<?php

use App\Livewire\BookList;
use App\Livewire\CreateBook;
use Illuminate\Support\Facades\Route;

use App\Livewire\Home;
use App\Livewire\Error404;
use App\Livewire\About;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', BookList::class);
// Route::get('/create', CreateBook::class);


// Route::get('/', BookList::class)->name('home');


Route::get('/', Home::class)->name('home');
Route::get('/create', CreateBook::class)->name('create.book');

Route::get('/404', Error404::class);
Route::get('/about', About::class)->name('about');
