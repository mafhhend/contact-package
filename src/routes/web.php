<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Samkhdev\Contact\Http\Controllers\ContactController;

Route::get('contact', [ContactController::class, "index"]);
Route::post("contact",[ContactController::class,"store"])->name("contact");
