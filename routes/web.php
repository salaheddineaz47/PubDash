<?php

use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicationController::class, 'index'])->name('publications.index');
