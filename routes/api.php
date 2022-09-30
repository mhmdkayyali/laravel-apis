<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/sort", [ApiController::class, "sortString"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
