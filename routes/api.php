<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

// The main route for the contact-app:
Route::resource('contacts', 'App\Http\Controllers\ContactsController');

