<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LeadController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/leads', [LeadController::class, 'list'])->name('api-leads.list');
    Route::post('/leads', [LeadController::class, 'store'])->name('api-leads.store');
    Route::get('/leads/{id}', [LeadController::class, 'show'])->name('api-leads.show');
    Route::put('/leads/{id}', [LeadController::class, 'update'])->name('api-leads.update');
    Route::delete('/leads/{id}', [LeadController::class, 'destroy'])->name('api-leads.destroy');
});



Route::post('/login', [AuthController::class, 'login']);
