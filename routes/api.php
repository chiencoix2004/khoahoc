<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SePayWebhookController;
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

// Route::post('/sepay/webhook', [SePayWebhookController::class, 'handle'])->middleware('sepay.webhook');
// Route::post('/sepay/webhook', [SepayWebhookController::class, 'handleWebhook']);  
Route::post('/sepay/webhook', [SepayWebhookController::class, 'handleWebhook']);
// Route::post('/sepay/webhook', '\SePay\SePay\Http\Controllers\SePayWebhookController@handle');
