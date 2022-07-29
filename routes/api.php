<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AddedItemController;
use App\Http\Middleware\ConfirmRequestToken;

Route::resource("products", ProductController::class);

Route::resource("users", UserController::class);
Route::get("/get-user-info", [UserController::class, "getUserInfo"])->middleware("haha");

Route::get("/your-added-items", [AddedItemController::class, "test"])->middleware("haha");

Route::post("/cart", [AddedItemController::class, "add"]);

Route::post("/login", [AuthController::class, "login"]);
