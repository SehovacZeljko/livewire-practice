<?php

use App\Livewire\BookList;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', BookList::class);
