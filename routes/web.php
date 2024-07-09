<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FenipController;

Route::get("/" , [FenipController::class , "home"])->name("home");

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
