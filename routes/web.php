<?php

use App\Http\Controllers\ShortUrlController;
use Illuminate\Support\Facades\Route;


Route::get("/", [ShortUrlController::class, "index"])->name("short-url.index");
Route::post("/", [ShortUrlController::class, "store"])->name("short-url.store");
Route::get("to/{code}", [ShortUrlController::class, "get_url"])->name("short-url.get");
