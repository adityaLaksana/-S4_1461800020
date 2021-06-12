<?php

use App\Http\Controllers\ControllerBaru;
use Illuminate\Support\Facades\Route;

Route::get('/', 'ControllerBaru@home') -> name ('home');
Route::get('artikel', 'ControllerBaru@artikel') -> name ('artikel');